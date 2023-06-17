 @extends('layouts.admin')
  
@section('content')

<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card-deck">
            
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <strong class="card-title text-success">Payment</strong>
                  </div>
                  <div class="card-body">

              <!-- General Form Elements -->
              <form method="post" action="{{ route('payment.store') }}">
                       @csrf
                       <h4>When you pay <b class="text-success">{{$schedule->section->amount}}</b>&nbsp;birr, Put <strong class="text-success">{{$code}}</strong> code in the remark(reason) field.<h4>
                       <input  type="hidden" name="num" value="2">
                       <input  type="hidden" name="studid" value="{{$studid}}">
                       <input type="hidden" name="schid" value="{{$schid}}">
                       <input type="hidden" name="code" value="{{$code}}">
                       <input type="hidden" name="accid" value="{{$account->id}}">
                       <div class="row mb-3">
                            <label for="lname" class="col-md-2 col-form-label text-md-end">{{ __('Bank') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$account->bank->name}}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lname" class="col-md-2 col-form-label text-md-end">{{ __('Account') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$account->account_no}}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lname" class="col-md-2 col-form-label text-md-end">{{ __('Owner') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$account->staff->fname}} {{$account->staff->mname}}" readonly>
                            </div>
                        </div>
               
              <div class="col-sm-10">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <button type="submit" class="btn btn-primary">Pay Now</button>
                  </div>

              </form><!-- End General Form Elements -->
</div>
                </div>
              </div> <!-- / .card-desk-->
               <!-- /. end-section -->
               <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div>
@endsection