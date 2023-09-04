<?php

namespace App\Http\Controllers;

use App\Models\Tb_cars;
use App\Models\Tb_penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TbPenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewan = Tb_penyewa::all();
        return view ('admin.penyewa.index', compact('sewan'));
    }
    public function sewa($id, Request $request){


        // $userId = auth()->check() ? auth()->id() : null ;

        if( auth()->check() == null){
            return redirect('/login');
    }else{

        $mobilid = Tb_cars::find($id);
        $hargamobil = $mobilid->harga_sewa_perhari;
        $sewas = Tb_penyewa::find($id);
        $sewa = new  Tb_penyewa;
        $sewa->id_user = Auth::user()->id;
        $sewa->id_mobil = $id;
        $sewa->tanggal_mulai = $request->tanggal_mulai;
        $sewa->tanggal_selesai = $request->tanggal_selesai;
        $sewa->lama_sewa = $request->lama_sewa;
        $sewa->total_harga = $hargamobil * $sewa->lama_sewa; 
        $sewa->save();

        $mobil = Tb_cars::find($id);
        $mobil ->status_sewa="sedang disewa";
        $mobil ->save();
        return redirect()->back();
    }
}
public function mobilyangsedangdisewa(){
    $sewa = Tb_penyewa::all();
    $user = Auth::user()->id;
    return view('mobilsewa' , compact('sewa','user'));
}

public function kembalikanmobil($id,Request $request){
    $id_mobil = $request-> id_mobil;
    $mobil = Tb_cars::find($id_mobil);
    $plat = $request->nomor_plat;
    
    if($mobil->nomor_plat == $plat){
    $mobil = Tb_cars::find($id_mobil);
    $mobil->status_sewa = "Tersedia";
    $mobil->save();

    $sewa = Tb_penyewa::find($id);
    $sewa->status_pengembalian = 'Dikembalikan';
    $sewa->save();

    $mobil ->save();
    return redirect()->back();
    }else{
        return "plat nomor tidak ada";
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_penyewa $tb_penyewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tb_penyewa $tb_penyewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tb_penyewa $tb_penyewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tb_penyewa  $tb_penyewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tb_penyewa $tb_penyewa)
    {
        //
    }
}
