<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/') }}/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('/') }}/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/') }}/AdminLTE/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn t work if you view the page via file: -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

      
      {!! Form::open(['method'=>'post','route'=>'register.store']) !!}
      
      <div class="form-group has-feedback">
          {!! Form::email('email', old('email'), ['class'=>'form-control','required','placeholder'=>'Email','style'=>$errors->has('email') ? 'border-color:red' : '']) !!}
          @if($errors->has('email'))
              <span style="color: red">{{ $errors->first('email') }}</span>
          @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          {!! Form::password('password', ['class'=>'form-control','required','placeholder'=>'Password','style'=>$errors->has('password') ? 'border-color:red' : '']) !!}
          @if($errors->has('password'))
              <span style="color: red">{{ $errors->first('password') }}</span>
          @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          {!! Form::password('password_confirmation', ['class'=>'form-control','required','placeholder'=>'Retype password']) !!}
          {{--  @if($errors->has('retypepassword'))
              <span style="color: red">{{ $errors->first('retypepassword') }}</span>
          @endif  --}}
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
              <a href="{{ route('login.index') }}" class="text-center">Sign In</a>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            {!! Form::submit('Reset', ['class'=>'btn btn-primary btn-block btn-flat']) !!}
        </div>
        <!-- /.col -->
      </div>
      {!! Form::close() !!}


  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{ url('/') }}/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/') }}/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ url('/') }}/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
