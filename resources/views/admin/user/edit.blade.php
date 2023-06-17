@extends('layouts.admin')
  
  @section('content')
  
  <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10">
                <div class="card-deck">
              
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title text-success">Update User</strong>
                    </div>
                    <div class="card-body">
  
                <!-- General Form Elements -->
                <form method="post" action="{{ route('access.update', $user->id) }}" enctype="multipart/form-data">
                       @method('PATCH') 
                        @csrf
                        <input type="hidden" name="num" value="4">
                         <div class="row mb-3">
                              <label for="fname" class="col-md-2 col-form-label text-md-end">{{ __('First Name') }}</label>
  
                              <div class="col-md-8">
                                  <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror"  name="fname" value="{{$user->fname }}" required autocomplete="fname" autofocus>
  
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
                                  <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{$user->mname }}" required autocomplete="mname" autofocus>
  
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
                                  <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{$user->lname }}" required autocomplete="lname" autofocus>
  
                                  @error('lname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                  <div class="row mb-3">
                                  
                          <label for="gender" class= "col-md-2 col-form-label text-md-end">{{ __('Gender') }}</label>
                        <?php
                        if($user->gender=="male"){
                          $m="checked";
                          $f="";
                        }
                        else{
                            $m="checked";
                            $f="";
                        }
                        ?>
                          <div class="form-check form-check-inline col-md-3" >
                              <input class="form-check-input" type="radio" name="gender" value="male" {{ old('gender')== 'male' ? 'checked' : '' }} <?php echo $m;?>>
                              <label class="form-check-label" for="male">Male</label>
                          </div>
                          <div class=" form-check form-check-inline col-md-3">
                              <input class="form-check-input" type="radio" name="gender" value="female" {{ old('gender')== 'female' ? 'checked' : '' }} <?php echo $f;?>>
                              <label class="form-check-label" for="female">Female</label>
                          </div>
                              
  
                      </div>
  
                      <div class="row mb-3">
                          <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Mobile') }}</label>
  
                          <div class="col-md-8">
                              <input id="mobile" type="timezone" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$user->mobile }}" required autocomplete="mobile" autofocus>
  
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
                              <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{$user->dob }}" required autocomplete="dob" autofocus>
  
                              @error('dob')
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
                      <div class="row mb-3">
                          <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Current Job') }}</label>
  
                          <div class="col-md-8">
                              <input id="mobile" type="text" class="form-control @error('cj') is-invalid @enderror" name="cj" value="{{ $user->current_job }}" required autocomplete="mobile" autofocus>
  
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
                              <input id="mobile" type="text" class="form-control @error('ca') is-invalid @enderror" name="ca" value="{{$user->new_address }}" required autocomplete="mobile" autofocus>
  
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
                              <input id="mobile" type="text" class="form-control @error('oa') is-invalid @enderror" name="oa" value="{{$user->old_address }}" required autocomplete="mobile" autofocus>
  
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
                              <input id="mobile" type="text" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ $user->height }}" required autocomplete="mobile" autofocus>
  
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
                          <input id="mobile" type="text" class="form-control @error('sc') is-invalid @enderror" name="sc" value="{{$user->skin_color  }}" required autocomplete="mobile" autofocus>
  
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
                          <input id="mobile" type="text" class="form-control @error('sc') is-invalid @enderror" name="si" value="{{$user->special_identity }}" required autocomplete="mobile" autofocus>
  
                              @error('ss')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div></div>
                          <div class="row mb-3">
                          <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Blood Type') }}</label>
  
                          <div class="col-md-8">
                          <input id="mobile" type="text" class="form-control @error('bt') is-invalid @enderror" name="bt" value="{{$user->blood_type }}" required autocomplete="mobile" autofocus>
  
                              @error('bt')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div></div>
                          <div class="row mb-3">
                          <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Religion ') }}</label>
  
                          <div class="col-md-8">
                          <input id="mobile" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ $user->religion }}" required autocomplete="mobile" autofocus>
  
                              @error('religion')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <?php 
                      $jso = json_decode($user->language);
                      $pro = json_decode($user->profession);
                      $spa = json_decode($user->special_ability);
                      $art = json_decode($user->ability_in_art);
                      $part = json_decode($user->participation);
                      ?>
                      <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Language') }}</label>

                        <div class="col-md-8">
                            
            <select class="test form-control col-md-12" multiple="multiple" name="lg[]" style="width:100%;">
            @foreach($languages as $row)
            <option value="{{ $row->name }}" {{ (in_array($row->name, $jso)) ? 'selected' : '' }}>{{ $row->name}}</option>
   
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
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Profession') }}</label>

                        <div class="col-md-8">
            <select class="test form-control col-md-12" multiple="multiple" name="pro[]" >
                @foreach($professions as $row)
            <option value="{{ $row->name }}" {{ (in_array($row->name, $pro)) ? 'selected' : '' }}>{{ $row->name}}</option>
   
   @endforeach
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
             <select class="test form-control col-md-12" multiple="multiple" name="spa[]" >
                @foreach($specials as $row)
            <option value="{{ $row->name }}" {{ (in_array($row->name, $spa)) ? 'selected' : '' }}>{{ $row->name}}</option>
                 @endforeach
    </select>
                            @error('spa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   

                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Ability In Art') }}</label>

                        <div class="col-md-8">
            <select class="test form-control col-md-12" multiple="multiple" name="art[]" >
                @foreach($arts as $row)
            <option value="{{ $row->name }}" {{ (in_array($row->name, $art)) ? 'selected' : '' }}>{{ $row->name}}</option>
                 @endforeach
                
    </select>
                            @error('art')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Participation In') }}</label>

                        <div class="col-md-8">
            <select class="test form-control col-md-12" multiple="multiple" name="pi[]" >
                @foreach($participations as $row)
            <option value="{{ $row->name }}" {{ (in_array($row->name, $part)) ? 'selected' : '' }}>{{ $row->name}}</option>
                 @endforeach
    </select>
                            @error('pi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="dob" class="col-md-2 col-form-label text-md-end">{{ __('User Role') }}</label>

                        <div class="col-md-8">
                       <select class="form-control @error('role') is-invalid @enderror" name="role">
                        
                       <option value="0">Student</option>
                        <option value="2">Staff</option>
                        <option value="3">Teacher</option>
                        <option value="1">Admin</option>

</select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>     
                      <div class="row mb-3">
                          <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>
  
                          <div class="col-md-8">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
  
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                              <label id="inputImage" class="col-md-2 col-form-label text-md-end">{{ __('Photo') }}</label>
  
                              <div class="col-md-8">
                                  <input id="inputImage" type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Image" required>
                                  <img src="/images/{{ $user->photo }}" width="300px">

                                  @error('image')
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