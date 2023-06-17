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
                    <h2>All Accounts</h2><a class="offset-md-9 btn bg-success text-white" href="account/create">Add New</a>
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
    <th>Account Owner</th>
	  <th>Bank Name</th>
    <th>Account No_</th>
    <th col=2>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($accounts as $key => $account)
    <tr>
    <td>{{ ++$key }}</td>
  <td>{{$account->staff->fname}}</td>
  <td>{{$account->bank->name}}</td>
  <td>{{$account->account_no}}</td>
  <td class="form-check-inline"><a  class="btn btn-md bg-warning" href="{{ route('account.edit', $account->id) }}">Edit</a>
  <form action="{{ route('account.destroy',$account->id)}}" method="post">
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