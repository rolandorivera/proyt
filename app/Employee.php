<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
      'name','lastName','dui','nit','salary','admission','afp','isss','status','photo','position'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }


}
