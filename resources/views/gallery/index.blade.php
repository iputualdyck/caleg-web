@extends('layouts.templates')

@section('title','Gallery')
@section('menu_title','Gallery')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-body">
          <h4>Gallery Caleg</h4>
          <a href="{{ route('gallery.add') }}" class="btn btn-dark">Add New Photo <i class="fa fa-plus"></i></a>
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
              <img src="{{ asset('images/gallery/'.$field->photo) }}" alt="Photo" class="img-responsive">
              <br>
              <a href="{{ route('gallery.delete',$field->id) }}" class="btn btn-danger btnDelete">Delete Photo <i class="fa fa-trash"></i></a>
              <a href="{{ route('gallery.edit',$field->id) }}" class="btn btn-dark">Edit Photo <i class="fa fa-pencil"></i></a>
            </div>
          </div>
        </div>

        @include('component.delete_alert')
      @endforeach
    </div>
  </div>

@stop

@section('script')
  <script>
    $.ajax({
      type:"GET",
      url :"{{ url('api/gallery/data') }}",
      success:function(data){
        console.log(data);
      }
    })
  </script>
@endsection