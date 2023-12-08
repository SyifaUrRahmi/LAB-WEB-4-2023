@extends('layouts/admin')

@section('content-driver')
    {{-- <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Drivers List</h3>
             <a href="{{ url('admin/drivers/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Driver</th>
                            <th>Foto</th>
                            <th>Foto SIM</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($drivers as $driver)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $driver->nama_driver }}</td>
                                <td>
                                    <img src="{{ Storage::url($driver->gambar_driver) }}" width="200" alt="Driver's pict">
                                </td>
                                <td>{{ $driver->gambar_sim }}</td>
                                <td>{{ $driver->status }}</td>
                                <td>
                                    <a href="{{ url('admin/drivers/'.$driver->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline" action="{{ url('admin/cars/'.$car->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Drivers List</h3>
        </div>
    </div>
@endsection