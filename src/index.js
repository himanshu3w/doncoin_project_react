import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './components/App';
import {BrowserRouter} from "react-router-dom";

// Importing Bootstrap For CSS
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
// ImportingBootstrap For JavaScript
import '../node_modules/bootstrap/dist/js/bootstrap.bundle';


ReactDOM.render(
  <BrowserRouter>
  <App />
  </BrowserRouter>,
  document.getElementById('root')
);



