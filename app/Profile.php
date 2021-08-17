<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopeProfile;

class Profile extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'name'=>'required',
      'age'=>'integer|min:0|max:150',
      'star'=>'integer|min:0|max:5',
      'profile'=>'required',
      'mainphoto'=>'file|image|mimes:jpeg,png,jpg|max:2048', 
      //'mainphoto'=>'nullable',
    );
    //'pic' => 'file|image|mimes:jpeg,png,jpg|max:2048', 
      public function getData()
      {
        return $this->name . '(' . $this->age . ')';
      }
}
