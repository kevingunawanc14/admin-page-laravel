{{-- @dd($produk);  --}}

@extends('template.template')

@section('content')
<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Produk</h5>

            <div class="mb-2">
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Add" href="{{ route('addProdukPage') }}" type="button" class="btn btn-success"><i class="ri-add-circle-line"></i></a>
            </div>

            <!-- Default Table -->
            <table id="example" class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1 @endphp
                    @foreach ($product as $data)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ Str::limit($data->deskripsi, 10) }}</td>
                        <td> <img src="{{ asset('storage/' .$data->image ) }}" alt="" width="100px" ></td>
                        <td>{{ $data->link }}</td>
                        <td>{{ $data->status == '1' ? 'Aktif' : 'Non-aktif' }}</td>
                        <td>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Update" href="{{ route('updateProdukPage', $data->id) }}" type="button" class="btn btn-secondary"><i class="ri-settings-5-line"></i></a>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="{{ route('deleteProduk', $data->id) }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" type="button" class="btn btn-danger"><i class="ri-delete-bin-5-line"></i></a>
                        </td>
                    </tr>
                    @endforeach
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