@extends('layouts.master_request')
@section('title', 'Laravel チュートリアル（初級）')
 
@section('content')
  <h3>フォームサンプル（確認画面）</h3>
  <p>アンケートにご協力下さい</p>
 
  <div class="row">
  <label class="col-sm-2 control-label" for="username">名前：</label>
  <div class="col-sm-10">{{$username}}</div>
  </div>
  <div class="row">
  <label class="col-sm-2 control-label" for="mail">Email：</label>
  <div class="col-sm-10">{{$mail}}</div>
  </div>
  <div class="row">
  <label class="col-sm-2 control-label" for="age">年齢：</label>
  <div class="col-sm-2">{{$age}}</div>
  <div class="col-sm-8">歳</div>
  </div>
  <div class="row">
  <label class="col-sm-2 control-label" for="opinion">ご意見：</label>
  <div class="col-sm-10">{{$opinion}}</div>
  </div>
@endsection