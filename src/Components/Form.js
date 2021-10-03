
import { render } from '@testing-library/react';
import React from 'react'
import { Form, Row, Col, InputGroup, FormControl, Button, Card, CardHeader, CardTitle, CardBody, ProgressBar, FloatingLabel } from 'react-bootstrap';
import axios from 'axios'

const handleSubmit = (e) => {
    // e.preventDefault();

    // axios
    //     .post("http://localhost:8000/", {
    //         name: this.state.user,
    //         detail: this.state.quote,
    //     })
    //     .then((res) => {
    //         this.setState({
    //             user: "",
    //             quote: "",
    //         });
    //     })
    //     .catch((err) => {});
}


const Form2 = () => {

    return (
        <div >
            <Card bg="light" style={{ width: '80%', marginLeft: '8rem', marginTop: "2rem", marginBottom: "4rem" }}>
                <Card.Header ><h5>Form for Site</h5></Card.Header>
                <Card.Body>

                    <Form onSubmit={handleSubmit}>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>Serial Number</Form.Label>
                                    <Form.Control id="3" placeholder="Serial Number" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>Title</Form.Label>
                                    <FormControl id="2" placeholder="Title" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>file_name</Form.Label>
                                    <Form.Control id="3" placeholder="File Name" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Form.Group>
                                    <Form.Label>preview</Form.Label>
                                    <FormControl id="2" placeholder="Preview" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>file_type</Form.Label>
                                    <Form.Control id="3" placeholder="File Type" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>original_scan</Form.Label>
                                    <FormControl id="2" placeholder="Original?" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>

                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <FloatingLabel controlId="floatingSelectGrid" label="Select Time Period"  style={{ width: "70%" }}>
                                    <Form.Select aria-label="Floating label select example">
                                        {/* <option>Open this select menu</option> */}
                                        <option value="1">Flakkaserne and before</option>
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
                                    <FormControl id="2" placeholder="Origin Data" type="Date" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>author</Form.Label>
                                    <Form.Control id="3" placeholder="Author" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Form.Group>
                                    <Form.Label>size</Form.Label>
                                    <FormControl id="2" placeholder="Size" type="Number" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>source</Form.Label>
                                    <FormControl id="2" placeholder="source" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>additional_info</Form.Label>
                                    <Form.Control id="3" placeholder="additional_info" type="text" style={{ width: "100%" }} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <FloatingLabel label="Description" id="desc">
                                    <Form.Control id="3" as="textarea" placeholder="abc" style={{ width: "100%", height: '100px' }} />
                                </FloatingLabel>
                            </Col>

                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>signature</Form.Label>
                                    <Form.Control id="3" placeholder="Signature" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>copyright_status</Form.Label>
                                    <FormControl id="2" placeholder="Copyrihgt_status" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>current_location</Form.Label>
                                    <Form.Control id="3" placeholder="Current Location" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                            <Col>
                                <Form.Group>
                                    <Form.Label>found_by</Form.Label>
                                    <FormControl id="2" placeholder="Found By" type="text" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col className="my-1">
                                <Form.Group>
                                    <Form.Label>found_date</Form.Label>
                                    <Form.Control id="3" placeholder="Found Date" type="Date" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                            <Col>
                                <Form.Group>
                                    <Form.Label>production_date</Form.Label>
                                    <FormControl id="2" placeholder="Production Date" type="Date" style={{ width: "70%" }} />
                                </Form.Group>
                            </Col>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>
                        </Row>
                        <Row className="align-items-center" style={{ marginLeft: '2rem', marginTop: "2rem", marginRight: '2rem' }}>

                            <Col>
                                <Button variant="primary" type="submit" style={{ width: "40%" }}>Submit Data</Button>
                            </Col>
                        </Row>
                    </Form>
                </Card.Body>
            </Card>
        </div>
    )
}


export default Form2;