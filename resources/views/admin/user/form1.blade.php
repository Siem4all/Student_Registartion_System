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
          <div class="">
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New <small>User</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                       <div class="card-body">
                        
                      <div id="step-2">
 
                  <form method="post" action="{{ route('access.update', $user->id) }}">
                       @method('PATCH') 
                        @csrf
                        <input type="hidden" name="num" value="2">
                       <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Current Job') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="text" class="form-control @error('cj') is-invalid @enderror" name="cj" value="{{ old('cj') }}" required autocomplete="mobile" autofocus>

                            @error('cj')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Current Address') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="text" class="form-control @error('na') is-invalid @enderror" name="na" value="{{ old('na') }}" required autocomplete="mobile" autofocus>

                            @error('na')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Old Address') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="text" class="form-control @error('oa') is-invalid @enderror" name="oa" value="{{ old('oa') }}" required autocomplete="mobile" autofocus>

                            @error('oa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Height') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="number" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}" required autocomplete="mobile" autofocus>

                            @error('height')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Skin Color') }}</label>

                        <div class="col-md-8">
                        <input id="mobile" type="text" class="form-control @error('sc') is-invalid @enderror" name="sc" value="{{ old('sc') }}" required autocomplete="mobile" autofocus>

                            @error('sc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Special Symbol') }}</label>

                        <div class="col-md-8">
                        <input id="mobile" type="text" class="form-control @error('sc') is-invalid @enderror" name="ss" value="{{ old('ss') }}" required autocomplete="mobile" autofocus>

                            @error('ss')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div></div>
                        <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Blood Type') }}</label>

                        <div class="col-md-8">
                        <input id="mobile" type="text" class="form-control @error('bt') is-invalid @enderror" name="bt" value="{{ old('bt') }}" required autocomplete="mobile" autofocus>

                            @error('bt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div></div>
                        <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Religion ') }}</label>

                        <div class="col-md-8">
                        <input id="mobile" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="mobile" autofocus>

                            @error('religion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('College ') }}</label>

                        <div class="col-md-8">
                            <select class="form-control @error('college') is-invalid @enderror" name="college">
@foreach($colleges as $college)
<option value="{{$college->id}}">{{$college->name}}, {{$college->address}}</option>
@endforeach
</select>
                            @error('college')
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
                </div>
              </div>
            </div>
          </div>

        @endsection