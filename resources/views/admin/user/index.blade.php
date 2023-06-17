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
                    <h2>Access <small>Control</small></h2><a class="offset-md-9 btn bg-success text-white" href="access/create">Add New</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
      <th>#</th>
      <th>Image</th>
		<th>Fname</th>
	  <th>Mname</th>
    <th>Lname</th>
		<th>Gender</th>
		<th>Mobile</th>
		<th>Age</th>
    <th>email </th>
    <th>User Role</th>
    <th col=3>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($users as $key => $user)
    <tr>
    <td>{{ ++$key }}</td>
    <td><img src="{{asset('images/'.$user->photo)}}" width="60" height="45"></td>

	<td>{{$user->fname}}</td>
  <td>{{$user->mname}}</td>
	<td>{{$user->lname}}</td>
	<td>{{$user->gender}}</td>
	<td>{{$user->mobile	}}</td>
	<td>{{$user->dob}}</td>
  <td>{{$user->email}}</td>
  <td>
@if($user->user_role==1)
admin
@elseif($user->user_role==2)

Staff
@elseif($user->user_role==3)
Teacher
@else
Student
  @endif
  </td>
  <td class="form-check-inline row"><a  class="btn btn-md bg-warning" href="{{ route('access.edit', $user->id) }}">Edit</a>
  <form action="{{ route('access.destroy',$user->id)}}" method="post">
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