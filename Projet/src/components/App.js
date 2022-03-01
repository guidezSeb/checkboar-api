import '../styles/App.css';
import Navbar from './components/Navbar';
import React from 'react';
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';

function App() {
  return (
    <div className="App">
      <Router>
        <Navbar/>
        <Switch></Switch>
        </Router>
    </div>
  );
}


export default App;
