@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Branch</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Branch</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
      <form method="post" action="{{route( 'admin.branches.update', $Branch->id )}}">
        @method('PUT')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <div class="row">
            <label class="col-md-3">Name of branch</label>
            <div class="col-md-6"> <input type="text" name="Name_of_branch" class="form-control"
               value= "{{ $Branch->Name_of_branch}} "></div>
            <div class="clearfix"></div>
             </div>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-info" value="Save">
          </div>
      </form>
  </div>
</section>
@endsection
