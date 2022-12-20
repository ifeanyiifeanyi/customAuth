@extends('layouts.app')

@section('title', 'Reset Password')
@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary">Reset Password</h2>
                </div>
                <div class="card-body">
                    <form action="#" id="reset_form" method="POST">
                        @csrf

                        <div class="mb-4 form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="password" name="npassword" id="password" class="form-control" placeholder="New Password">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="password" name="cnpassword" id="password_confirmation" class="form-control" placeholder="Confirm New Password">
                        </div>

                        <div class="mb-4 form-group">
                            <button style="width: 100%; background:#4C4177;border:none" type="submit" class="btn btn-primary" id="reset_btn">Update Password</button>

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
