
{{-- @dd($user); --}}

@extends('template.template')

@section('content')

<main id="main" class="main">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data User</h5>

      <!-- Default Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Alamat</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
  @foreach($user as $data) 


        <tbody>
          <tr>
            <th scope="row">{{ $data->id_user }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->password }}</td>
            <td><button type="button" class="btn btn-secondary"><i class="bi bi-collection"></i></button>
              <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
              <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
          </tr>

        </tbody>

  @endforeach
</table>
<!-- End Default Table Example -->
</div>
</div>
</main><!-- End #main -->

@endsection'


