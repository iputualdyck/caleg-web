@extends('layouts.templates')

@section('title','Add Photo')
@section('menu_title','Add Photo')
@section('content')
  
  <div class="container">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<div class="panel panel-body">
  				<h4>Add New Photo</h4>
  				<form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
  					@csrf
  					<div class="form-group">
  						<label for="">Description</label>
  						<textarea name="description" rows="5" autofocus 
  						class="form-control">{{ old('description') }}</textarea>
  					</div>

  					<div class="form-group">
  						<label for="">Photo</label>
  						<input type="file" class="dropify" name="photo">
  					</div>

  					<button class="btn btn-dark">Add New Photo</button>
  					<a href="{{ route('gallery') }}" class="btn btn-danger">Cancel & Go back</a>
  				</form>
  			</div>

  			@include('component.alert_error')
  		</div>
  	</div>
  </div>

@stop