
{{-- @dd($user) --}}

@extends('template.template')

@section('content')

<main id="main" class="main">
    
  <p>test</p>
  @foreach($user as $data) 
  <tr>
    <td>{{$data->nama}}</td>
    <td>{{$data->alamat}}</td>

  </tr>
  @endforeach
</main><!-- End #main -->

@endsection'


