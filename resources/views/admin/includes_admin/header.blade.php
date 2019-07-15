<!DOCTYPE html>
<html dir=@if(app()->getLocale() == 'ar') 'rtl' @endif >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Amazing Color | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  @if (app()->getLocale() == 'en')
  <link rel="stylesheet" href="{{url('/')}}/adminlte/dist/css/AdminLTE.min.css">
  @elseif (app()->getLocale() == 'ar')
  <link rel="stylesheet" href="{{url('/')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('/')}}/css/bootstrap-rtl.min.css">
  {{--  <link rel="stylesheet" href="{{url('/')}}/css/rtl.css">  --}}
  @endif
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  {{--  <link rel="stylesheet" href="{{url('/')}}/adminlte/bower_components/datatables.net-bs/css/buttons.dataTables.min.css">  --}}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn t work if you view the page via file: -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
      button.dt-button, div.dt-button, a.dt-button{
        margin-right: 5px;
        margin-bottom: 15px;
      }
      #dataTableBuilder_length{
        float: left;
      }
      div.dataTables_wrapper div.dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 250px;
        transform: translate(-5%,0%);
        text-align: center;
        padding: 1em 0;
        background: #00c0ef;
        z-index: 1;
        font-size: 17px;
        color: white;
        /* margin-left: -10%; */
        /* margin-top: 0; */
      }
      .navbar-custom-menu>.navbar-nav>li>.lang{
        width: 50px;
        text-align: center;
      }
      .dropdown-menu>li>a{
        padding: 10px 20px;
      }
      /*.dataTables_scroll{
        width:100%
      }
      .dataTables_scrollHeadInner,.dataTables_scrollFootInner,.dataTables_scrollFootInner .table-bordered,.dataTables_scrollHeadInner .table-bordered {
        width:100% !important
      }*/
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
