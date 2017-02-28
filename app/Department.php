<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'department';
    
    public function programs_offered() {
        return $this->hasMany('App\ProgramOffered');
    }
    
}