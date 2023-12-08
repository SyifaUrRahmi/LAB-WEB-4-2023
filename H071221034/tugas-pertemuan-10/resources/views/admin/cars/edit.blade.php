@extends('layouts/admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Ubah Data
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/cars', $cars->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama Mobil</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama', $cars->nama) }}" placeholder="Masukkan nama mobil">
                </div>
                <div class="form-group">
                    <label for="plat_mobil">Plat Mobil</label>
                    <input type="text" class="form-control" name="plat_mobil" value="{{ old('plat_mobil', $cars->plat_mobil) }}" placeholder="Masukkan plat mobil">
                </div>
                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa</label>
                    <input type="number" class="form-control" name="harga_sewa" value="{{ old('harga_sewa', $cars->harga_sewa) }}" placeholder="Masukkan harga sewa (/hari)">
                </div>
                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar</label>
                    <input type="text" class="form-control" name="bahan_bakar" value="{{ old('bahan_bakar', $cars->bahan_bakar) }}" placeholder="Masukkan jenis bahan bakar">
                </div>
                <div class="form-group">
                    <label for="jumlah_kursi">Jumlah Kursi</label>
                    <input type="number" class="form-control" name="jumlah_kursi" value="{{ old('jumlah_kursi', $cars->jumlah_kursi) }}" placeholder="Masukkan jumlah kursi">
                </div>
                <div class="form-group">
                    <label for="transmisi">Transmisi</label>
                    <select class="form-control" name="transmisi" id="transmisi">
                        <option {{ $cars->transmisi == 'manual' ? 'selected' : null }} value="manual">Manual</option>
                        <option {{ $cars->transmisi == 'matic' ? 'selected' : null }} value="matic">Matic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option {{ $cars->status == 'available' ? 'selected' : null }} value="available">Available</option>
                        <option {{ $cars->status == 'booked' ? 'selected' : null }} value="booked">Booked</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5">{{ old('deskripsi', $cars->deskripsi) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="p3k">p3k</label>
                    <select class="form-control" name="p3k" id="p3k">
                        <option {{ $cars->p3k === 1 ? 'selected' : null }} value="1">Available</option>
                        <option {{ $cars->p3k === 0 ? 'selected' : null }} value="0">Not Available</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="audio">audio</label>
                    <select class="form-control" name="audio" id="audio">
                        <option {{ $cars->audio === 1 ? 'selected' : null }} value="1">Available</option>
                        <option {{ $cars->audio === 0 ? 'selected' : null }} value="0">Not Available</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="charger">charger</label>
                    <select class="form-control" name="charger" id="charger">
                        <option {{ $cars->charger === 1 ? 'selected' : null }} value="1">Available</option>
                        <option {{ $cars->charger === 0 ? 'selected' : null }} value="0">Not Available</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ac">ac</label>
                    <select class="form-control" name="ac" id="ac">
                        <option {{ $cars->ac === 1 ? 'selected' : null }} value="1">Available</option>
                        <option {{ $cars->ac === 0 ? 'selected' : null }} value="0">Not Available</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="form-group">
                        <img src="{{ Storage::url($cars->gambar) }}" width="300" alt="Car's Picture">
                    </div>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection