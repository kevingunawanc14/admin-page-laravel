{{-- @dd($produk);  --}}

@extends('template.template')

@section('content')
<style>
    .backgroundBaris{
        background-color:#F2F6FC !important;
    }
</style>
<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Inbox</h5>

            <div class="mb-2">
                {{-- <a data-bs-toggle="tooltip" data-bs-placement="top" title="Add" href="{{ route('addInboxPage') }}" type="button" class="btn btn-success"><i class="ri-add-circle-line"></i></a> --}}
            </div>

            <!-- Default Table -->
            <table id="example" class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        {{-- <th scope="col">Status</th> --}}
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1 @endphp
                    @foreach ($inbox as $data)

                    <tr class="{{ $data->status == '1' ? '' : 'backgroundBaris' }}">
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->pesan }}</td>
                        {{-- <td>{{ $data->status == '1' ? 'Aktif' : 'Non-aktif' }}</td> --}}
                        <td>
                            {{-- <a data-bs-toggle="tooltip" data-bs-placement="top" title="Update" href="{{ route('updateInboxPage', $data->id) }}" type="button" class="btn btn-secondary"><i class="ri-settings-5-line"></i></a> --}}
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Update" href="" onclick="updateAndNavigate({{ $data->id }})" type="button" class="btn btn-secondary"><i class="ri-settings-5-line"></i></a>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="{{ route('deleteInbox', $data->id) }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" type="button" class="btn btn-danger"><i class="ri-delete-bin-5-line"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->

        </div>
    </div>


</main><!-- End #main -->
@endsection


@section('js')
<script>
    function updateAndNavigate(id) {
        // send an AJAX request to update the status
        $.ajax({
            url: '{{ route('updateInboxStatus', ':id') }}'.replace(':id', id),
            type: 'GET',
            success: function(response) {
                console.log(response)
                // check if status was updated successfully
                if (response.status == 'success') {
                    // navigate to the update page
                    window.location.href = "{{ route('updateInboxPage', ':id') }}".replace(':id', id);
                } else {
                    alert('Failed to update status');
                }
            },
            error: function() {
                alert('Failed to update status*');
            }
        });
    }
</script>
@endsection
