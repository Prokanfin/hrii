<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    
    public function scopeCheckUser($query,$username,$password){
        
        $result = $query->where('em_number',$username)
    			->where('em_password',$password)->first();
        if($result==NULL){
            $result='ไม่ผ่าน';
            return $result;
        }else{
            return $result;
        }   
    }
    /*public function scoopSel_file($query,$id){
        
        $result = $query->where($id)->addSelect('em_file')->first();
        
        return $result;
    }*/
    
}
