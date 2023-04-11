@extends('template.template')

@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Team Form</h5>

                            <!-- Horizontal Form -->
                            <form method="post" action="{{ route('updateTeam') }}" enctype="multipart/form-data">
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
                                    <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input name="jabatan" value="{{ $data->jabatan }}" type="text"
                                            class="form-control @error('jabatan')is-invalid @enderror" id="inputEmail">

                                        @error('harga')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input name="deskripsi" value="{{ $data->deskripsi }}" type="text"
                                            class="form-control @error('deskripsi')is-invalid @enderror" id="inputEmail">

                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Linkedin</label>
                                    <div class="col-sm-10">
                                        <input name="linkedin" value="{{ $data->linkedin }}" type="text"
                                            class="form-control @error('linkedin')is-invalid @enderror" id="inputEmail">

                                        @error('linkedin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input name="facebook" value="{{ $data->facebook }}" type="text"
                                            class="form-control @error('facebook')is-invalid @enderror" id="inputEmail">

                                        @error('facebook')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input name="instagram" value="{{ $data->instagram }}" type="text"
                                            class="form-control @error('harga')is-invalid @enderror" id="inputEmail">

                                        @error('instagram')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">

                                        <img class="" src="{{ asset('storage/' . $data->image) }}" alt=""
                                            width="100px">

                                        <input name="image" value="" type="file"
                                            class="form-control @error('image')is-invalid @enderror mt-3" id="inputText">

                                        <input name="imageLama" value="{{ $data->image }}" type="hidden"
                                            class="form-control" id="inputText">

                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-switch mt-2">
                                            <input name="status" class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault" {{ $data->status == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{ route('teamPage') }}" class="btn btn-dark">Back</a>
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
