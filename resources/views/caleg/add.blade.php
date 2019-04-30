@extends('layouts.templates')

@section('title','Add Caleg')
@section('menu_title','Caleg')
@section('content')
	<div class="container-fluid">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
      @include('component.alert_error')
       <div class="panel panel-default">
         <div class="panel-body">
          <h4>Add Caleg</h4>
           <form action="{{ route('caleg.store') }}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
               <label for="">Name</label>
               <input type="text" class="form-control" autofocus name="name" 
               placeholder="Example : Nanang Rudiyan" value="{{ old('name') }}" required>
             </div>

             <div class="form-group">
               <label for="">Place of Birth</label>
               <input type="text" class="form-control" autofocus name="place_of_birth" 
               placeholder="Example : Bogor" value="{{ old('place_of_birth') }}"  required>
             </div>

             <div class="form-group">
               <label for="">Date of Birth</label>
               <input type="date" class="form-control" autofocus name="date_of_birth" 
               placeholder="Example : Bogor" value="{{ old('date_of_birth') }}"  required>
             </div>

             <div class="form-group">
               <label for="">Religion</label>
               <select name="religion" class="form-control" required>
                 <option value="">Choose your religion</option>
                 <option value="islam">Islam</option>
                 <option value="protestan">Kristen Protestan</option>
                 <option value="katolik">Kristen Katolik</option>
                 <option value="hindu">Hindu</option>
                 <option value="buddha">Buddha</option>
               </select>
             </div>

             <div class="form-group">
                <label for="">Address</label>
                <textarea name="address" rows="10" class="form-control" 
                placeholder="Example : Jl. Rajamantri Wetan No.10, Turangga, Lengkong, Kota Bandung, Jawa Barat 40264, Indonesia">{{ old('address') }}</textarea>
             </div>

             <div class="form-group">
               <label for="">Phone</label>
               <input type="number" name="phone" class="form-control" 
               placeholder="Example : 08971225858" value="{{ old('phone') }}"  required>
             </div>

             <div class="form-group">
               <label for="input-file-now">Email</label>
                <input type="text" name="email" class="form-control" 
                placeholder="Example mail@mail.com" value="{{ old('email') }}"  required>
             </div>

             <div class="form-group">
               <label for="input-file-now">Facebook</label>
                <input type="text" name="facebook" class="form-control" 
                placeholder="Your Facebook Link" value="{{ old('facebook') }}"  required>
             </div>

             <div class="form-group">
               <label for="input-file-now">Instagram</label>
                <input type="text" name="instagram" class="form-control" 
                placeholder="Your Instagram Link" value="{{ old('instagram') }}"  required>
             </div>

             <div class="form-group">
               <label for="input-file-now">Caleg Photo</label>
                <input type="file" id="input-file-now" class="dropify" name="photo" required />
             </div>

             <div class="form-group">
               <label for="input-file-now">Name of Partai</label>
                <input type="text" name="partai" class="form-control" placeholder="Example : Demokrat" value="{{ old('partai') }}"  required>
             </div>

             <div class="form-group">
               <label for="">About</label>
               <textarea name="about" rows="10" class="form-control"
               placeholder="Example : Hi,Im Aldy From .....">{{ old('about') }}</textarea>
             </div>

             <div class="form-group">
               <label for="input-file-now">Education</label>
                <input type="text" name="education" class="form-control" 
                placeholder="Example : S2 Politik, ITB" value="{{ old('education') }}"  required>
             </div>

             <div class="form-group">
               <label for="input-file-now">Principle</label>
                <input type="text" name="principle" class="form-control" 
                placeholder="Example : Wakil Rakyat yang selalu kenyang akan sulit memperjuangkan rakyat" value="{{ old('principle') }}"  required>
             </div>
            
             <button class="btn btn-dark">Add Caleg</button> 
             <a href="{{ route('home') }}" class="btn btn-danger">Cancel & Go Back</a>

           </form>
         </div>
       </div>
     </div>
   </div> 
  </div>
@stop