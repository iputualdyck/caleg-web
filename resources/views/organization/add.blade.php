@extends('layouts.templates')

@section('title','Add Organization')
@section('menu_title','Add Organization')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Form Career</h4>
           <form action="{{ route('organization.store') }}" method="post">
             @csrf
             <div class="form-group">
               <label for="">Organization Description</label>
               <input type="text" class="form-control" name="organization_description" autofocus
               placeholder="Example : Partai PAN" value="{{ old('career_description') }}">
             </div>

             <div class="form-group">
               <label for="">Organization Started</label>
               <select name="date_start" class="form-control">
                 <option value="">Year Started</option>
                 @for($i = 1945;$i<= 2018;$i++)
                 <option value="{{ $i }}">{{ $i }}</option>
                 @endfor
               </select>
             </div>

             <div class="form-group">
               <label for="">Organization End</label>
               <select name="date_end" class="form-control">
                 <option value="">Year Started</option>
                 <option value="sekarang">Sekarang</option>
                 @for($i = 2018;$i>= 1945;$i--)
                 <option value="{{ $i }}">{{ $i }}</option>
                 @endfor
               </select>
             </div>
              
             <button class="btn btn-dark">Add Organization &nbsp;<i class="fa fa-plus"></i></button>
             <a href="{{ route('career') }}" class="btn btn-danger">Cancel & Go back</a>

           </form>
         </div>
       </div>
      
      @include('component.alert_error')

     </div>
   </div> 
  </div>

@stop