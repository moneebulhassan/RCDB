@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">members</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">members</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <p>
      <a href="{{ route ('admin.volunteers.create') }}" class="btn btn-primary">Add New member</a>
    </p>
    <table class="table table-bordered table-striped">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
      @if(count($volunteers))
      @foreach( $volunteers as $n )
      <tr>
        <td>{{ $n->id }}</td>
        <td>{{ $n->title }}</td>
        <td>{{ $n->Name }}</td>
        <td>
         <a href="{{ route('admin.volunteers.edit',$n->id) }}" class="btn btn-info">Edit</a>

        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"
          class="btn btn-danger">Delete</a>
          <form action="{{ route('admin.volunteers.destroy',$n->id) }}" method="post">
            @method('DELETE')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>


      </tr>
      @endforeach
      else
      <tr><td colspan="3">No member found</td>      </tr>
      @endif
    </table>
  </div>
</section>
@endsection





<form class="form-inline ml-3">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
</form>
