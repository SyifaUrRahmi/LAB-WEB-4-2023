@extends('layout/template')

@section('index')
<div class="p-5 rounded shadow-sm" style="margin-top: 20px; background-color: #71AC9A">
    <div class="pb-2">
        <h2 class="fw-bold">Data</h2>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>

            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td> 
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>
                    <a href='{{ url('index/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline" action="{{ url('index/'.$item->nim) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>

            <?php $i++?>
            @endforeach
        </tbody> 
    </table>

    {{ $data->links() }}
</div>
@endsection