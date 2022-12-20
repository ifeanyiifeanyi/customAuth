@extends('layouts.app')

@section('title', 'Forgot Password')
@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary">Forgot Password</h2>
                </div>
                <div class="card-body">
                    <form action="#" id="forgot_form" method="POST">
                        @csrf
                        <div class="mb-3 text-secondary">
                            <p style="color: #7F53AC">Password reset link will be sent to your email address</p>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            <span class="invalid-feedback"></span>
                        </div>


                        <div class="mb-4 form-group">
                            <button style="width: 100%; background:#4C4177;border:none" type="submit" class="btn btn-primary" id="forgot_btn">Reset Password</button>

                        </div>
                    </form>
                    <div class="form-group">
                        <a href="{{ route('login') }}" class="link text-decoration-none"">Back</a>
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
