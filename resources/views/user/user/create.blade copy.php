 @extends('layouts.admin')
  
@section('content')

<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="card-deck">
            
                  <div class="card-header">
                    <strong class="card-title text-success">New User</strong>
                  </div>
                  <div class="card shadow mb-4">

                  <div class="card-body">

              <!-- General Form Elements -->
              <form method="post" action="{{ route('access.store') }}">
                       @csrf
                       <div class="row mb-3">
                            <label for="fname" class="col-md-2 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-8">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                            <div class="col-md-8">
                                <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" required autocomplete="mname" autofocus>

                                @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lname" class="col-md-2 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-8">
                                <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                <div class="row mb-3">
                                
                                <label for="gender" class= "col-md-2 col-form-label text-md-end">{{ __('Gender') }}</label>
                        <div class="form-check form-check-inline col-md-3" >
                            <input class="form-check-input" type="radio" name="gender" value="male" {{ old('gender')== 'male' ? 'checked' : '' }}>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class=" form-check form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="gender" value="female" {{ old('gender')== 'female' ? 'checked' : '' }}>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                            

                    </div>

                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Mobile') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="timezone" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dob" class="col-md-2 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                        <div class="col-md-8">
                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>

                            @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
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
                            <input id="mobile" type="text" class="form-control @error('ca') is-invalid @enderror" name="ca" value="{{ old('ca') }}" required autocomplete="mobile" autofocus>

                            @error('ca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Old Address') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="text" class="form-control @error('od') is-invalid @enderror" name="od" value="{{ old('od') }}" required autocomplete="mobile" autofocus>

                            @error('od')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Height') }}</label>

                        <div class="col-md-8">
                            <input id="mobile" type="text" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}" required autocomplete="mobile" autofocus>

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
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Language') }}</label>

                        <div class="col-md-8">
                          <select class="form-control @error('lg') is-invalid @enderror" name="lg">
                <option value=""></option>
                                           </select>
                            @error('lg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Profession') }}</label>

                        <div class="col-md-8">
                          <select class="form-control @error('pro') is-invalid @enderror" name="pro">
                <option value=""></option>
                                           </select>
                            @error('pro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Special Ability') }}</label>

                        <div class="col-md-8">
                          <select class="form-control @error('sa') is-invalid @enderror" name="sa">
                               <option value=""></option>
                                           </select>
                            @error('sa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Ability In Art') }}</label>

                        <div class="col-md-8">
                          <select class="form-control @error('aia') is-invalid @enderror" name="aia">
                <option value=""></option>
                                           </select>
                            @error('aia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Participation In') }}</label>

                        <div class="col-md-8">
                          <select class="form-control @error('pi') is-invalid @enderror" name="pi">
                <option value=""></option>
                                           </select>
                            @error('pi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Section') }}</label>

                        <div class="col-md-8">
                          <select class="form-control @error('section') is-invalid @enderror" name="section">
                <option value=""></option>
                                           </select>
                            @error('section')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                            <label for="fname" class="col-md-2 col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="col-md-8">
                                <input id="fname" type="file" class="form-control @error('fname') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

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