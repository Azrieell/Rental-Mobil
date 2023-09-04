<?php

namespace App\Http\Controllers;

use App\Models\Tb_cars;
use Illuminate\Http\Request;

class TbCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $mobil = Tb_cars::all();
        return view('admin.mobil.index', compact('mobil'));
    }

    public function detailmobil($id){
        $mobilid = Tb_cars::findOrFail($id);
        return view('detail', compact('mobilid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new Tb_cars;
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->harga_sewa_perhari = $request->harga_sewa_perhari;
        $mobil->status_sewa = 'Tersedia';
        $mobil->deskripsi = $request -> deskripsi;
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect('admin/mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tb_cars  $tb_cars
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_cars $tb_cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tb_cars  $tb_cars
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $mobil = Tb_cars::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tb_cars  $tb_cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tb_cars $tb_cars,$id)
    {
        $mobil = Tb_cars::findOrFail($id);
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->harga_sewa_perhari = $request->harga_sewa_perhari;
        $mobil->status_sewa = 'Tersedia';
        $mobil->deskripsi = $request->deskripsi;
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/beautycase/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect('admin/mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tb_cars  $tb_cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tb_cars $tb_cars)
    {
        //
    }
}
