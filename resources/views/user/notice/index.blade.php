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
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%"><thead>
                        <tr>
      <th>#</th>
    <th>Subject</th>
	  <th>Body</th>
    <th>College Name</th>
    <th>College Address</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($notices as $key => $notice)
    <tr>
    <td>{{ ++$key }}</td>
  <td>{{$notice->subject}}</td>
  <td>{{$notice->body}}</td>
  <td>{{$notice->college->name}}</td>
  <td>{{$notice->college->address}}</td>
  <td><a  class="btn btn-md bg-info" href="{{ route('user_notice.show', $notice->id) }}">View</a></td>
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