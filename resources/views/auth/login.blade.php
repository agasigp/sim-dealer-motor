<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIM Dealer Motor | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ url('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{ url('plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .login-body  {
                background-image: url("{{ asset('dist/img/tunasjaya.jpg') }}");
                background-size: 20%;
            }
        </style>
    </head>
    <body class="login-body">
        <div class="login-box">
            <div class="login-logo">
                <b style="color: blue">SISTEM INFORMASI DEALER</b><br>
                <b style="color: blue">TUNAS JAYA MOTOR</b>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan Login Untuk Mengakses Sistem</p>
                <form action="{{ url('/auth/login') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="password" type="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{ url('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{ url('plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
        </script>
    </body>
</html>
