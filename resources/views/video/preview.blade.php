@extends('layouts.templates')

@section('title','Video Preview')
@section('menu_title','Video Preview')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Video Preview</h4>
           <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $data->url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           <table class="table">
             <tr>
               <td>Title</td>
               <td>:</td>
               <td>{{ $data->title }}</td>
             </tr>
             <tr>
               <td>Description</td>
               <td>:</td>
               <td>{{ $data->description }}</td>
             </tr>
           </table>

           <a href="{{ route('video') }}" class="btn btn-default">Back<i class="fa fa-reply"></i></a>
         </div>
       </div>
        
      @include('component.alert_error')

     </div>
   </div> 
  </div>

@stop