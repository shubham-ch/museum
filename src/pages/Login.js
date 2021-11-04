import React, { useState } from 'react';
import { useHistory, useLocation } from 'react-router-dom';
import './login.css';
import { Form, Button, Col, Row, Card } from 'react-bootstrap';
import Cookies from "universal-cookie";
const cookies = new Cookies();

const Login = () => {
    const [email, setEmail] = useState("");//React Hooks
    const [password, setPassword] = useState("");

    const history = useHistory();

    function validateForm() {
        console.log(email)
        console.log(password)
        if (email === "arnav@gmail.com" && password === "123") {
            localStorage.setItem("isAuthenticated", "true");
            history.push('dashboard')
        }
        else {
            alert("Wrong password or email")
        }
    }

    function handleSubmit(event) {
        event.preventDefault();
    }

    return (
        <div className="container1">
            <Card bg="light">
                <Card.Body>
                    <Form onSubmit={handleSubmit}>
                        <Col>
                            <Form.Group size="mb-3" controlId="email">
                                <Form.Label><h5>Email</h5></Form.Label>
                                <Form.Control
                                    autoFocus
                                    type="email"
                                    value={email}
                                    onChange={(e) => setEmail(e.target.value)}
                                />
                            </Form.Group> <br />
                            <Form.Group size="mb-3" controlId="password">
                                <Form.Label><h5>Password</h5></Form.Label>
                                <Form.Control
                                    type="password"
                                    value={password}
                                    onChange={(e) => setPassword(e.target.value)}
                                />
                            </Form.Group>
                            <br />
                            <Button block size="lg" type="submit" onClick={validateForm}>
                                Login
                            </Button>
                        </Col>
                    </Form>
                </Card.Body>
            </Card>
        </div>
    )
}

export default Login