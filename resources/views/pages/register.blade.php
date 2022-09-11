@extends('index')

@include('components.breadcrumb')

@section('content')
    <div class="login-register-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <h3 class="fw-700">
                                Register
                            </h3>
                        </div>
                        <div class="tab-content">
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input name="user-email" placeholder="Email" type="email">
                                            <input type="password" name="password" placeholder="Password">
                                            <input type="password" name="password_confirmation"
                                                placeholder="Repeat Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <a href="{{ route('login') }}">Already have an account? Login</a>
                                                </div>
                                                <button type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
