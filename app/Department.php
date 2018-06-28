<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $fillable=[
    'name','description','boss'
  ];

  public function employee(){
      return $this->belongsTo(Employee::class);
  }


}
