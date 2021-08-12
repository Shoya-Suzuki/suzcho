<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function index(){
        return view('request.index');
        //$items = DB::select('select * from staffname where id = '.$_GET['id']);
        //return view('Serch',['items' => $items]);
    }
    public function confirm($name1){
              return view('request.'.$name1);
    }
}
