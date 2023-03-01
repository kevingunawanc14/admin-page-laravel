@extends('template.template')

@section('content')



    <main id="main" class="main">

        {{-- <h1>Create Post</h1> --}}

        {{-- @if ($errors->get('email'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('email') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <div class="pagetitle">
            {{-- <h1>Add User Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Add</a></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav> --}}
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add User Form</h5>

                            <!-- Horizontal Form -->
                            <form method="post" action="{{ route('addUser') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input name="username" type="text" class="form-control  @error('username')is-invalid @enderror " id="inputText">
                                        {{-- @if ($errors->get('username'))
                                            @foreach ($errors->get('username') as $error)
                                                <p class="alert alert-danger mt-1">{{ $error }}</p>
                                            @endforeach
                                        @endif --}}
                                        @error("username")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input name="nama" type="text" class="form-control  @error('nama')is-invalid @enderror " id="inputEmail">
                                        {{-- @if ($errors->get('nama'))
                                            @foreach ($errors->get('nama') as $error)
                                                <p class="alert alert-danger mt-1">{{ $error }}</p>
                                            @endforeach
                                        @endif --}}
                                        @error("nama")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" type="text" class="form-control @error('email')is-invalid @enderror" id="inputText">
                                        {{-- @if ($errors->get('email'))
                                            @foreach ($errors->get('email') as $error)
                                                <p class="alert alert-danger mt-1">{{ $error }}</p>
                                            @endforeach
                                        @endif --}}
                                        @error("email")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input name="alamat" type="text" class="form-control @error('alamat')is-invalid @enderror" id="inputText">
                                        {{-- @if ($errors->get('alamat'))
                                            @foreach ($errors->get('alamat') as $error)
                                                <p class="alert alert-danger mt-1">{{ $error }}</p>
                                            @endforeach
                                        @endif --}}
                                        @error("alamat")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input name="password" type="text" class="form-control @error('password')is-invalid @enderror" id="inputText">
                                        {{-- @if ($errors->get('password'))
                                            @foreach ($errors->get('password') as $error)
                                                <p class="alert alert-danger mt-1">{{ $error }}</p>
                                            @endforeach
                                        @endif --}}
                                        @error("password")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-switch mt-2">
                                            <input name="status" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                        {{-- <input name="status" type="text" class="form-control" id="inputText"> --}}
                                        {{-- @if ($errors->get('status'))
                                            @foreach ($errors->get('status') as $error)
                                                <p class="alert alert-danger mt-1">{{ $error }}</p>
                                            @endforeach
                                        @endif --}}
                                        {{-- @error("status")
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="{{ route('usersPage') }}" class="btn btn-dark">Back</a>
                                </div>
                            </form><!-- End Horizontal Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
