@extends('template.template')

@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Catalog Form</h5>

                            <!-- Horizontal Form -->
                            <form method="post" action="{{ route('updateCatalog') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input name="nama" value="{{ $data->nama }}" type="text"
                                            class="form-control  @error('nama')is-invalid @enderror" id="inputText">
                                        <input name="id" value="{{ $data->id }}" type="hidden"
                                            class="form-control" id="inputText">
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input name="judul" value="{{ $data->judul }}" type="text"
                                            class="form-control @error('harga')is-invalid @enderror" id="inputEmail">

                                        @error('judul')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">

                                        <img class="mb-3" src="{{ asset('storage/' .$data->image ) }}" alt="" width="100px" >
                                        
                                        <input name="image" value="{{ $data->image }}" type="file"
                                            class="form-control @error('image')is-invalid @enderror" id="inputText">

                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">PDF</label>
                                    <div class="col-sm-10">
                                        <input name="pdf" value="{{ $data->pdf }}" type="file"
                                            class="form-control @error('pdf')is-invalid @enderror" id="inputText">

                                        @error('pdf')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-switch mt-2">
                                            <input name="status" class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault" {{ $data->status == "1" ? "checked" : "" }} >
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{ route('catalogPage') }}" class="btn btn-dark">Back</a>
                                </div>
                            </form>
                            <!-- End Horizontal Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

@endsection
