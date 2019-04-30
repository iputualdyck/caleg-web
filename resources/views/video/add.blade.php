@extends('layouts.templates')

@section('title','Add Video')
@section('menu_title','Add Video')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Form Career</h4>
           <form action="{{ route('video.store') }}" method="post">
             @csrf

             <div class="form-group">
               <label for="">Title</label>
               <input type="text" class="form-control" name="title" autofocus 
               placeholder="Example : Video Presentasi" value="{{ old('title') }}">
             </div>

             <div class="form-group">
               <label for="">Youtube Url</label>
               <input type="text" class="form-control" name="url" autofocus 
               placeholder="watch?v=DXxzfGOaGyE Get after = " value="{{ old('url') }}">
             </div>

             <div class="form-group">
               <label for="">Description</label>
               <textarea name="description" rows="10" class="form-control">{{ old('description') }}</textarea>
             </div>
              
             <button class="btn btn-dark">Add Video &nbsp;<i class="fa fa-plus"></i></button>
             <a href="{{ route('video') }}" class="btn btn-danger">Cancel & Go back</a>

           </form>
         </div>
       </div>
      
      @include('component.alert_error')

     </div>
   </div> 
  </div>

@stop