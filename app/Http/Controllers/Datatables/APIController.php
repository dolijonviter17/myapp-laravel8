<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Yajra\DataTables\Facades\DataTables;

class APIController extends Controller
{
    public function getEmployeeData()
    {
        $employees = Employee::select(['id', 'name', 'email', 'phone', 'created_at', 'updated_at']);
        return DataTables::of($employees)
            
            ->editColumn('created_at', '{!! $created_at !!}')
            ->editColumn('updated_at', function($employees) {
                return $employees->updated_at->format('Y-m-d');
            })
            ->filterColumn('updated_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(updated_at,'%Y/%m/%d') like ?", ["%$keyword%"]);
            })
            ->addColumn('action', function($employees) {
                return '<a href="#edit-'.$employees->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
        
    }

    public function getRowDetailsData()
    {
        $employees = Employee::select(['id', 'name', 'email', 'phone', 'created_at', 'updated_at']);
        return DataTables::of($employees)->make(true);
    }
}
