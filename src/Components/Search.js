import axios from 'axios'
import React, { useState } from 'react'
import { Form, Button, Card, Row, Col, Tabs, Tab, Nav } from 'react-bootstrap';
import { fetchWithToken } from '../Config/config';
import { app_dict } from '../Config/config';
import Display from './Display';
import { useHistory } from "react-router-dom";

const Search = () => {

    const history = useHistory();
    const navigateToDash = () => history.push('/dashboard');

    const [filename, setfilename] = useState("");
    const [senumber, setsenum] = useState("");
    const [odate, setOdate] = useState("");
    const [key, setKey] = useState('home');
    let formField = new FormData()
    formField.append('serial_number', senumber)

    function validatefilename() {
        console.log(filename)
        // fetchWithToken('http://127.0.0.1:8000/api/sites/', {
        //     method: "GET",
        //     headers: new Headers(),
        //     body: formField
        // })
        //     .then((res) => {
        //         console.log("Hello");
        //         console.log(res.data);
        //     })
        axios.get('https://api.github.com/users/mapbox')
            .then(response => {
                console.log(response.data.created_at);
            });

        // if ( )//response is greater 200 and greater than 1 then render table where filename is ....
        // else{
        //     console.log("No matched entry")
        // }
    }

    function handleSubmit(event) {
        event.preventDefault();
    }

    return (
        <div style={{ width: '80%', marginLeft: '8rem', marginTop: "2rem", marginBottom: "4rem" }}>
         <Button variant="primary" type="submit" onClick={navigateToDash} style={{  marginLeft: '90%' , marginBottom: "1rem", }}>
                                    Back
                                </Button>
            <Tabs justify variant="tabs" id="controlled-tab-example"
                activeKey={key}
                onSelect={(k) => setKey(k)}
                className="mb-3">
                <Tab eventKey="home" title="Search">
                    <Card bg="light" style={{ width: '95%', marginLeft: '2rem', marginTop: "2rem", marginBottom: "4rem" }}>
                            <Form onSubmit={handleSubmit}>
                        <Row>
                                <Col  style={{ marginLeft: '1rem', marginTop:'1rem'}}>
                                    <Form.Group className="mb-3" controlId="formBasicEmail" >
                                        <Form.Label>File name</Form.Label>
                                        <Form.Control type="text" placeholder="Enter name" value={filename} onChange={(e) => setfilename(e.target.value)} />
                                    </Form.Group>
                                </Col>
                                <Col style={{ marginLeft: '1rem', marginTop:'1rem'}}>
                                    <Form.Group className="mb-3" controlId="formBasicEmail">
                                        <Form.Label>Origin Date</Form.Label>
                                        <Form.Control type="Date" placeholder="Enter name" value={odate} onChange={(e) => setOdate(e.target.value)} />
                                    </Form.Group>
                                </Col>
                                <Col style={{ marginLeft: '1rem', marginTop:'1rem', marginRight: '1rem'}}>
                                    <Form.Group className="mb-3" controlId="formBasicEmail">
                                        <Form.Label>Serial Number</Form.Label>
                                        <Form.Control type="number" placeholder="Enter serial number" value={senumber} onChange={(e) => setsenum(e.target.value)} />
                                    </Form.Group>
                                </Col>
                                </Row>
                                <Row>
                                <Button variant="primary" type="submit" onClick={Display} style={{ width: '20%', marginLeft: '40%', marginTop: "2rem", marginBottom: "2rem" , alignItems: "center" }}>
                                    Search
                                </Button>
                                </Row>
                            </Form>
                    </Card>
                </Tab>

            </Tabs>
        </div>
    );

};
export default Search