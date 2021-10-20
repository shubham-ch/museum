
import React from 'react'
import { Row, Col,Button } from 'react-bootstrap';
import { useHistory } from "react-router-dom";

function Dashboard(){

    const history = useHistory();
    const navigateTo = () => history.push('addnewsite');

    const handleLogout=()=>{
        localStorage.clear()
        window.location.pathname='/';
    }

    return (
        <>
        <div className="container2">
        <h3>Welcome back Loda</h3> <br/>
            <Row>
                <Col>
                    <Button variant="primary" size="lg" onClick={navigateTo}>
                        Add New Site
                    </Button>
                </Col>
                <Col>
                <Button variant="secondary" size="lg" >
                        Search for a Site
                    </Button>
                </Col>
                <Col>
                <Button variant="secondary" size="lg" onClick={handleLogout}>
                        Logout
                    </Button>
                </Col>
            </Row>
        </div>
        </>
    );
};

export default Dashboard
