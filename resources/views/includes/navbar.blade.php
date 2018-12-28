<?php

$loggedIn = false;
//Checks if cookies exists = user logged in:
    if(isset($_COOKIE['loginCookie'])){
        //cookie exists -> save cookie as string + set loggedin to true
        $name = $_COOKIE['loginCookie'];
        $loggedIn = true;
    }
?>

<nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="http://stollmanagement.test/">SS Company IVS</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <!-- if user aint loggin in -->
            @if($loggedIn == false)
            <a class="nav-link" href="http://stollmanagement.test/login">Login</a>
            @else
            <a class="nav-link" href="http://stollmanagement.test/report">{{$name}}</a>
            @endif
        </li>
    </ul>
</nav>
