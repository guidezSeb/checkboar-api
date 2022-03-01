import '../styles/App.css';
import Navbar from '../components/Navbar.js';
import React from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import {Switch} from 'react-native';

function App() {
  return (
    <div className="App">
      <Router>
        <Navbar/>
        <Switch>
          <Route path='/' exact/>
        </Switch>
        </Router>
    </div>
  );
}


export default App;
