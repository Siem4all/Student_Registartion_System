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
                    <h2>All <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                      <!-- table -->
                      <table id="datatable-buttons datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
      <th>#</th>
		<th>Fname</th>
	  <th>Mname</th>
    <th>Lname</th>
		<th>Gender</th>
		<th>Mobile</th>
		<th>Age</th>
    <th>Height</th>
    <th>Language</th>
    <th>Profession</th>
    <th>Current Job</th>
    <th>Special Ability</th>
    <th>Ability in Art</th>
    <th>Special Identity</th>
    <th>Blood Type</th>
    <th>Religion</th>
    <th>Participation</th>
    <th>Section</th>
    <th>Old Address</th>
    <th>New Address</th>
    <th>email </th>
    <th>User Role</th>
    </tr>
  </thead>
  <tbody>
       @foreach($users as $key => $user)
    <tr>
    <td>{{ ++$key }}</td>
	<td>{{$user->fname}}</td>
  <td>{{$user->mname}}</td>
	<td>{{$user->lname}}</td>
	<td>{{$user->gender}}</td>
	<td>{{$user->mobile	}}</td>
	<td>{{$user->dob}}</td>		
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