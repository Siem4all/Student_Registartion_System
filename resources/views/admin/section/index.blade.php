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
                    <h2>All Section</h2><a class="offset-md-9 btn bg-success text-white" href="section/create">Add New</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%"><thead>
                        <tr>
      <th>#</th>
	  <th>Name</th>
    <th>Catagory</th>
    <th>Address</th>
		<th>Amount(monthly)</th>
    <th>Tarining Months</th>
    <th col=2>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($sections as $key => $section)
    <tr>
    <td>{{ ++$key }}</td>
  <td>{{$section->name}}</td>
  <td>{{$section->catagory}}</td>
	<td>{{$section->address}}</td>
	<td>{{$section->amount}}</td>
  <td>6</td>
  <td class="form-check-inline"><a  class="btn btn-md bg-warning" href="{{ route('section.edit', $section->id) }}">Edit</a>
  <a  class="btn btn-md bg-success" href="{{ route('schedule.show', $section->id) }}">Schedule</a>
  <form action="{{ route('section.destroy',$section->id)}}" method="post">
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