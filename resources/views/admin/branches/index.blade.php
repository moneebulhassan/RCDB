@extends('layouts.admin')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Branches</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Branches</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>


<section class="content">
  <div class="container-fluid">
    <p>
      <a href="{{ route ('admin.branches.create') }}" class="btn btn-primary">Add New branch</a>
    </p>
    <table class="table table-bordered table-striped">
      <tr>
        <th>#</th>
        <th>Name of branch</th>
        <th>Action</th>
      </tr>
      @if(count($branches))
      <?php $no = 1; ?>
      @foreach($branches as $c)
      <tr>
        <td>{{ $no }}</td>
        <td>{{ $c->Name_of_branch }}</td>
        <td>
         <a href="{{ route('admin.branches.edit',$c->id) }}" class="btn btn-info">Edit</a>

        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"
          class="btn btn-danger">Delete</a>
          <form action="{{ route('admin.branches.destroy',$c->id) }}" method="post">
            @method('DELETE')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>


      </tr>
      <?php $no++; ?>
      @endforeach
      @else
      <tr><td colspan="3">No Link Found</td></tr>
      @endif

    </table>
  </div>
</section>

@endsection
