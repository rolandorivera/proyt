<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

  protected $fillable=[
    'numberBill','tot','admission','status','pdf'
  ];

  public function provider(){
      return $this->belongsTo(Provider::class);
  }
  public function process(){
      return $this->belongsTo(Process::class);
  }

}
