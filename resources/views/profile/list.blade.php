@extends('layouts.profileapp')

@section('title','Profile.list')
@section('content')

  <div class="container-fluid">
        <div class="row">
            @foreach($profiles as $profile)
           
            <div class="col-sm-4 col-md-3 col-lg-2  border border-dark">
              <a href = "{{route('profile.id',['id'=>$profile->id])}}">
              @if($profile->mainphoto!=null)
              <img src= "../public/{{$profile->mainphoto}}" class="img-thumbnail rounded" alt="{{$profile->name}}">
              @else                          
              <img src= "../public/noimage.png" class="img-thumbnail rounded" alt="画像無し">            
              @endif            
              </a>
              <table class="table table-striped">
                <tr><td>{{$profile->getdata()}}</td></tr>
                <tr><td>
                @component('components.star',['star'=>$profile->star])
                @endcomponent
                </td></tr>
              </table>
            </div>
        
            @endforeach
        </div>
  </div>

@endsection


