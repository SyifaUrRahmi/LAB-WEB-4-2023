<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CarStoreRequest;
use App\Http\Requests\Admin\CarUpdateRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::oldest()->get();
        return view('admin/cars/index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/cars/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarStoreRequest $request)
    {
        if($request->validated()){
            $gambar = $request->file('gambar')->store('assets/car', 'public');
            $slug = Str::slug($request->nama, '-');

            Car::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);
        }

        return redirect()->to('admin/cars')->with([
            'message' =>'Data berhasil ditambahkan',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cars = Car::where('id',$id)->first();
        return view('admin/cars/edit')->with('cars', $cars);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarUpdateRequest $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'plat_mobil' => 'required',
            'harga_sewa' => 'required',
            'bahan_bakar' => 'required',
            'jumlah_kursi' => 'required',
            'transmisi' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'p3k' => 'required',
            'charger' => 'required',
            'audio' => 'required',
            'ac' => 'required',
        ]);

        $cars = Car::find($id);
        if($cars){
            $requestValidated = $request->validated();
            if($request->validated()){
                $slug = Str::slug($request->nama, '-');

                $carsUpdate = [
                    'nama' => $request->nama,
                    'plat_mobil' => $request->plat_mobil,
                    'harga_sewa' => $request->harga_sewa,
                    'bahan_bakar' => $request->bahan_bakar,
                    'jumlah_kursi' => $request->jumlah_kursi,
                    'transmisi' => $request->transmisi,
                    'status' => $request->status,
                    'deskripsi' => $request->deskripsi,
                    'p3k' => $request->p3k,
                    'charger' => $request->charger,
                    'audio' => $request->audio,
                    'ac' => $request->ac,
                ];

                if($request->gambar){
                    if($cars->gambar){
                        unlink('storage/' . $cars->gambar);
                    }

                    $gambar = $request->file('gambar')->store('assets/car', 'public');
                    $carsUpdate['gambar'] = $gambar;
                }

                Car::where('id',$id)->update($carsUpdate + ['slug' => $slug]);
            }
        }    
        
        return redirect()->to('admin/cars')->with([
            'message' =>'Data berhasil diedit',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars = Car::find($id);
        if ($cars->gambar) {
            unlink('storage/' . $cars->gambar);
        }

        Car::where('id', $id)->delete();

        return redirect()->to('admin/cars')->with([
            'message' =>'Data berhasil dihapus',
            'alert-type' => 'success',
        ]);
    }
}
