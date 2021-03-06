{{--  <script type="text/javascript" src="{{url('/')}}/js/app.js"></script>  --}}

<!-- jQuery 3 -->
<script src="{{url('/')}}/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- DataTables -->
<script src="{{url('/')}}/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/adminlte/bower_components/datatables.net/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/vendor/datatables/buttons.server-side.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{url('/')}}/adminlte/bower_components/raphael/raphael.min.js"></script>
<script src="{{url('/')}}/adminlte/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{url('/')}}/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{url('/')}}/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('/')}}/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/')}}/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('/')}}/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="{{url('/')}}/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url('/')}}/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('/')}}/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('/')}}/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('/')}}/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/')}}/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/')}}/adminlte/dist/js/demo.js"></script>
{{--  <script src="{{url('/')}}/adminlte/dist/js/vue.min.js"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
{{-- <script src="{{url('/')}}/adminlte/dist/js/vue.js"></script> --}}
{{--  <script>
    $(document).ready(function() {
        $('#dataTableBuilder').DataTable( {
            "scrollX": true
        });
    });
</script>  --}}
<script>
    $(document).ready(function(){
      $(".control-sidebar").css("display","none")
      $(".navbar-nav>li>a").click(function(){
        $(".control-sidebar").css("display","block")
      })
    })
  </script>
@stack('scripts')
</body>
</html>