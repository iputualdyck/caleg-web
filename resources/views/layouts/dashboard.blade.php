@extends('layouts.templates')

@section('title','Dashboard')
@section('menu_title','Dashboard')
@section('content')
	<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-body">
            <h4>How to use the application</h4>
            <ol>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni mollitia molestiae placeat exercitationem sed iste a fugit quas expedita quam.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium minus consectetur unde et, maxime suscipit.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
		<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $caleg }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Caleg</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $career }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Career</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bank"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $org }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Organization</p>
                </div>
                <div class="icon">
                  <i class="fa fa-balance-scale"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $act }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Activities</p>
                </div>
                <div class="icon">
                  <i class="fa  fa-sticky-note"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $mess }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Criticism & Suggestions</p>
                </div>
                <div class="icon">
                  <i class="fa fa-comments"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>0<sup style="font-size: 20px"></sup></h3>
    
                  <p>Gallery</p>
                </div>
                <div class="icon">
                  <i class="fa fa-photo"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $vid }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Video Activities</p>
                </div>
                <div class="icon">
                  <i class="fa fa-video-camera"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{ $mem }}<sup style="font-size: 20px"></sup></h3>
    
                  <p>Members</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        
      </div>
	</div>
@stop