<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerchController extends Controller
{
    public function index(){
        $items = DB::select('select * from staffname where id = '.$_GET['id']);
        return view('Serch',['items' => $items]);
    }

}
