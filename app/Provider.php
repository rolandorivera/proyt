<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
  protected $fillable=[
    'name','business','address','phone','email','numrent','dui','nit','photo','pdf'
  ];

  public function bill(){
      return $this->belongsTo(Bill::class);
  }
}
