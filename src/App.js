// import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
// import { Router, Switch } from 'react-router';
import Navbar from './Components/Navbar'
import Form from './Components/Form'
// import Alert from './Components/Alert';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Login from './pages/Login';
import Dashboard from './pages/Dashboard';
import ProtectedRoute from './Components/PrivateRoute';

function App() {
  return (
    <div className="App">
      <Router>
        <Navbar />
        <Switch>
        <Route exact path='/' exact component={Login} />
        <ProtectedRoute exact path='/addnewsite' exact component={Form} />
        <ProtectedRoute exact path='/dashboard' exact component={Dashboard} />
        </Switch>
      </Router>
    </div>
  );
}

export default App;
