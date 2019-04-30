@extends('layouts.templates')

@section('title','Edit Activity')
@section('menu_title','Edit Activity')
@section('content')

  <div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Form Activity</h4>
           <form action="{{ route('activities.update',$data->id) }}" method="post" enctype="multipart/form-data">
             @csrf @method('patch')
             
             <div class="form-group">
               <label for="">Title</label>
               <input type="text" class="form-control" name="title" value="{{ $data->title }}">
             </div>

             <div class="form-group">
               <label for="">Cover Image</label>
               <input type="file" class="dropify" name="cover_image" data-default-file="{{ asset('images/activity/'.$data->cover_image) }}">
             </div>

             <div class="form-group">
               <label for="">Main Content</label>
               <textarea name="full_content" id="" cols="30" rows="10" class="form-control">{{ $data->full_content }}</textarea>
             </div>
              
             <button class="btn btn-dark">Save Changes &nbsp;<i class="fa fa-save"></i></button>
             <a href="{{ route('activities') }}" class="btn btn-danger">Cancel & Go back</a>

           </form>
         </div>
       </div>
      
      @include('component.alert_error')

     </div>
   </div> 
  </div>

@stop