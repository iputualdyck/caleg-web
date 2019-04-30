@extends('layouts.templates')

@section('title','Add Banner')
@section('menu_title','Add Banner')
@section('content')
  
  <div class="container">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<div class="panel panel-body">
  				<h4>Add New Banner</h4>
  				<form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
  					@csrf

  					<div class="form-group">
  						<label for="">Photo</label>
  						<input type="file" class="dropify" name="photo">
  					</div>

  					<button class="btn btn-dark">Add New Banner</button>
  					<a href="{{ route('banner') }}" class="btn btn-danger">Cancel & Go back</a>
  				</form>
  			</div>

  			@include('component.alert_error')
  		</div>
  	</div>
  </div>

@stop