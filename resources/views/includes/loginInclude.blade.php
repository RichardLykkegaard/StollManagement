<br>
<br>
<!-- SS COMPANY logo -->
<div class="container">
    <div class="card align-items-center">
        <div class="card-body-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h1 class="title">SS Company</h1>
                            <hr />
                        </div>
                    </div>
                    <!-- Login -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <form class="form-horizontal" method="get" action="login">
                                <!-- Username input field -->
                                <label for="username" class="cols-sm-2 control-label">Username:</label>
                                <div class="cols-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                        <!--NYT-->
                                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            placeholder="Enter your Username" name="email" value="{{ old('email') }}"
                                            required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- password input field -->
                                <label for="password" class="cols-sm-2 control-label">Password:</label>
                                <div class="cols-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <!--NYT-->
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            placeholder="Enter your Password" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Remember me -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <!-- Login button -->
                                <button type="submit" class="btn btn-success btn-lg btn-block login-button">
                                    {{ __('Login') }}
                                </button>
                                <!-- Forgot password? -->
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
