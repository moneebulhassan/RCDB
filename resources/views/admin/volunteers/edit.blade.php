@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Member</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Member</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <form method="post" action="{{ route('admin.volunteers.update',$volunteer->id) }}" enctype="multipart/form-data">
      @method('PUT')
      <input type="hidden" name="_token" value="{{ csrf_token() }}">




      <div class="form-group">
        <div class="row">
          <label class="col-md-3">First Name:</label>
          <div class="col-md-6"><input type="text" name="First_Name" class="form-control"
            value="{{ $volunteer->First_Name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Last Name:</label>
          <div class="col-md-6"><input type="text" name="Last_Name" class="form-control"
            value="{{ $volunteer->Last_Name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>





      <div class="form-group">
      <div class="row">
        <label class="col-md-3">Image:</label>
        <div class="col-md-9"><input type="file" name="image"></div>
        <div class="clearfix"></div>
        @if($volunteer->image)
        <div class="col-md-3"></div>
          <div class="col-md-9">
            <img src="{{ asset('storage/volunteers/'.$volunteer->image) }}" style="width:150px;">
          </div>
        <div class="clearfix"></div>
        @endif
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <label class="col-md-3">Date of Birth:</label>
        <div class="col-md-6"><input type="date" name="Date_of_Birth" class="form-control"
          value="{{ $volunteer->Date_of_Birth }}"></div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <label class="col-md-3">Place of Birth:</label>
        <div class="col-md-6"><input type="text" name="Place_of_Birth" class="form-control"
          value="{{ $volunteer->Place_of_Birth }}"></div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <label class="col-md-3">Contact Number:</label>
        <div class="col-md-6"><input type="Number" name="Contact_Number" class="form-control"
          value="{{ $volunteer->Contact_Number}}">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <label class="col-md-3">Address:</label>
        <div class="col-md-6"><input type="text" name="Address" class="form-control"
          value="{{ $volunteer->Address}}"></div>
        <div class="clearfix"></div>
      </div>
    </div>



    <div class="form-group">
        <div class="row">
      <label class="col-md-3">Gender:</label>
      <div class="col-md-6">
      <select class="form-control" id="Gender" name="Gender"  autofocus>
            <option>  {{  $volunteer->Gender  }}</option>
            <option>....</option>
          <option>male</option>
            <option>female</option>
    </select>
      <div class="clearfix"></div>
    </div>
      </div>
      </div>


    <div class="form-group">
    <div class="row">
      <label class="col-md-3">Blood Group:</label>
      <div class="col-md-6">
      <select class="form-control" id="Blood_Group" name="Blood_Group"  autofocus>

                    <option>{{ $volunteer->Blood_Group }}</option>
                            <option>....</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
        </select>
      <div class="clearfix"></div>
    </div>
  </div>
  </div>



    <div class="form-group">
      <div class="row">
        <label class="col-md-3">Educational Level:</label>
        <div class="col-md-6">
        <select class="form-control" id="Education_Level" name="Education_Level"  autofocus>
                        <option>{{ $volunteer->Education_Level }}</option>
                        <option>....</option>
                          <option>primary School</option>
                          <option>Junior School</option>
                          <option>High School</option>
                          <option>tertiary institute</option>
                          <option>others</option>
      </select>
        <div class="clearfix"></div>
      </div>
    </div>
    </div>


    <div class="form-group">
    <div class="row">
      <label class="col-md-3">Area of Intrest:</label>
      <div class="col-md-6">
      <select class="form-control" id="Area_of_Intrest" name="Area_of_Intrest"  autofocus>
                                  <option>{{ $volunteer->Area_of_Intrest }}</option>
                                  <option>....</option>
                                  <option>first Aid</option>
                                  <option>Dessimination</option>
                                  <option>Dissater Managment</option>
                                  <option>Leadership</option>
        </select>
      <div class="clearfix"></div>
    </div>
  </div>
  </div>



    <div class="form-group">
  <div class="row">
    <label class="col-md-3">Category:</label>
    <div class="col-md-6">
    <select class="form-control" id="Category" name="Category"  autofocus>
                    <option>{{ $volunteer->Category }}</option>
                    <option>....</option>
                      <option>Junior</option>
                      <option>Senior</option>
  </select>
    <div class="clearfix"></div>
  </div>
</div>
</div>





      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</section>


@endsection
