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
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
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
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->password }}</td>
                                <td>
                                    <a type="button" class="btn btn-secondary"><i
                                            class="ri-settings-5-line"></i></a>
                                    <a href="/profileUser/hapus/{{ $data->id_user }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" type="button"
                                        class="btn btn-danger"><i class="ri-delete-bin-5-line"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Default Table Example -->
                <a href="{{route('addUser')}}" type="button" class="btn btn-success"><i class="ri-add-circle-line"></i></a>
                <a href="{{route('deleteAllUser')}}" type="button" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Semua Data?');" ><i class="ri-alert-line" ></i></a>
            </div>
        </div>


    </main><!-- End #main -->
@endsection


@section('js')
    <script>
        function deleteUser() {

            let text = "Data Akan Dihapus";
            if (confirm(text) == true) {
                text = "You pressed OK!";
            } else {
                text = "You canceled!";
            }

            let idUser = document.getElementById("idUser").value

            let Data = new FormData();
            Data.append("idUser", idUser);

            const xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {

                    alert("Data Berhasil Di Hapus")

                } else {
                    alert("Error!");
                }
            }
            xmlHttp.open("POST", "request/delete_ajax.php");
            xmlHttp.send(Data);
        }
    </script>
@endsection
