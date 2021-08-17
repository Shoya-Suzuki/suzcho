<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Photo extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'profile_id'=>'required|integer',
      'pic' => 'file|image|mimes:jpeg,png,jpg|max:2048',       
    );

}
