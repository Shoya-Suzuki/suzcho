@extends('layouts.profileapp')

@section('title','Profile.index')

@section('content')
  <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 border border-dark">
            @if($profile->mainphoto!=null)
              <img src= "../{{$profile->mainphoto}}" class="img-thumbnail rounded" alt="{{$profile->name}}">
            @else
              <img src= "../noimage.png" class="img-thumbnail rounded" alt="画像無し">            
            @endif
            </div>
            <div class="col-md-6 border border-dark">
              <table class="table table-striped">
                <tr><th>Name</th><td>{{$profile->name}}</td></tr>
                <tr><th>Age</th><td>{{$profile->age}}</td></tr>
                <tr><th>Star</th><td> @component('components.star',['star'=>$profile->star])@endcomponent</td></tr>
                <tr><th>Profile</th><td>{{$profile->profile}}</td></tr>

              </table>
            </div>
        </div>
  </div>

@endsection

