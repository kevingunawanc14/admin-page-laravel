{{-- @dd($user); --}}

@extends('template.template')

@section('content')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data User</h5>

                <div class="mb-2">
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Add" href="{{ route('addUserPage') }}" type="button"
                        class="btn btn-success"><i class="ri-add-circle-line"></i></a>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete All   "
                        href="{{ route('deleteAllUser') }}" type="button" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda Yakin Menghapus Semua Data?');"><i
                            class="ri-alert-line"></i></a>
                </div>

                <!-- Default Table -->
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th scope="col">*#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <!-- End Default Table Example -->

            </div>
        </div>


    </main><!-- End #main -->
@endsection


@section('js')
    <script>

    </script>
@endsection
