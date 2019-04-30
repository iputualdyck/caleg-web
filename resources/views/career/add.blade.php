@extends('layouts.templates')

@section('title','Add Career')
@section('menu_title','Add Career')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Form Career</h4>
           <form action="{{ route('career.store') }}" method="post">
             @csrf
             <div class="form-group">
               <label for="">Career Description</label>
               <input type="text" class="form-control" name="career_description" autofocus
               placeholder="Example : Ketua Partai Pan" value="{{ old('career_description') }}" required>
             </div>

             <div class="form-group">
               <label for="">Career Started</label>
               <select name="date_start" class="form-control" required>
                 <option value="">Year Started</option>
                 @for($i = 1945;$i<= 2018;$i++)
                 <option value="{{ $i }}">{{ $i }}</option>
                 @endfor
               </select>
             </div>

             <div class="form-group">
               <label for="">Career End</label>
               <select name="date_end" class="form-control" required>
                 <option value="">Year Started</option>
                 <option value="sekarang">Sekarang</option>
                 @for($i = 2018;$i>= 1945;$i--)
                 <option value="{{ $i }}">{{ $i }}</option>
                 @endfor
               </select>
             </div>
              
             <button class="btn btn-dark">Add Career &nbsp;<i class="fa fa-plus"></i></button>
             <a href="{{ route('career') }}" class="btn btn-danger">Cancel & Go back</a>

           </form>
         </div>
       </div>
      
      @include('component.alert_error')

     </div>
   </div> 
  </div>

@stop