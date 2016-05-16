<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
    
        return view('welcome');
      // return view('data/employee_list');
    }
    
    public function profile(Request $request){
        
        if($request->input('em_id')){
            $var_em_id = $request->input('em_id');
            
        }else{
            $var_em_id = $request->session()->get('em_id');
            
        }
        
        //$var_em_id = $request->session()->get('em_id');
        //return $var_em_id;
        
        $result = Employee::Sel_em_id($var_em_id);
        unset($result['em_password']);
        
        return view('data/employee_detail')->with('result',$result);
    }
    
    
    public function detail(){
        
       // return view('data/employee_detail');
    }
    
}
