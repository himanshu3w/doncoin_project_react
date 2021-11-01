import Header from './Header';
import MidSection from './MidSection';
import Footer from './Footer';
import Login from './Login';
import Register from './Register';

import {Switch,Route}  from "react-router-dom";


const App = () => {

return (
  <>


  <Header />
  <MidSection />
  <Footer />



  <Switch>
    <Route path="/login" component={Login} />
    <Route path="/register" component={Register} />
  </Switch>

  </>
)

}

export default App;