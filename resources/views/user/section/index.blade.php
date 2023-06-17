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
                    <h2>All Section</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%"><thead>
                        <tr>
      <th>#</th>
	  <th>Name</th>
    <th>Catagory</th>
    <th>Address</th>
		<th>Amount(monthly)</th>
    <th>Tarining Months</th>
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