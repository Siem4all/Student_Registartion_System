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
                    <h2>Profile</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
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
    <th>Action</th>
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
  <td class="form-check-inline"><a  class="btn btn-md bg-warning" href="{{ route('user_access.edit', $user->id) }}">Edit</a>
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