<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Yajra\DataTables\Facades\DataTables;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('datatables.index');
    }

    public function getRowDetails()
    {
        return view('datatables.details');
    }
}
