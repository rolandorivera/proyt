<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
  protected $fillable=[
    'name'
  ];

  public function bill(){
      return $this->belongsTo(Bill::class);
  }
}
