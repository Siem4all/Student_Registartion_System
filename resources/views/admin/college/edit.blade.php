 @extends('layouts.admin')
  
@section('content')

<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="card-deck">
            
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <strong class="card-title text-success">Edit College</strong>
                  </div>
                  <div class="card-body">

              <!-- General Form Elements -->
              <form method="post" action="{{ route('college.update',$college->id) }}">
                        @method('PATCH') 
                        @csrf
                      
                        <div class="row mb-3">
                            <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('College Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$college->name }}" required autocomplete="mname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('College Address') }}</label>

                            <div class="col-md-8">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$college->address }}" required autocomplete="mname" autofocus>

                                @error('address')
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