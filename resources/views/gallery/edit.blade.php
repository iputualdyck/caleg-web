@extends('layouts.templates')

@section('title','Edit Photo')
@section('menu_title','Edit Photo')
@section('content')
  
  <div class="container">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<div class="panel panel-body">
  				<h4>Edit Photo</h4>
  				<form action="{{ route('gallery.update',$data->id) }}" method="post" enctype="multipart/form-data">
  					@csrf @method('patch')
  					<div class="form-group">
  						<label for="">Description</label>
  						<textarea name="description" rows="5" autofocus 
  						class="form-control">{{ $data->description }}</textarea>
  					</div>

  					<div class="form-group">
  						<label for="">Photo</label>
  						<input type="file" class="dropify" name="photo" 
              data-default-file="{{ asset('images/gallery/'.$data->photo) }}">
  					</div>

  					<button class="btn btn-dark">Save Changes <i class="fa fa-save"></i></button>
  					<a href="{{ route('gallery') }}" class="btn btn-danger">Cancel & Go back</a>
  				</form>
  			</div>

        @include('component.alert_error')
  		</div>
  	</div>
  </div>

@stop