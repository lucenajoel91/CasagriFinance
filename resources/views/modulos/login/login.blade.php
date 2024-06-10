@extends('plantilla')
@section('contenido')

    <div class="login-box" >
        <div class="login-logo" data-aos="fade-down">
        <span class="logo-lg"><img src="http://localhost/CasagriFinance/public/dist/img/Logos/logo.png" alt="" width="200" height="auto"><!--<b>Training Center</b>--> </span> 
            <!-- <b>MoneyPlayer</b> -->
        </div>
        <div class="login-box-body" data-aos="fade-up">
            <p class="login-box-msg">Ingresar</p>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span toggle="#password-field" class="glyphicon glyphicon-eye-open form-control-feedback toggle-password">

                    </span>
                </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                            <!-- <a class="nav-link" href="{{ route('register') }}">Registrarme</a> -->
                        </div>
                    </div>
                    
                    <!-- /.col -->
                </div>
                
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("glyphicon-eye-open glyphicon-eye-close");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

@endsection