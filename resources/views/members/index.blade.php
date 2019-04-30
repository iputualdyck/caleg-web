@extends('layouts.templates')

@section('title','Members')
@section('menu_title','Members')
@section('content')
	<div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="panel panel-default">
         <div class="panel-body">
           <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover" id="datatable">
               <thead>
                 <tr>
                   <td>No</td>
                   <td>Name</td>
                   <td>Email</td>
                   <td>Register at</td>
                 </tr>
               </thead>
               <tbody>

                 @foreach($data as $field)

                 <tr>
                   <td>{{ $loop->index + 1 }}</td>
                   <td>{{ $field['name'] }}</td>
                   <td>{{ $field['email'] }}</td>
                   <td>{{ $field['created_at'] }}</td>
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