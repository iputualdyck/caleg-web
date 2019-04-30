@extends('layouts.templates')

@section('title','Criticism & Suggestions')
@section('menu_title','Criticism & Suggestions')
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
                   <td>Message</td>
                   <td>Received on</td>
                   <td width="200">Action</td>
                 </tr>
               </thead>
               <tbody>

                 @foreach($data as $field)

                 <tr>
                   <td>{{ $loop->index + 1 }}</td>
                   <td>{{ $field['name'] }}</td>
                   <td>{{ substr($field['message'], 0,100)."..." }}</td>
                   <td>{{ $field['created_at'] }}</td>
                   <td class="text-center">
                     <a href="{{ route('message.detail',$field['id']) }}" class="btn btn-dark">Detail <i class="fa  fa-search-plus"></i></a>
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