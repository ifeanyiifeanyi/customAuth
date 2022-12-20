@extends('layouts.app')

@section('title', 'Login')
@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary">Login</h2>
                </div>
                <div class="card-body">
                    <form action="#" id="login_form" method="POST">
                        @csrf
                        <div class="mb-4 form-group">
                            <input type="text" name="login" id="login" class="form-control" placeholder="Username or Email">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="mb-4 form-group">
                            <button style="width: 100%; background:#4C4177;border:none" type="submit" class="btn btn-primary">Sign In</button>

                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <a href="{{ route('forgot.password') }}" class="link text-decoration-none">Forgot password</a>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="text-secondary">Not a member ? </span>
                                <a href="{{ route('register') }}" class="link text-decoration-none">Sign Up</a>

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

@section('scripts')


@endsection
