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


@extends('layouts.admin')
@section('content')

<!-- <div class="mt-8">
          <a href="#">
            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-400 mt-1 ">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
              <g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22
                l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0
                01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 0
                1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                 data-name="star"/></g></svg>
              <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
              <span class="mx-2">|</span>
              <span>{{\carbon\carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
            </div>
            <div class="text-gray-400">
            action, thriller, comdey
            </div>
        </div>
      </div> -->

@endsection
