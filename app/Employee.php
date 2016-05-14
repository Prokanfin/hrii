<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    
    public function scopeCheckUser($query,$username,$password){
        
        
    }
    
}
