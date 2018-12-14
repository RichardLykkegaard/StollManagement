@include('includes.header')
@include('includes.navbar')

<?php
    //checks if user have typed in and submitted login information:
    if (isset($_GET['username'])&&isset($_GET['password'])){
        //Login information is submitted -> Set local variables
        $username = $_GET['username'];
        $password = $_GET['password'];
        //Checks if variables are empty
        if(!empty($username)&&!empty($password))
        {
            //variables arent empty -> Check if user fit database
            //if(){
                //Login information was correct -> sets cookie for an hour
                setcookie('loginCookie',$username,time()+3600);
                //User is now logged in and sends him to index page
                header('Location: http://127.0.0.1:8000/welcome/');
                exit;
            //}
            //else
            //{
                //login information was incorrect -> tells user
            //  echo 'Username and password are incorrect or does not exist'    
            //}
        }
        else
        {
            //variables are empty -> inform user
            echo 'Please type in your username and password and try again.';
        }
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">SS Company</h1>
                    <hr />
                </div>
            </div>

            <form class="form-horizontal" method="get" action="login">
                <!-- Username input field -->
                <label for="username" class="cols-sm-2 control-label">Username:</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
                    </div>
                </div>
                <!-- password input field -->
                <label for="password" class="cols-sm-2 control-label">Password:</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                    </div>
                </div>
                <!-- Login button -->
                <button class="btn btn-primary btn-lg btn-block login-button" type="submit">Login</button>
            </form>
            <!-- OLD login bttn 
                <button type="button" class="btn btn-primary btn-lg btn-block login-button">Login</button>
-->
        </div>
    </div>
    @include('includes.footer')
