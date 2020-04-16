@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add member</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Add member </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      <form method="post" action="{{route( 'admin.volunteers.store' )}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">



          <div class="form-group">
            <div class="row">
            <label class="col-md-3">First Name</label>
            <div class="col-md-6"> <input type="text" name="First_Name" class="form-control"></div>
            <div class="clearfix"></div>
             </div>
          </div>

          <div class="form-group">
            <div class="row">
            <label class="col-md-3">Last Name</label>
            <div class="col-md-6"> <input type="text" name="Last_Name" class="form-control"></div>
            <div class="clearfix"></div>
             </div>
          </div>


          <div class="form-group">
          <div class="row">
            <label class="col-md-3">Image</label>
            <div class="col-md-6"><input type="file" name="image"></div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
          <label class="col-md-3">Date of Birth</label>
          <div class="col-md-6"> <input type="date" name="Date_of_Birth" class="form-control"></div>
          <div class="clearfix"></div>
           </div>
        </div>

        <div class="form-group">
          <div class="row">
          <label class="col-md-3">Place of Birth</label>
          <div class="col-md-6"> <input type="text" name="Place_of_Birth" class="form-control"></div>
          <div class="clearfix"></div>
           </div>
        </div>

        <div class="form-group">
          <div class="row">
          <label class="col-md-3">Contact Number</label>
          <div class="col-md-6"> <input type="text" name="Contact_Number" class="form-control"></div>
          <div class="clearfix"></div>
           </div>
        </div>

        <div class="form-group">
          <div class="row">
          <label class="col-md-3">Address</label>
          <div class="col-md-6"> <input type="text" name="Address" class="form-control"></div>
          <div class="clearfix"></div>
           </div>
        </div>



        <div class="form-group">
            <div class="row">
          <label class="col-md-3">Gender</label>
          <div class="col-md-6">
          <select class="form-control" id="Gender" name="Gender"  autofocus>
                <option></option>
              <option>male</option>
                <option>female</option>
        </select>
          <div class="clearfix"></div>
        </div>
          </div>
          </div>


        <div class="form-group">
        <div class="row">
          <label class="col-md-3">Blood Group</label>
          <div class="col-md-6">
          <select class="form-control" id="Blood_Group" name="Blood_Group"  autofocus>
            <option></option>
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
          <label class="col-md-3">Educational Level</label>
          <div class="col-md-6">
          <select class="form-control" id="Education_Level" name="Education_Level"  autofocus>
                          <option></option>
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
        <label class="col-md-3">Area of Intrest</label>
        <div class="col-md-6">
        <select class="form-control" id="Area_of_Intrest" name="Area_of_Intrest"  autofocus>
                                    <option></option>
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
        <label class="col-md-3">Category</label>
        <div class="col-md-6">
        <select class="form-control" id="Category" name="Category"  autofocus>
                        <option></option>
                          <option>Junior</option>
                          <option>Senior</option>
      </select>
        <div class="clearfix"></div>
      </div>
    </div>
    </div>



        <div class="form-group">






          <div class="form-group">
            <input type="submit" class="btn btn-info" value="Save">
          </div>
      </form>
  </div>
</section>
@endsection
