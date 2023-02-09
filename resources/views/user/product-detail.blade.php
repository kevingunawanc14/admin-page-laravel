@dd($dataDetail)

@extends('template.template')

@section('content')

<main id="main" class="main">
<div class="row row-cols-1 row-cols-md-2 g-4">

    {{-- <p>xxx</p> --}}
      {{-- <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="/posts/{{ $namaProduk["nama"] }}"> {{ $namaProduk["nama"] }} </a></h5>
            <p class="card-text">abcde</p>
          </div>
        </div>
      </div> --}}
  


</div>

<a href="/user/product">Back</a>
</main><!-- End #main -->



@endsection