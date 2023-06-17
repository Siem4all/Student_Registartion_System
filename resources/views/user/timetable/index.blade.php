@extends('layouts.user')
   
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
                    <h2>TimeTable</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%"><thead>
                        <tr>
      <th>#</th>
		<th>Student Name</th>
    <th>Teacher Name</th>
		<th>Section Name</th>
    <th>Section Cat</th>
    <th>Section Address</th>
    <th>Section Amount</th>
    <th>Start At</th>
    <th>Days</th>
    </tr>
  </thead>
  <tbody>
       @foreach($timetables as $key => $row)
    <tr>
    <td>{{ ++$key }}</td>
    <td>{{$row->student->fname}} {{$row->student->mname}}</td>
    <td>{{$row->schedule->teacher->fname}} {{$row->schedule->teacher->mname}}</td>
    <td>{{$row->schedule->section->name}}</td>
	<td>{{$row->schedule->section->catagory}}</td>
	<td>{{$row->schedule->section->address}}</td>
	<td>{{$row->schedule->section->amount}}</td>
  <td>{{$row->schedule->start_at}}</td>
	<td>
  <?php
$string = implode(',',json_decode($row->schedule->days,1));
echo $string;
?>
  </td>
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