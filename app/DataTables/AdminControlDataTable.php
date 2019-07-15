<?php

namespace App\DataTables;

use App\Admin;
use Yajra\DataTables\Services\DataTable;

class AdminControlDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('edit', function ($query) {
                return '<a href="control/'.$query->id.'/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>';
            })
            ->addColumn('show', function ($query) {
                return '<a href="control/'.$query->id.'" class="btn btn-primary"><i class="fa fa-eye"></i> Show</a>';
            })
            ->addColumn('delete', 'admin.Admincontrol.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
                'show',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Admin::query();
    }

    public static function lang()
    {
        $langjson = [
            "processing"        =>      "Processing...",
            "lengthMenu"        =>      "Show _MENU_ entries",
            "zeroRecords"       =>      "No matching records found",
            "emptyTable"        =>      "No data available in table",
            "info"              =>      "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty"         =>      "Showing 0 to 0 of 0 entries",
            "infoFiltered"      =>      "(filtered from _MAX_ total entries)",
            "infoPostFix"       =>      "",
            "search"            =>      "Apply filter _INPUT_ to table",
            "url"               =>      "",
            "thousands"         =>      ",",
            "loadingRecords"    =>      "Please wait - loading...",
            "decimal"           =>      "-",
            "paginate"          => [
                "first"     =>      "First page",
                "last"      =>      "Last page",
                "next"      =>      "Next page",
                "previous"  =>      "Previous page"
            ],
            "aria" => [
                "sortAscending"     =>  ": activate to sort column ascending",
                "sortDescending"    =>  ": activate to sort column descending"
            ]
        ];
        return $langjson;
    }
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    // ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom'          => 'Blfrtip',
                        'lengthMenu' => [
                            [ 10, 25, 50, -1 ],
                            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                        ],
                        'order'   => [[0, 'desc']],
                        'buttons'      => [
                            // ['extend' => 'export','className' => 'btn btn-default','text' => '<i class="fas fa-file-export" style="margin-right:5px;margin-left:5px"></i>export'],
                            ['extend' => 'print','className' => 'btn btn-primary','text' => '<i class="fa fa-print" style="margin-right:5px;margin-left:5px"></i>Print'],
                            ['extend' => 'excel','className' => 'btn btn-default','text' => '<i class="fa fa-file-excel-o" style="margin-right:5px;margin-left:5px"></i>Excel'],
                            ['extend' => 'csv','className' => 'btn btn-default','text' => '<i class="fas fa-file-csv" style="margin-right:5px;margin-left:5px"></i>CSV'],
                            ['extend' => 'pdf','className' => 'btn btn-default','text' => '<i class="fa fa-file-pdf-o" style="margin-right:5px;margin-left:5px"></i>Pdf'],
                            ['extend' => 'reload','className' => 'btn btn-info','text' => '<i class="fa fa-refresh" style="margin-right:5px;margin-left:5px"></i>Reload'],
                            // ['extend' => 'reset','className' => 'btn btn-primary','text' => '<i class="fa fa-undo" style="margin-right:5px;margin-left:5px"></i>reset'],
                        ],
                        'initComplete' => "function () {
                            this.api().columns([0,1,2,3,4]).every(function () {
                                var column = this;
                                var input = document.createElement(\"input\");
                                $(input).appendTo($(column.footer()).empty())
                                .on('keyup', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }",
                        // 'scrollX' => true,
                        'language' => self::lang(),
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['name' => 'id','data' => 'id','title' => 'Id','orderable' => true ,'searchable' => true],
            ['name' => 'username','data' => 'username','title' => 'Username','orderable' => true ,'searchable' => true],
            ['name' => 'email','data' => 'email','title' => 'Email','orderable' => true ,'searchable' => true],
            ['name' => 'created_at','data' => 'created_at','title' => 'Created_at','orderable' => true ,'searchable' => true],
            ['name' => 'updated_at','data' => 'updated_at','title' => 'Updated_at','orderable' => true ,'searchable' => true],
            ['name' => 'edit','data' => 'edit','title' => 'Edit','orderable' => false ,'searchable' => false, 'printable' => false, 'exportable' => false],
            ['name' => 'show','data' => 'show','title' => 'Show','orderable' => false ,'searchable' => false, 'printable' => false, 'exportable' => false],
            ['name' => 'delete','data' => 'delete','title' => 'Delete','orderable' => false ,'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'AdminControl_' . date('YmdHis');
    }
}
