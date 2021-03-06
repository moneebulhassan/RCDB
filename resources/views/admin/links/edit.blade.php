@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit links</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit links</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      <form method="post" action="{{route( 'admin.links.update', $link->id )}}">
        @method('PUT')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <div class="row">
            <label class="col-md-3">Name of link</label>
            <div class="col-md-6"> <input type="text" name="Name_of_link" class="form-control"
               value= "{{ $link->Name_of_link}} "></div>
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
