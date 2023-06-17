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
                    <h2>All Payments</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%"><thead>
                        <tr>
      <th>#</th>
	  <th>Fullname</th>
    <th>Section name</th>
    <th>Section Catagory</th>
		<th>Amount</th>
    <th>TFP Code</th>
    <th>Status</th>
    </tr>
  </thead>
  <tbody>
       @foreach($payments as $key => $payment)
    <tr>
    <td>{{ ++$key }}</td>
  <td>{{$payment->student->fname}} {{$payment->student->mname}}</td>
  <td>{{$payment->schedule->section->name}}</td>
  <td>{{$payment->schedule->section->catagory}}</td>
	<td>{{$payment->schedule->section->amount}}</td>
  <td>{{$payment->tfp_code}}</td>
	<td>{{$payment->status}}</td>
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