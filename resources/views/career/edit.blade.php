@extends('layouts.templates')

@section('title','Edit Career')
@section('menu_title','Edit Career')
@section('content')

	<div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
         <div class="panel-body">
           <h4>Form Edit Career</h4>
           <form action="{{ route('career.update',$data->id) }}" method="post">
             @csrf @method('patch')
             <div class="form-group">
               <label for="">Career Description</label>
               <input type="text" class="form-control" name="career_description" autofocus
               placeholder="Example : Ketua Partai Pan" value="{{ $data->career_description }}" required>
             </div>

             <div class="form-group">
               <label for="">Career Started</label>
               <select name="date_start" class="form-control" required>
                 <option value="">Year Started</option>
                 @for($i = 1945;$i<= 2018;$i++)
                   @if($i == $data->date_start)
                    <option value="{{ $i }}" selected>{{ $i }}</option>
                   @else
                    <option value="{{ $i }}">{{ $i }}</option>
                   @endif
                 @endfor
               </select>
             </div>

             <div class="form-group">
               <label for="">Career End</label>
               <select name="date_end" class="form-control" required>
                 <option value="">Year Started</option>
                 <option value="sekarang">Sekarang</option>
                 @for($i = 2018;$i>= 1945;$i--)
                  @if($i == $data->date_end)
                    <option value="{{ $i }}" selected>{{ $i }}</option>
                   @else
                    <option value="{{ $i }}">{{ $i }}</option>
                   @endif
                 @endfor
               </select>
             </div>
              
             <button class="btn btn-dark">Save Changes &nbsp;<i class="fa fa-save"></i></button>
             <a href="{{ route('career') }}" class="btn btn-danger">Cancel & Go back</a>

           </form>
         </div>
       </div>
      
      @include('component.alert_error')

     </div>
   </div> 
  </div>

@stop