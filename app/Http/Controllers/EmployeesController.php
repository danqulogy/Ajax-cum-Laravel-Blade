<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function getEmployeeProfileView(){
        return view('employee_profile');
    }


  public function findEmployee(Request $request){

      $employee = Employee::find($request['id']);
      if(empty($employee)){
          return response()->json(['error' => 'There is no employee with ID of ' + $request['id']]);
      }
      return response()->json([$employee]);
  }
}
