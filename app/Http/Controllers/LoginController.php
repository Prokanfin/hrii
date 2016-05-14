<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
    public function index(Request $request){
        
        //$request->session()->put('em_id', '1');
        if($request->session()->has('em_id')){
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
          
    }
    
    public function authen(){
        return view('auth_v');
        
    }
    
    public function checkAuth(Request $request){
        
        
    }
    
    public function logout(){
        
         $data = session()->flush();
         
         return redirect('/');
    }
    
   
}
