@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5" >
        <img src="https://static.vecteezy.com/ti/vettori-gratis/p1/2078423-fotocamera-fotografia-logo-icona-modello-vettore-gratuito-vettoriale.jpg" class= "rounded-circle" style = "max-height:100px;">

        </div>
        <div class="col-9 pt-5">
        
            <div><h1> {{$user->username}}</h1></div>
            <a href="/p/create"> Add new post</a>
            <div class="d-flex"> 
            <div> <strong><h1> posts: {{$user->posts->count()}}</h1></strong></div>
            
        </div>

        @if($user->profile)         
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="pt-4 font-weight-bold">{{$user->profile->description}}</div>
        @else
            <div class="pt-4 font-weight-bold">Profilo non associato</div>
        @endif
       


    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{$post->image}}"  style = "max-height:300px;">
            </div>
        @endforeach
       
    </div>
  

</div>
@endsection
