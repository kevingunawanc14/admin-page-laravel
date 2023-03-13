@dd($product); 

@extends('template.template')

@section('content')
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Produk</h5>

                <div class="mb-2">
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Add" href="{{ route('addProductPage') }}" type="button"
                        class="btn btn-success"><i class="ri-add-circle-line"></i></a>
        
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
