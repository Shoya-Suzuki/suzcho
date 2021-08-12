<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //
    public function index(Request $request)
    {
    /*$data =[
['name'=>'TaroYamada','mail'=>'taro@yamada.co.jp'],
['name'=>'HanakoYamada','mail'=>'hanako@yamada.co.jp'],
['name'=>'TakeshiHattori','mail'=>'takeshi@hattori.co.jp']
];*/
/*
$validator = Validator::make($request->query(),
['id'=>'required',
'pass'=>'required',
]);
if($validator->fails()){
  $msg='クエリーに問題があります。';
}
else {
  $msg='ID/PASSを受け付けました。フォームを入力下さい。';
}

return view('hello.index',['msg'=>$msg,]);*/
if(isset($request->id)){
//$param =['id' => $request->id];
//$items = DB::select('select * from people where id =:id',$param);

$id=$request->id;

$items = DB::table('people')->where('id',$id)->get();//->first();
  //$items =DB::table('people')->get();

}
else{
  $items =DB::table('people')->get();
  //$items = DB::select('select * from people');

}
return view('hello.index',['items' => $items]);
//return view('hello.index',['data'=>$request->data]);
//return view('hello.index',['message'=>'Hello Controller']/*['data'=>$data]*/);
    }
public function show(Request $request)
{
  //$id=$request->id;
  //$item = DB::table('people')->where('id',$id)->first();
  //$items = DB::table('people')->where('id','<=',$id)->get();
if(isset($request->min))
{
  $min=$request->min;
}
else {
  $min=0;
}
if(isset($request->max))
{
  $max=$request->max;
}
else {
  $max=150;
}
if(isset($request->page))
{
  $page=$request->page;
}
else {
  $page=0;
}

  $items = DB::table('people')
  ->whereRaw('age >= ? and age <= ?',
  [$min, $max])->orderBy('age','asc')->offset($page * 3)->limit(3)->get();
  //where('name','like','%'.$key.'%')->orwhere('mail','like','%'.$age.'%')->get();

  return view('hello.show',['items'=> $items]);
}


    public function add(Request $request)
    {
      return view('hello.add');

    }
    public function create(Request $request)
    {
      $param = ['name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
      ];
      //DB::insert('insert into people (name, mail, age) values(:name, :mail, :age)',$param);
      DB::table('people')->insert($param);

      return redirect('/hello');
    }

    public function edit(Request $request)
    {
      $param = ['id' => $request->id,];
      //$item = DB::select('select * from people where id =:id', $param);
      $item =DB::table('people')->where('id',$request->id)->first();
      return view('hello.edit',['form' => $item]);
    }
    public function del(Request $request)
    {
      $param = ['id' => $request->id,];

      //$item = DB::select('select * from people where id =:id', $param);
      $item = DB::table('people')->where('id',$request->id)->first();
      return view('hello.del',['form' => $item]);
    }

    public function remove(Request $request)
    {
      $param = ['id' => $request->id,];

      //$item = DB::delete('delete from people where id =:id', $param);
      DB::table('people')->where('id',$request->id)->delete();
      return redirect('/hello');
    }
    public function update(Request $request)
    {
      $param = [//'id' => $request->id,
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
      ];
      //DB::update('update people set name = :name, mail = :mail,age = :age where id = :id',$param);
      DB::table('people')->where('id',$request->id)->update($param);

      return redirect('/hello');
    }

    public function post(Request $request)
    {
      $items = DB::select('select * from people');
      return view('hello.index',['items' => $items]);
    }
      /*
    public function post(HelloRequest $request)
    {

      $validator = Validator::make($request->all(),[
'name'=>'required',
'mail'=>'email',
'age'=>'numeric:between:0,150',
      ]);

    if($validator->fails()){
      return redirect('hello')
                      ->withErrors($validator)
                      ->withInput();
    }
    else{
      return view('hello.index',['msg'=>'正しく入力されました！']);
    }
    }
/*
    public function post(HelloRequest $request)
    {
      return view('hello.index',['msg'=>'正しく入力されました！']);
    }*/

}
