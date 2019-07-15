@extends('admin.includes_admin.index')
@section('Control','active')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! $dataTable->table(['class' => 'table table-bordered table-hover','style' => 'width:100%'],true) !!}
                </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
