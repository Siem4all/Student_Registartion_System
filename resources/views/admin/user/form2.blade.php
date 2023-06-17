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
                       
                      <div id="step-3">
                          <!-- General Form Elements -->
              <form method="post" action="{{ route('access.update', $user->id) }}">
              @csrf
              @method('PATCH')
              <input type="hidden" name="num" value="3">
                    <div class="row mb-3">
                        <label for="mobile" class="col-md-2 col-form-label text-md-end">{{ __('Language') }}</label>

                        <div class="col-md-8">
            <select class="test form-control col-md-12" multiple="multiple" name="lg[]" required>
            @foreach($languages as $row)
                      <option value="{{$row->name}}">{{$row->name}}</option>
                @endforeach
    </select>&nbsp;
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#language">
  Add New
</button>
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
            <select class="test form-control col-md-12" multiple="multiple" name="pro[]" required>
            @foreach($professions as $row)
                      <option value="{{$row->name}}">{{$row->name}}</option>
                @endforeach
    </select>&nbsp;<button type="button" class="btn btn-success" data-toggle="modal" data-target="#profession">
  Add New
</button>
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
             <select class="test form-control col-md-12" multiple="multiple" name="spa[]" required>
             @foreach($specials as $row)
                      <option value="{{$row->name}}">{{$row->name}}</option>
                @endforeach
    </select>&nbsp;<button type="button" class="btn btn-success" data-toggle="modal" data-target="#special_ability">
  Add New
</button>
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
            <select class="test form-control col-md-12" multiple="multiple" name="art[]" required>
            @foreach($arts as $row)
                      <option value="{{$row->name}}">{{$row->name}}</option>
                @endforeach
    </select>&nbsp;<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ability_in_art">
  Add New
</button>
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
            <select class="test form-control col-md-12" multiple="multiple" name="pi[]" required>
            @foreach($participations as $row)
                      <option value="{{$row->name}}">{{$row->name}}</option>
                @endforeach
    </select>&nbsp;<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Participation">
  Add New
</button>
                            @error('pi')
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
              <div class="modal fade" id="language" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Language</h5>
      </div>
      <form method="post" action="/target/access/language">
      @csrf
      <div class="modal-body">
        Name: <input type="text" name="name" class="form-control">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="modal fade" id="profession" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Profession</h5>
      </div>
      <form method="post" action="/target/access/profession">
      @csrf
      <div class="modal-body">
        Name: <input type="text" name="name" class="form-control">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>
<div class="modal fade" id="special_ability" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Special Ability</h5>
      </div>
      <form method="post" action="/target/access/special">
      @csrf
      <div class="modal-body">
        Name: <input type="text" name="name" class="form-control">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="modal fade" id="ability_in_art" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Ability In Art</h5>
      </div>
      <form method="post" action="/target/access/art">
      @csrf
      <div class="modal-body">
        Name: <input type="text" name="name" class="form-control">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>
<div class="modal fade" id="Participation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Participation</h5>
      </div>
      <form method="post" action="/target/access/participation">
      @csrf
      <div class="modal-body">
        Name: <input type="text" name="name" class="form-control">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>  
                      </div>

                    </div> </div>

</div>
                    <!-- End SmartWizard Content -->
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        @endsection