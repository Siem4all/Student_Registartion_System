 @extends('layouts.admin')
  
@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="card-deck">
            
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <strong class="card-title text-success">Payment Method</strong>
                  </div>
                  <div class="card-body">

              <!-- General Form Elements -->
              <form method="post" action="{{ route('payment.store') }}">
                       @csrf
                       <input  type="hidden" name="num" value="1">
                       <input  type="hidden" name="studid" value="{{$studid}}">
                       <input type="hidden" name="schid" value="{{$schid}}">
                       <div class="row mb-3">
                            <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Bank Name') }}</label>

                            <div class="col-md-8">
                            <select id="country" class="form-control col-md-12"  name="bid" >
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