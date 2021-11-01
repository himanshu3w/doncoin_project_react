import FrontEnd from './FrontEnd';
import Login from './Login';
// import Register from './Register_under_construction';

import { Switch, Route } from "react-router-dom";


const App = () => {

        return ( 
        <>
    <Switch >
      < Route exact path = "/" component = { FrontEnd }/> 
      <Route exact path = "/login" component = { Login } />

      {/* < Route exact path = "/register" component = {Register}/> */}  
            
            
    </Switch>
        </>
            )

        }

        export default App;