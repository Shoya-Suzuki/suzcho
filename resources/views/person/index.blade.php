@extends('layouts.helloapp')

@section('title','Person.index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')

<table>
<tr><th>getData</th><th>Board</th><th>NAME</th><th>MAIL</th><th>AGE</th>
@foreach($hasItems as $item)
  <tr>
    <td>{{$item->getData()}}</td>
    <td>
        <table>
        @foreach($item->boards as $obj)        
        <tr><td>{{$obj->getData()}}</td></tr>
        @endforeach
        </table> 
    </td>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
  </tr>
@endforeach
</table>

<table>
<tr><th>getData</th><th>NAME</th><th>MAIL</th><th>AGE</th>
@foreach($noItems as $item)
  <tr>
    <td>{{$item->getData()}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
  </tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2021 suzcho.
@endsection
