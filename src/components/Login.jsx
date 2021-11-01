

const Login = () => {

    return (
      <>
      <h1>Login</h1>



      <div className="container d-flex align-items-center justify-content-center" style={ {height: '100vh'}}>

<div className="card py-4 px-4  " style={{width: "20rem"}}>
    <img src="./images/Doncoin_logo.png" className="card-img-top my-4 py-2" alt="..." style={{height: "150px" , width: "130px" , alignSelf: "center"}} />

 





   
    
    
    
    <form action="login.php" method="post">



        <div className="input-group mb-3">
            <span className="input-group-text " id="basic-addon1"> <i className="fas fa-user"></i></span>
            <input type="text" className="form-control" id="exampleInputEmail1" name="username" value="" aria-describedby="emailHelp" placeholder="User ID" />
        </div>





        <div className="input-group mb-3">
            <span className="input-group-text " id="basic-addon1"> <i className="fas fa-key"></i></span>
            <input type="password" className="form-control" id="exampleInputPassword1" name="password" value="" placeholder="Password" />
        </div>




        <div className=" d-flex mb-3 form-check">
            <div className="px-1">

                <input type="checkbox" className="form-check-input" id="exampleCheck1" name="rememberme" />
                <label className="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <div className="px-1">

                <a href="#" className="link-danger">Forgot Password</a>
            </div>
        </div>
        <div className="mb-3">
        </div>
        <button type="submit" className="btn btn-primary my-1" style={{display:"block",width: "100%"}}>Submit</button>


    </form>
    <button id="newregister" className="btn btn-success my-1" style={{display:"block",width: "100%"}}>New Registration</button>

   
</div>



</div>
      </>
    )
    
    }
    
    export default Login;