@extends('layouts.templates')

@section('title','Detail Activity')
@section('menu_title','Detail Activity')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-10 col-md-offset-1">
       <div class="panel panel-default">
         <div class="panel-body">
           <a href="{{ route('activities') }}" class="btn btn-default">Back <i class="fa fa-reply"></i></a>
           <br><br>
           <img src="{{ asset('images/activity/'.$data->cover_image) }}" alt="Cover Content" class="img-responsive" width="100%">
           <h1 class="title-post">{{ $data->title }}</h1>
           <h4 class="subtitle-post">{{ $data->created_at->diffForHumans() }}</h4>
           <br>
           <br>
           <p>
             {{ $data->full_content }}
           </p>
         </div>
       </div>
     </div>
   </div> 
  </div>

@stop