@include('admin/includes_admin.header')
@include('admin/includes_admin.navbar')
@include('admin/includes_admin.menu')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">

    @yield('content')

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin/includes_admin.footer')
@include('admin/includes_admin.endfooter')