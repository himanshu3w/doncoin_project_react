

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

 

    <div class="container d-flex align-items-center justify-content-center" style="height:100vh;">

        <div class="card py-4 px-4  " style="width: 18rem;">
            <img src="images/tp_logo.png" class="card-img-top my-2 py-2 " alt="..." style="height:150px;width:180px;align-self: center;">

            <!-- ALERT MSG KHATAM KIYA GAYA -->

            <form action="#" method="post">

               

                <div class="input-group mb-3">
                    <span class="input-group-text " id="basic-addon1"> <i class="fas fa-user-circle"></i></span>
                    <input type="text" class="form-control" id="usersponsorid" value="" onkeyup="callsponsorchecker()" name="sponsorid" aria-describedby="sponsorHelp" placeholder="Sponsor ID" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text " id="basic-addon2"> <i class="fas fa-user-circle"></i></span>
                    <input type="text" class="form-control" id="usersponsorName" aria-describedby="emailHelp" placeholder="Sponsor Name" disabled>
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text " id="basic-addon3"> <i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="username"   pattern="[0-9a-zA-Z]*" title="Only Letter (a-z) or Numbers (0-9) allowed" onkeyup="callusernamechecker()" name="username" minlength="3" required aria-describedby="emailHelp" placeholder="User Name" maxlength="20" />
                </div>

                <h6 class="px-5" id="checkusername"> </h6>
                <div class="input-group mb-1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text " id="basic-addon4"> <i class="fas fa-mobile"></i></span>
                    <input type="text" class="form-control" id="userMobile" name="mobile" required aria-describedby="emailHelp" placeholder="Mobile" maxlength="10" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text " id="basic-addon5"> <i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="userEmail" name="email" required aria-describedby="emailHelp" placeholder="Email" maxlength="40"/>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text " id="basic-addon6"> <i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="exampleInputPassword1" required minlength="4" name="password" placeholder="Password" maxlength="50" />
                </div>




                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termsandconditions" />
                    <label class="form-check-label" for="exampleCheck1"><a href="#">Terms and Condition<a>
                    </label>
                </div>
                <div class="mb-3">
                </div>
                <button type="submit" class="btn btn-primary my-1" style="display:block;width:100%;">Register
                    Now</button>


            </form>
            <button id="bac2loginButton" class="btn btn-danger my-1" style="display:block;width:100%;">Back To
                Login</button>
    
        </div>



    </div>





