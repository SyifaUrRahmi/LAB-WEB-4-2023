@extends('layouts/admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Cars List</h3>
             <a href="{{ url('admin/cars/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Gambar Mobil</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($cars as $car)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $car->nama }}</td>
                                <td>
                                    <img src="{{ Storage::url($car->gambar) }}" width="200" alt="Car's pict">
                                </td>
                                <td>{{ $car->harga_sewa }}</td>
                                <td>{{ $car->status }}</td>
                                <td>
                                    <a href="{{ url('admin/cars/'.$car->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
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
    </div>
@endsection