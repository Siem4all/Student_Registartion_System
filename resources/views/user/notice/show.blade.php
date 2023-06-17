@extends('layouts.admin')
  
  @section('content')
  
  <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10">
                <div class="card-deck">
              
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title text-success">View Notice</strong>
                    </div>
                    <div class="card-body">
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Subject') }}</label>
  
                              <div class="col-md-8">
                                  <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{$notice->subject }}" readonly >
  
                                  @error('subject')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Body') }}</label>
  
                              <div class="col-md-8">
  <textarea class="form-control @error('body') is-invalid @enderror" name="body" raedonly>
{{$notice->subject}}
</textarea>
                              </div>
                          </div><!-- End General Form Elements -->
  </div>
                  </div>
                </div> <!-- / .card-desk-->
                 <!-- /. end-section -->
                 <!-- end section -->
              </div> <!-- .col-12 -->
            </div> <!-- .row -->
          </div>
  @endsection