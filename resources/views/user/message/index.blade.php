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
                    <h2>Messages</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="container col-sm-12">
                            <div class="card card-box table-responsive">
              
    <!-- table -->
    <table id="datatable-buttons datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead class="bg-info">
                        <tr>
                          <th class="col-sm-12"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($messages as $row)
    <tr>
      @if($row->sender_id==Auth::user()->id)
      <td style="float:right"><fieldset>
      <textarea class="bg-success text-white">{{$row->body}}</textarea>
    </fieldset></td>
      @else
      <td style="float:left"><fieldset>
      <textarea class="bg-info text-white">{{$row->body}}</textarea>
    </fieldset></td>
    @endif
    </tr>
    @endforeach
    </tr>
  </tbody>

</table>
<form method="post" action="{{ route('user_message.store') }}">
 @csrf
<input type="text" name="body" class="col-sm-11" style="height:35px;">
<button class="btn btn-sm btn-success" style="float:right;height:35px;">Send</button>
</form>
 </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
              <br><br><br><br><br><br><br><br><br><br><br><br>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div>
        
@endsection