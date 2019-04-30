@extends('layouts.templates')

@section('title','Banner')
@section('menu_title','Banner')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-body">
          <h4>Banner Caleg</h4>
          <a href="{{ route('banner.add') }}" class="btn btn-dark">Add New Banner <i class="fa fa-plus"></i></a>
          <br><br>
        </div>
      </div>
      </div>
    </div>
    <div class="row">
      @foreach($data as $field)


        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <img src="{{ asset('images/banner/'.$field->photo) }}" alt="Photo" class="img-responsive">
              <br>
              <a href="{{ route('banner.delete',$field->id) }}" class="btn btn-danger btnDelete btn-block">Delete Photo <i class="fa fa-trash"></i></a>
            </div>
          </div>
        </div>

        @include('component.delete_alert')
      @endforeach
    </div>
  </div>

@stop