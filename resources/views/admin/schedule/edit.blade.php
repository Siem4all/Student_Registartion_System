@extends('layouts.admin')
  
  @section('content')
  
  <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10">
                <div class="card-deck">
              
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title text-success">Edit Schedule</strong>
                    </div>
                    <div class="card-body">
  
                <!-- General Form Elements -->
                <form method="post" action="{{ route('schedule.update',$schedule->id) }}">
                      @method('PATCH') 
                        @csrf
                         <div class="row mb-3">
                              <label for="tid" class="col-md-2 col-form-label text-md-end">{{ __('Teacher Name') }}</label>
  
                              <div class="col-md-8">
                             <select class="form-control @error('tid') is-invalid @enderror" name="tid">
                             <option value="{{$schedule->teacher->id}}">{{$schedule->teacher->fname}} {{$schedule->teacher->mname}}</option>
                              @foreach($teachers as $teacher)
                              <option value="{{$teacher->id}}">{{$teacher->fname}} {{$teacher->mname}}</option>
                              @endforeach
                              </select>
                                  @error('tid')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Section') }}</label>
  
                              <div class="col-md-8">
                              <select class="form-control @error('sid') is-invalid @enderror" name="sid">
                              <option value="{{$schedule->section->id}}">{{$schedule->section->name}} {{$schedule->section->catagory}}</option>
                              @foreach($sections as $section)
                              <option value="{{$section->id}}">{{$section->name}} {{$section->catagory}}</option>
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
                              <label for="sat" class="col-md-2 col-form-label text-md-end">{{ __('Start At') }}</label>
  
                              <div class="col-md-8">
                                  <input id="sat" type="datetime-local" class="form-control @error('sat') is-invalid @enderror" name="sat" value="{{ old('sat') }}" required>
  
                                  @error('sat')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="row mb-3">
                              <label for="lname" class="col-md-2 col-form-label text-md-end">{{ __('Days') }}</label>
  
                              <div class="col-md-8">
                              <select class="test form-control col-md-12" multiple="multiple" name="days[]">
                        <option value="Monday">Monday</option>
                        <option value="Thuesday">Thuesday</option>
                        <option value="Wensday">Wensday</option>
                        <option value="thursday">thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                                   </select>
                                  @error('days')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                 
                <div class="col-sm-10">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary">Update</button>
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