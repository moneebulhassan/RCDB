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

      <form class="form-inline ml-3" method="post" action="{{url('search')}}">
      @csrf
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search"
             aria-label="Search"  >
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>




    </p>

    <table class="table table-bordered table-hover">
  		<tr>
  			<th>#</th>
  			<th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Volunteer Category</th>
  			<th>Action</th>

  		</tr>
      @if(count($volunteers))
      <?php $no = 1; ?>
  		@foreach($volunteers as $n)
  			<tr>
          <td>{{ $no }}</td>
  				<td>{{ $n->First_Name }}</td>
          <td>{{ $n->Last_Name }}</td>
          <td>{{ $n->Gender }}</td>
          <td>{{ $n->Category}}</td>

        
  				<td>
            <a href="{{ route('admin.volunteers.edit',$n->id) }}" class="btn btn-info">Edit</a>
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
              <a href="{{ route('admin.volunteers.show',$n->id) }}" class="btn btn-info">Show</a>

            <form action="{{ route('admin.volunteers.destroy',$n->id) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

          </td>
  			</tr>
        <?php $no++; ?>
  		@endforeach
      @else
      <tr><td colspan="3">No Records Found</td></tr>
      @endif

    </table>
    {{$volunteers->links()}}
  </div>
</section>
@endsection
