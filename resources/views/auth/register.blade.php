@extends('layouts.app')

@section('title', 'Register')
@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary">Sign Up</h2>
                </div>
                <div class="card-body">
                    <form action="#" id="register_form" method="POST">
                        @csrf
                        <div class="mb-4 form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" autofocus value="{{ old('name') }}">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-autocomplete="false" value="{{ old('username') }}">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <input type="checkbox" name="" id="showpwd" onclick="myFunction()">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-4 form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>

                        <div class="mb-4 form-group">
                            <button style="width: 100%; background:#4C4177;border:none;outline:none" type="submit" class="btn btn-primary" id="register_btn"> Sign Up</button>

                        </div>
                    </form>
                    <div class="form-group">
                        <span class="text-secondary">A member ? </span>
                        <a href="{{ route('login') }}" class="link">Sign In</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>







@endsection

@section('scripts')
<script>
    function myFunction() {
        const pwd = document.querySelector("#password")
        const checker = document.querySelector("#showpwd");
        if (checker.checked === true) {
            pwd.type = "text";
        } else {
            pwd.type = "password"
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#register_form").submit(function(e) {
            e.preventDefault();

            $("#register_btn").prop('disabled', true);
            $("#register_btn").html(' <i class="fa fa-spinner fa-spin fa-1x"></i> Loading ...');

            $.ajax({
                url: "{{ route('register.user') }}",
                method: "post",
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res) {
                    console.log(res)
                }
            });
        });
    });

</script>
@endsection
