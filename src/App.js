
import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Router, Switch } from 'react-router';
import Navbar from './Components/Navbar'
import Form from './Components/Form'
import Alert from './Components/Alert';
function App() {
  return (
    <div className="App">
      <>
      <Navbar/>
      <Form/>
      </>
    </div>
  );
}

export default App;
