<?php

namespace App\DataTables;

use App\Permission;
use Yajra\DataTables\Services\DataTable;

class PermissionsDataTable extends DataTable
{

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     *
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)->addColumn('action', function ($query) {
            $updateRoute = route('permissions.permission.edit', $query->id);
            $deleteRoute = route('permissions.permission.destroy', $query->id);

            $csrf = csrf_field();
            $method = method_field('DELETE');

            return "
                <a href='$updateRoute' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i> Edit</a>
                <a href=\"#\" onclick=\"event.preventDefault(); document.getElementById('delete-form-$query->id').submit();\" class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-trash\"></i> Delete</a>
                
                 <form action=\"$deleteRoute\" method=\"POST\" id=\"delete-form-$query->id\" style=\"display: none;\">
                    $csrf
                    $method
                    
                    <input type=\"hidden\" value=\"$query->id\" name=\"id\">
                </form>
            ";
        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Permission $model
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Permission $model)
    {
        return $model->newQuery()->select('id', 'name', 'guard_name', 'created_at', 'updated_at');
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Permissions_' . date('YmdHis');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()->columns($this->getColumns())->minifiedAjax()->addAction(['width' => '80px'])->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'name',
            'guard_name',
            'created_at',
            'updated_at',
        ];
    }
}
