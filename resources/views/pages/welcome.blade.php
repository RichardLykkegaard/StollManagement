@include('includes.header')
@include('includes.navbar')
<?php
sleep(2);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">You are now logged in</h1>
                    <hr />
                </div>
            </div>

            <form class="form-horizontal" method="get" action="/">
                <!-- Login button -->
                <button class="btn btn-primary btn-lg btn-block login-button" type="submit">Continue</button>
            </form>
        </div>
    </div>
    @include('includes.footer')
