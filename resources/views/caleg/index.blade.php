@extends('layouts.templates')

@section('title','Caleg Profile')
@section('menu_title','Caleg Profile')
@section('content')
	<div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Caleg Profile</h4>
           <div class="row">
             <div class="col-md-8">
               <table class="table">
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td>{{ $data->name }}</td>
                </tr>
                <tr>
                  <td>Place Of Birth</td>
                  <td>:</td>
                  <td>{{ $data->place_of_birth }}</td>
                </tr>
                <tr>
                  <td>Date Of Birth</td>
                  <td>:</td>
                  <td>{{ $data->date_of_birth }}</td>
                </tr>
                <tr>
                  <td>Religion</td>
                  <td>:</td>
                  <td>{{ $data->religion }}</td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>:</td>
                  <td>{{ $data->address }}</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>:</td>
                  <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                  <td>Partai</td>
                  <td>:</td>
                  <td>{{ $data->partai }}</td>
                </tr>
                <tr>
                  <td>About</td>
                  <td>:</td>
                  <td>{{ $data->about }}</td>
                </tr>
                <tr>
                  <td>Education</td>
                  <td>:</td>
                  <td>{{ $data->education }}</td>
                </tr>
                <tr>
                  <td>Principle</td>
                  <td>:</td>
                  <td>{{ $data->principle }}</td>
                </tr>
               </table>

               <a href="{{ route('caleg.edit',$data->id) }}" class="btn btn-dark">Edit Profile <i class="fa fa-user"></i></a>
             </div>

             <div class="col-md-4">
               <img src="{{ asset('images/caleg/'.$data->photo) }}" alt="" class="img-responsive">
             </div>
           </div>


         </div>
       </div>
     </div>
   </div> 
  </div>
@stop