<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title' , 'content' , 'thumb'
    ];

  public function user(){

    return $this->belongsTo('App\user');

  }
}
