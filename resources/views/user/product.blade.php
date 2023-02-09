
{{-- @dd($nama) --}}

@extends('template.template')

@section('content')

<main id="main" class="main">
<div class="row row-cols-1 row-cols-md-2 g-4">

    @foreach ($nama as $namaProduk)
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="product/{{ $namaProduk["nama"] }}"> {{ $namaProduk["nama"] }} </a></h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    @endforeach


</div>
</main><!-- End #main -->

@endsection




@section('addjs')
<script>
  // alert("test view")
</script>
@endsection
