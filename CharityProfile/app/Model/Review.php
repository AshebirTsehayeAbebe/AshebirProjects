<?php

namespace App\Model;
use App\Model\Products;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  public function product(){
  	return $this->belongsTo(Products::class);
  }
}
