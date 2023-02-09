{{-- @dd($data2,$data1) --}}
{{-- @dd($data1) --}}



@extends('layouts.parent_a')

@section('a')

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

        @foreach($data2 as $x)
                
                    <tbody>
                    <tr>
                        <th scope="row">{{ $x['angka'] }}</th>
                        <td>{{ $x['nama'] }}</td>
                        <td>{{ $x['angka']+10 }}</td>
                        <td>Delete</td>
                    </tr>
                    </tbody>
               
        @endforeach

            </table>
                <!-- End Default Table Example -->
            </div>
            </div>

        </div>
</section>  
</main>

@endsection