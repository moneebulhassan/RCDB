@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->


      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <tr>
                <td> <h2 > <b>Total Registered</b></h2></td>
                <th><h1> {{ App\volunteer::count() }} </h1> </th>
              </tr>
            </div>
            <div class="icon">
              <i class="fa fa-child"></i>
            </div>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">

              <tr>
                <td> <h2>Total Male</h2></td>
                <th><h1>{{ App\volunteer::where('Gender', 'male')->count() }}</h1></th>
              </tr>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <tr>
                <td> <h2>Total Female</h2></td>
                <th><h1>{{ App\volunteer::where('Gender', 'female')->count() }}</h1></th>
              </tr>
            </div>
            <div class="icon">
              <i class="fa fa-female"></i>
            </div>

          </div>
          </div>




        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="card card-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-secondary">
                  <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="../dist/img/rc.jpg" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <!-- / this code show the volunteers Category -->
                  <h3 class="widget-user-username">volunteers</h3>
                  <h5 class="widget-user-desc">Category</h5>
                </div>
                <div class="card-footer p-0">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <b>Junior volunteers</b>  <span class="float-right badge bg-primary">
                          <h1>{{ App\volunteer::where('Category', 'junior')->count() }}</h1></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <b>Senior volunteers</b>  <span class="float-right badge bg-primary">
                          <h1>{{ App\volunteer::where('Category', 'senior')->count() }}</h1></span>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>

        </section>
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection
