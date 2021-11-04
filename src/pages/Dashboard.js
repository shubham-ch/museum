
import React from 'react'
import { Row, Col,Button } from 'react-bootstrap';
import { useHistory } from "react-router-dom";

function Dashboard(){

    const history = useHistory();
    const navigateToSite = () => history.push('addnewsite');
    const navigateToSearch = ()=> history.push('search')
    const handleLogout=()=>{
        localStorage.clear()
        window.location.pathname='/';
    }

    return (
        <>
        <div className="container2">
        <h3>Welcome back Loda</h3><br/>
            <Row>
                <Col>
                    <Button variant="primary" size="lg" onClick={navigateToSite}>
                        Add New Site
                    </Button>
                </Col>
                <Col>
                <Button variant="secondary" size="lg" onClick={navigateToSearch}>
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
