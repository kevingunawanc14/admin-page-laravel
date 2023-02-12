{{-- @dd($user); --}}

@extends('template.template')

@section('content')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data User</h5>

                <!-- Default Table -->
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <th scope="row">{{ $data->id_user }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->password }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary"><i
                                            class="ri-settings-5-line"></i></button>
                                    <button type="button" class="btn btn-danger"><i
                                            class="ri-delete-bin-5-line"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Default Table Example -->
                <button type="button" class="btn btn-success"><i class="ri-add-circle-line"></i></button></td>
            </div>
        </div>


    </main><!-- End #main -->
@endsection


@section('addjs')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
