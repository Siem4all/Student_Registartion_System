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
                  <div class="x_title bg-dark text-white">
                    <h2>Messages</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          
                  <div class="container col-sm-9 bg-info">
                            <div class="card card-box table-responsive" style="background-image: url({{asset('download.png')}})">
              
    <!-- table --><h6 class="bg-secondary text-white" style="margin:0px;">To:{{$user->fname}} {{$user->mname}}</h6>
    <table id="datatable-buttons datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     
    <thead class="bg-primary">
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
<?php
if($message->sender->user_role==1){
   $id=$rid;
}
else{
  $id=$sid;
}
?>
<form method="post" action="{{ route('message.store') }}">
 @csrf

<input type="hidden" name="rid" value="{{$id}}">
<input type="text" name="body" class="col-sm-11" style="height:35px;">
<button class="btn btn-sm btn-success" style="float:right;height:35px;">Send</button>
</form>
 </div>
                  </div>
                  <div class="col-sm-3">
                            <div class="card-box table-responsive">
              
    <!-- table -->
    <table id="datatable-buttons datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead class="bg-info">
                        <tr>
	  <th></th>
    <th></th>
    </tr>
  </thead>
  <tbody>
 <?php
$listusers=array();
foreach($allusers as $us) {
  echo "<tr>";
    if (!in_array($us->sender_id, $listusers)) {
      if($us->sender->user_role!=1){
        $listusers[] = $us->sender_id;
        ?>
        <td><img src="{{asset('images/'.$us->sender->photo)}}" width="60" height="45"></td>
        <td>
        <a href="{{route('message.show',$us->id)}}">{{$us->sender->fname}}&nbsp;{{$us->sender->mname}}</a>
      </td>
        <?php
      }
    }
    ?>
    <?php
    if (!in_array($us->reciever_id, $listusers)) {
      if($us->reciever->user_role!=1){
        $listusers[] = $us->reciever_id;
        ?>
        <td><img src="{{asset('images/'.$us->reciever->photo)}}" width="60" height="45"></td>
        <td>
        <a href="{{route('message.show',$us->id)}}">{{$us->reciever->fname}}&nbsp;{{$us->reciever->mname}}</a>
      </td>
        <?php
      }  
    }
    echo "</tr>";
}
 ?>
    
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