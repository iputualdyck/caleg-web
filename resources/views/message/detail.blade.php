@extends('layouts.templates')

@section('title','Detail Message')
@section('menu_title','Detail Message')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-8 col-sm-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Message</h4>
           <table class="table">
             <tr>
               <td>Name</td>
               <td>:</td>
               <td>{{ $data['name'] }}</td>
             </tr>
             <tr>
               <td>Email</td>
               <td>:</td>
               <td>{{ $data['email'] }}</td>
             </tr>
             <tr>
               <td>Message</td>
               <td>:</td>
               <td>{{ $data['message'] }}</td>
             </tr>
             <tr>
               <td>Received At</td>
               <td>:</td>
               <td>{{ $data['created_at'] }}</td>
             </tr>
           </table>
           <a href="{{ route('message') }}" class="btn btn-default">Back <i class="fa fa-mail-reply"></i></a>
         </div>
       </div>
     </div>
   </div> 
  </div>

@stop