<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function add(){
        $url=url('store-employee');
        $validate=Str::contains($url,'update');
        $title='Add Employee';
        $data=compact('title','url','validate');
        return view('add_employee')->with($data);
    }
}
