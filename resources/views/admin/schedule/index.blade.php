@extends('layouts.admin')
   
@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div id="myMsg" class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
  @if(session()->get('error'))
    <div id="myMsg" class="alert alert-danger">
      {{ session()->get('error') }}  
    </div>
  @endif
</div>
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Teacher <small>Schedule</small></h2><a class="offset-md-9 btn bg-success text-white" href="schedule/create">Add New</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%"><thead>
                        <tr>
      <th>#</th>
		<th>FullName</th>
    <th>Teacher Mobile</th>
		<th>Section Name</th>
    <th>Section Cat</th>
    <th>Section Address</th>
    <th>Section Amount</th>
    <th>Start At</th>
    <th>Days</th>
    <th col=2>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($schedules as $key => $schedule)
    <tr>
    <td>{{ ++$key }}</td>
    <td>{{$schedule->teacher->fname}} {{$schedule->teacher->mname}}</td>
    <td>{{$schedule->teacher->mobile}}</td>
  <td>{{$schedule->section->name}}</td>
  <td>{{$schedule->section->catagory}}</td>
	<td>{{$schedule->section->address}}</td>
	<td>{{$schedule->section->amount}}</td>
  <td>{{$schedule->start_at}}</td>
	<td>
  <?php
$string = implode(',',json_decode($schedule->days,1));
echo $string;
?>
  </td>

  <td class="form-check-inline"><a  class="btn btn-md bg-warning" href="{{ route('schedule.edit', $schedule->id) }}">Edit</a>
  <a  class="btn btn-md bg-success" href="{{ route('timetable.edit', $schedule->id) }}">Student</a>
  <form action="{{ route('schedule.destroy',$schedule->id)}}" method="post">
   @csrf
  @method('DELETE')
				<button class="btn btn-md bg-danger text-white">Delete</button>
                </form></td>
    </tr>
    @endforeach
  </tbody>

</table>

 </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
              <br><br><br><br><br><br><br><br><br><br><br><br>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div>
        
@endsection