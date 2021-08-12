@extends('layouts.helloapp')

@section('title','Show')
@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')

@if($items !=null)
  <table width="400px">
  @foreach($items as $item)
  <tr>
    <tr><th width="50px">id:</th><td width="50px">{{$item->id}}</td>
    <th width="50px">name:</th><td width="50px">{{$item->name}}</td>
    <th width="50px">mail:</th><td width="50px">{{$item->mail}}</td>
    <th width="50px">age:</th><td width="50px">{{$item->age}}</td></tr>
  </tr>

  @endforeach
  </table>
@endif

@endsection

@section('footer')
copyright 2021 suzcho.
@endsection
