@extends('layouts.admin')
  
  @section('content')
  
  <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10">
                <div class="card-deck">
              
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title text-success">Edit Bank Account</strong>
                    </div>
                    <div class="card-body">
  
                <!-- General Form Elements -->
                <form method="post" action="{{ route('account.update',$account->id) }}">
                @method('PATCH')         
                @csrf
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Account Owner') }}</label>
  
                              <div class="col-md-8">
                              <select id="country" class="form-control col-md-12"  name="sid" >
                              <option value="{{$account->staff_id}}">{{$account->staff->fname}} {{$account->staff->mname}}</option>
                              @foreach($staffs as $staff)
                        <option value="{{$staff->id}}">{{$staff->fname}} {{$staff->mname}}</option>
                  @endforeach
      </select>
                                  @error('sid')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Bank Name') }}</label>
  
                              <div class="col-md-8">
                              <select id="country" class="form-control col-md-12"  name="bid" required>
                              <option value="{{$account->bank_id}}">{{$account->bank->name}}</option>
               @foreach($banks as $bank)
                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                  @endforeach
      </select>
                                  @error('bid')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Account No_') }}</label>
  
                              <div class="col-md-8">
                                  <input id="name" type="number" class="form-control @error('acc') is-invalid @enderror" name="acc" value="{{$account->account_no }}" required autocomplete="mname" autofocus>
  
                                  @error('acc')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>    
                 
                <div class="col-sm-10">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Save</button>
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