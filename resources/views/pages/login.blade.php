@include('includes.header')
@include('includes.navbar')

<?php

    if (isset($_POST['username'])&&isset($_POST['password'])){
    echo 'Testing: Log in';
    }
    else{
    echo 'Testing: Please enter correct username and password';
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

            <form class="form-horizontal" method="POST" action="#">
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
