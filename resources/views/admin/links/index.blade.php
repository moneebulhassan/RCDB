@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Link</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Link</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <p>
      <a href="{{ route ('admin.links.create') }}" class="btn btn-primary">Add Newlink</a>
    </p>
    <table class="table table-bordered table-striped">
      <tr>
        <th>#</th>
        <th>Name of link</th>
        <th>Action</th>
      </tr>
      @if(count($links))
      <?php $no = 1; ?>
      @foreach($links as $c)
      <tr>
        <td>{{ $no }}</td>
        <td>{{ $c->Name_of_link }}</td>
        <td>
         <a href="{{ route('admin.links.edit',$c->id) }}" class="btn btn-info">Edit</a>

        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"
          class="btn btn-danger">Delete</a>
          <form action="{{ route('admin.links.destroy',$c->id) }}" method="post">
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
