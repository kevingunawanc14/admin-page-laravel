@extends('template.template')

@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Inbox Form</h5>

                            <!-- Horizontal Form -->
                            <form method="post" action="{{ route('updateInbox') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
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
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" value="{{ $data->email }}" type="text"
                                            class="form-control @error('nama')is-invalid @enderror" id="inputEmail">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pesan</label>
                                    <div class="col-sm-10">
                                        <input name="pesan" value="{{ $data->pesan }}" type="text"
                                            class="form-control @error('email')is-invalid @enderror" id="inputText">
                    
                                        @error('pesan')
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
                                    <a href="{{ route('inboxPage') }}" class="btn btn-dark">Back</a>
                                </div>
                            </form><!-- End Horizontal Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <script>
        // @if (Session::has('berhasil'))
        //     toastr.options = {
        //         "closeButton": true,
        //         "progressBar": true
        //     }
        //     toastr.succes("{{ session('berhasil') }}")
        // @endif
    </script>
@endsection
