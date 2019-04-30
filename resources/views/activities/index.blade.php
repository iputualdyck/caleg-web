@extends('layouts.templates')

@section('title','Activity')
@section('menu_title','Activity')
@section('content')
	<div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="panel panel-default">
         <div class="panel-body">
           <a href="{{ route('activities.add') }}" class="btn btn-dark">Add Activity &nbsp;<i class="fa fa-plus"></i></a>
           <br><br>
           <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover" id="datatable">
               <thead>
                 <tr>
                   <td>No</td>
                   <td>Title</td>
                   <td>Created At</td>
                   <td>Action</td>
                 </tr>
               </thead>
               <tbody>

                 @foreach($data as $field)

                 <tr>
                   <td>{{ $loop->index + 1 }}</td>
                   <td>{{ $field->title }}</td>
                   <td>{{ $field->created_at }}</td>
                   <td class="text-center">
                     <a href="{{ route('activities.detail',$field->id) }}" class="btn btn-dark">Detail <i class="fa fa-search"></i></a>
                     <a href="{{ route('activities.edit',$field->id) }}" class="btn btn-default">Edit <i class="fa fa-edit"></i></a>
                     <a href="{{ route('activities.delete',$field->id) }}" class="btn btn-danger btnDelete">Delete <i class="fa fa-trash"></i></a>
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