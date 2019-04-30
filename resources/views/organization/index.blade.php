@extends('layouts.templates')

@section('title','Organization')
@section('menu_title','Organization')
@section('content')
	<div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="panel panel-default">
         <div class="panel-body">
           <a href="{{ route('organization.add') }}" class="btn btn-dark">Add Organization &nbsp;<i class="fa fa-plus"></i></a>
           <br><br>
           <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover" id="datatable">
               <thead>
                 <tr>
                   <td>No</td>
                   <td>Organization</td>
                   <td>Start Date</td>
                   <td>End Date</td>
                   <td width="200">Action</td>
                 </tr>
               </thead>
               <tbody>

                 @foreach($data as $field)

                 <tr>
                   <td>{{ $loop->index + 1 }}</td>
                   <td>{{ $field->organization_description }}</td>
                   <td>{{ $field->date_start }}</td>
                   <td>{{ $field->date_end }}</td>
                   <td class="text-center">
                     <a href="{{ route('organization.edit',$field->id) }}" class="btn btn-dark">Edit <i class="fa fa-pencil"></i></a>
                     <a href="{{ route('organization.delete',$field->id) }}" class="btn btn-danger btnDelete">Delete <i class="fa fa-trash"></i></a>
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