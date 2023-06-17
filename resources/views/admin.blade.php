@extends('layouts.admin')
@section('content')
<!-- page content -->
          <!-- top tiles -->
          <div class="row col-md-12" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count bg-info text-white">
              <span class="count_top"><i class="fa fa-mortar-board"></i> Total Students</span>
              <div class="count">{{$students->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count bg-danger text-white">
              <span class="count_top"><i class="fa fa-users"></i> Total Teachers</span>
              <div class="count">{{$teachers->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count bg-success text-dark">
              <span class="count_top"><i class="fa fa-users"></i>Total Staff</span>
              <div class="count text-white">{{$staffs->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count bg-dark text-white">
              <span class="count_top"><i class="fa fa-university"></i> Total Colleges</span>
              <div class="count">{{$colleges->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count bg-warning text-dark">
              <span class="count_top"><i class="fa fa-dollar"></i> Pend... Payments</span>
              <div class="count">{{$payments->count()}}</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count bg-primary text-white">
              <span class="count_top"><i class="fa fa-building"></i> Total Sections</span>
              <div class="count">{{$sections->count()}}</div>
            </div>
          </div>
        </div>
        <!-- top tiles -->
        <div class="container col-md-12" >
          <div class="tile_count">
            @foreach($allsections as $section)
            <div class="card col-md-2  tile_stats_count bg-info text-white">
              <span class="count_top"><i class="fa fa-building bg-danger"></i>&nbsp;{{$section->name}} Section</span>
              <span class="count_top"><i class="fa fa-class"></i>{{$section->catagory}}</span>
              @if($section->schedule)
              @if($section->schedule->timetables)
              <div class="count">{{$section->schedule->timetables->count()}}</div>
              @endif
              @endif
            </div>
            @endforeach
          </div>
        </div>
          <!-- /top tiles -->
        <!-- /page content -->
        @endsection