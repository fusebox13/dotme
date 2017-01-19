<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use Log;

class EmployeeController extends Controller
{
  public function index(Request $request) {
    $employees = Employee::paginate(10);



    if ($request->ajax())
    {
      $sortedEmployees = Employee::orderBy('name')->paginate(10)->toArray();
      //$sortedEmployees = array_values($sortedEmployees);
      //Log::info($employee);
      return response($sortedEmployees);
      //return response()->json(compact('employee'), 200);
    }
    return view('employee', compact('employees'));
  }
    //
}
