<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Str;

class BackendController extends Controller
{
    public function dashboard(){
        $employees=Employee::all();
        $data=compact('employees');
        return view('employee_dashboard')->with($data);
    }

    public function store(Request $request){
        Employee::create($request->all());
        return redirect('employee-dashboard')->with('add','Employee Added');
    }

    public function delete($id){
        $employees=Employee::find($id);
        $employees->delete();
        return redirect('employee-dashboard')->with('delete','Employee Deleted');
    }
    public function edit($id){
        $employees=Employee::find($id);
        $url=url('/employee/update') . "/" .$id;
        $validate=Str::contains($url,'update');
        $title='Update Employee';
        $data=compact('title','url','validate','employees');
        return view('add_employee')->with($data);
    }
    public function update($id ,Request $request){
        Employee::find($id)->update($request->all());
        return redirect('employee-dashboard')->with('update','Employee Updated');
    }
    public function deleteAll(){
        Employee::truncate();
        return redirect('employee-dashboard')->with('deleteAll','All Employees Deleted , No Record Found');
    }

}
