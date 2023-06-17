@extends('layouts.admin')
  
  @section('content')
  
  <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10">
                <div class="card-deck">
              
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title text-success">Create Cast</strong>
                    </div>
                    <div class="card-body">
  
                <!-- General Form Elements -->
                <form method="post" action="{{ route('notice.store') }}">
                         @csrf
                         <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Full Name') }}</label>

                        <div class="col-md-8">
                            
            <select class="test form-control col-md-12">
            @foreach($users as $user)
            <option value="{{ $row->name }}">{{ $user->fname}} {{ $user->lname}}</option>
   
   @endforeach
    </select>
    @error('lg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Photo') }}</label>
  
                              <div class="col-md-8">
  <textarea class="form-control @error('photo') is-invalid @enderror" name="body">
    ...
</textarea>
                                  @error('photo')
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