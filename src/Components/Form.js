import React, { useState } from 'react'
import { Form, Row, Col, InputGroup, FormControl, Button, Card, CardHeader, CardTitle, CardBody, ProgressBar, FloatingLabel } from 'react-bootstrap';
import axios from 'axios'
import '../App.css'
import { fetchWithToken } from '../Config/config';
import { app_dict } from '../Config/config';

const headers = new Headers();

fetchWithToken("http://127.0.01:8000/auth/token/",{
    method: "POST",
    timeout: 5000,
    headers: headers,
    body: JSON.stringify({
        email: "arnav@gmail.com",
        password: "123"
    })
})
.then((data) => {
    // console.log(app_dict.access)
    app_dict.access = data?.access;
    app_dict.refresh = data?.refresh;
})


function Form2() {
    const [serialnum, setserialnum] = useState("");
    const [title, setTitle] = useState("");
    const [fname, setFname] = useState("");
    const [preview, setPrev] = useState(null);
    const [ftype, setFtype] = useState("");
    const [originalscan, setOscan] = useState("");
    const [tperiod, setTperiod] = useState("");
    const [odate, setOdate] = useState("");
    const [author, setAuthor] = useState("");
    const [size, setSize] = useState("");
    const [source, setSource] = useState("");
    const [addinfo, setAddinfo] = useState("");
    const [desc, setDesc] = useState("");
    const [cstatus, setCstatus] = useState("");
    const [cloc, setCloc] = useState("");
    const [sig, setSig] = useState("");
    const [fby, setFby] = useState("");
    const [fdate, setFdate] = useState("");
    const [pdate, setPdate] = useState("");

    const AddSite = async (event) => {
        event.preventDefault();
        event.stopPropagation();
        let formField = new FormData()
        formField.append('serial_number', serialnum)
        formField.append('title', title)
        formField.append('file_name', fname)
        if (preview !== null) {
            formField.append('preview', preview)
        }
        formField.append('file_type', ftype)
        formField.append('original_scan', originalscan)
        formField.append('time_period', tperiod)
        formField.append('origin_date', odate)
        formField.append('author', author)
        formField.append('size', size)
        formField.append('description', desc)
        formField.append('source', source)
        formField.append('signature', sig)
        formField.append('copyright_status', cstatus)
        formField.append('current_location', cloc)
        formField.append('found_by', fby)
        formField.append('found_date', fdate)
        formField.append('production_date', pdate)
        formField.append('additional_info', addinfo)

        // const history= useHistory()
        // var token= "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjM2MTMwMjcwLCJqdGkiOiI2YTQ3MjNkMWFhOWE0ZDYyYmYyMWRhY2M2MDVhZmVhZCIsInVzZXJfaWQiOjF9.czeUDWjOGp3WIDMpVslBf6L-9L-RXjxkjkjQ_jfdQ44"
        // console.log(formField)

        // const config = {
        //     headers: { Authorization: `Bearer ${token}` }
        // };

        // axios.post('http://127.0.0.1:8000/api/sites/', {
        //     config ,
        //     data: formField
        // }).then((res)=>{
        //     console.log("Hello");
        //     console.log(res.data);
        // })

        fetchWithToken('http://127.0.0.1:8000/api/sites/', {
            method: "POST",
            headers: new Headers(),
            body: formField
        })
        .then((res) => {
            console.log("Hello");
            console.log(res.data);
        }).catch((err)=>{
            console.log(err)
        })
    }

    return (
        <div >
            <Card bg="light" style={{ width: '80%', marginLeft: '8rem', marginTop: "2rem", marginBottom: "4rem" }}>
                <Card.Header ><h5>Form for Site</h5></Card.Header>
                <Card.Body>
                    <Form>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>Serial Number</Form.Label>
                                    <Form.Control id="3" placeholder="Serial Number" type="text" style={{ width: "70%" }} value={serialnum} onChange={(e) => setserialnum(e.target.value)} />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>Title</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Title"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={title}
                                        onChange={(e) => setTitle(e.target.value)} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>file_name</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="File Name"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={fname}
                                        onChange={(e) => setFname(e.target.value)} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Form.Group controlId="formFile">
                                    <Form.Label>preview</Form.Label>
                                    <FormControl
                                        type="file"
                                        style={{ width: "80%" }}
                                        src={preview}
                                        onChange={(e) => setPrev(e.target.files[0])}
                                    />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>file_type</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="File Type"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={ftype}
                                        onChange={(e) => setFtype(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>original_scan</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Original?"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={originalscan}
                                        onChange={(e) => setOscan(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <FloatingLabel controlId="floatingSelectGrid"
                                    label="Select Time Period"
                                    style={{ width: "70%" }}
                                    value={tperiod}
                                    onChange={(e) => setTperiod(e.target.value)}>
                                    <Form.Select aria-label="Floating label select example">
                                        <option value="FL">Flakkaserne and before</option>
                                        <option value="2">Grohn Barracks I</option>
                                        <option value="3">DP Camp Grohn</option>
                                        <option value="4">Grohn Barracks II</option>
                                        <option value="5">Roland-Kaserne</option>
                                        <option value="6">IUB-JU</option>
                                    </Form.Select>
                                </FloatingLabel>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>origin_date</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Origin Data"
                                        type="Date"
                                        style={{ width: "70%" }}
                                        value={odate}
                                        onChange={(e) => setOdate(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>author</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="Author"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={author}
                                        onChange={(e) => setAuthor(e.target.value)} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Form.Group>
                                    <Form.Label>size</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Size"
                                        type="Number"
                                        style={{ width: "70%" }}
                                        value={size}
                                        onChange={(e) => setSize(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>source</Form.Label>
                                    <FormControl id="2"
                                        placeholder="source"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={source}
                                        onChange={(e) => setSource(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>additional_info</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="additional_info"
                                        type="text"
                                        style={{ width: "100%" }}
                                        value={addinfo}
                                        onChange={(e) => setAddinfo(e.target.value)} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <FloatingLabel label="Description" id="desc">
                                    <Form.Control id="3"
                                        as="textarea"
                                        placeholder="abc"
                                        style={{ width: "100%", height: '100px' }}
                                        value={desc}
                                        onChange={(e) => setDesc(e.target.value)}
                                    />
                                </FloatingLabel>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>signature</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="Signature"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={sig}
                                        onChange={(e) => setSig(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>copyright_status</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Copyrihgt_status"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={cstatus}
                                        onChange={(e) => setCstatus(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>current_location</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="Current Location"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={cloc}
                                        onChange={(e) => setCloc(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Form.Group>
                                    <Form.Label>found_by</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Found By"
                                        type="text"
                                        style={{ width: "70%" }}
                                        value={fby}
                                        onChange={(e) => setFby(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>found_date</Form.Label>
                                    <Form.Control id="3"
                                        placeholder="Found Date"
                                        type="Date"
                                        style={{ width: "70%" }}
                                        value={fdate}
                                        onChange={(e) => setFdate(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>production_date</Form.Label>
                                    <FormControl id="2"
                                        placeholder="Production Date"
                                        type="Date"
                                        style={{ width: "70%" }}
                                        value={pdate}
                                        onChange={(e) => setPdate(e.target.value)}
                                    />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Button variant="primary" type="submit" style={{ width: "40%" }} onClick={AddSite}>Submit Data</Button>
                            </Col>
                        </Row>
                    </Form>
                </Card.Body>
            </Card>
        </div>
    )
}


export default Form2;