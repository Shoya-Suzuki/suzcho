<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index (Request $request)
    {
        $items = Board::with('person')->get();
        return view('board.index', ['items' => $items]);
    }

    public function add (Request $request)
    {
        return view('board.add');
    }
    public function create (Request $request)
    {
        $this->validate($request,Board::$rules);
        $board = new Board();
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }
    public function delete (Request $request)
    {
        $id= $request->id;
        $form =Board::where('id',$id)->first();

        return view('board.del',['form'=>$form]);
    }
    public function remove (Request $request)
    {
        return redirect('/board');
    }
    
}
