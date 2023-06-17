 @extends('layouts.user')
  
@section('content')

<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card-deck">
            
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <h1><strong class="card-title text-danger">Payment</strong></h1>
                  </div>
                  <div class="card-body">

              <!-- General Form Elements -->
              <form method="post" action="{{ route('user_payment.store') }}">
                       @csrf
                       <h5 class="text-dark">N.B: Dear student, After you transfered <strong class="text-success">{{$schedule->section->amount}} </strong> birr to <strong class="text-success">{{$account->account_no}}</strong> account number, Enter the transaction code in the field we provided bellow!!!<h5>
                       <hr>
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
                        <div class="row mb-3">
                            <label for="lname" class="col-md-2 col-form-label text-md-end">{{ __('Transaction Code') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" value="" name="code" required>
                            </div>
                        </div>
               
              <div class="col-sm-10">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <button type="submit" class="btn btn-primary">Submit</button>
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