 @extends('layouts.admin')
  
@section('content')

<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="card-deck">
            
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <strong class="card-title text-success">Choose Student Name</strong>
                  </div>
                  <div class="card-body">

              <!-- General Form Elements -->
              <form method="post" action="{{ route('timetable.store') }}">
                       @csrf
                       <input  type="hidden" class="form-control" name="sid" value="{{$id}}">

                        <div class="row mb-3">
                            <label for="mname" class="col-md-2 col-form-label text-md-end">{{ __('Add Students') }}</label>

                            <div class="col-md-8">
                            <select id="country" class="form-control col-md-12"  name="stud" >
             @foreach($students as $student)
                      <option value="{{$student->id}}">{{$student->fname}} {{$student->mname}}</option>
                @endforeach
    </select>
                                @error('stud')
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