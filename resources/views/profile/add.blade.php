@extends('layouts.profileapp')

@section('title', 'Profile.Add')

@section('content')

<div class="container-fluid">
        <div class="row">
<form action="add" method="POST" enctype="multipart/form-data">
<div class="col-md-12 border border-dark">
<table>
@csrf
<tr><th>名前</th><td><input type="text" name="name"></td></tr>
<tr><th>年齢</th><td><input type="number" name="age" min="18" max="150"></td></tr>
<tr><th>星</th><td><input type="number" name="star" min="0" max="5"></td></tr>
<tr><th>説明</th><td><input type="text" name="profile"></td></tr>
<tr><th>写真</th><td><input type="file" name="pic"></td></tr>
    </table>
     <input type="submit" value="登録する" >
</div>
</form>
</div>
</div>
@endsection


