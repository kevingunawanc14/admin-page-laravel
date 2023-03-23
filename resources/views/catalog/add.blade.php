@extends('template.template')

@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Catalog Form</h5>

                            <!-- Horizontal Form -->
                            <form method="post" action="{{ route('addCatalog') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input name="nama" type="text"
                                            class="form-control  @error('nama')is-invalid @enderror " id="">
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input name="judul" type="text"
                                            class="form-control  @error('judul')is-invalid @enderror " id="">
                                        @error('judul')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" type="file"
                                            class="form-control @error('image')is-invalid @enderror" id="">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">PDF</label>
                                    <div class="col-sm-10">
                                        <input name="pdf" type="file"
                                            class="form-control @error('pdf')is-invalid @enderror" id="">
                                        @error('pdf')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-switch mt-2">
                                            <input name="status" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>  
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{ route('catalogPage') }}" class="btn btn-dark">Back</a>
                                </div>
                            </form><!-- End Horizontal Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
