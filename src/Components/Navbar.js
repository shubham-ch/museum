
import React from 'react'
import { Navbar, Nav, Container} from 'react-bootstrap';


const Navbar1 = () => {
    return (
        <>
        <Navbar bg="light" expand="lg" >
            <Container>
                <Navbar.Brand href="">Portal to the World</Navbar.Brand>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className="me-auto">
                        <Nav.Link href="">Frontend</Nav.Link>
                    </Nav>
                </Navbar.Collapse>
            </Container>
        </Navbar>
        </>
    );
};
export default Navbar1