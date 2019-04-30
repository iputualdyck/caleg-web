@extends('layouts.templates')

@section('title','Video')
@section('menu_title','Video')
@section('content')
	<div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="panel panel-default">
         <div class="panel-body">
           <a href="{{ route('video.add') }}" class="btn btn-dark">Add Video &nbsp;<i class="fa fa-plus"></i></a>
           <br><br>
           <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover" id="datatable">
               <thead>
                 <tr>
                   <td>No</td>
                   <td>Url Youtube Video</td>
                   <td>Title</td>
                   <td>Created At</td>
                   <td>Action</td>
                 </tr>
               </thead>
               <tbody>

                 @foreach($data as $field)

                 <tr>
                   <td>{{ $loop->index + 1 }}</td>
                   <td>{{ $field->url }}</td>
                   <td>{{ $field->title }}</td>
                   <td>{{ $field->created_at }}</td>
                   <td class="text-center">
                     <a href="{{ route('video.preview',$field->id) }}" class="btn btn-dark">Preview <i class="fa fa-search"></i></a>
                     <a href="{{ route('video.edit',$field->id) }}" class="btn btn-default">Edit <i class="fa fa-pencil"></i></a>
                     <a href="{{ route('video.delete',$field->id) }}" class="btn btn-danger btnDelete">Delete <i class="fa fa-trash"></i></a>
                   </td>
                 </tr>

                 @include('component.delete_alert')

                 @endforeach

               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div> 
  </div>
@stop