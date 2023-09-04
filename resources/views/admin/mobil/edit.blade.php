@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
      <h3>Mobil</h3>
      <br>
      <div class="card">
        <div class="card-header">
          Edit Mobil
        </div>
        <div class="card-body">
          <form action="{{route('mobil.update', $mobil->id)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="">Upload Gambar</label>
                <input type="file" class="form-control" value="{{$mobil->gambar}}" name="gambar">
            </div>
            <div class="form-group">
                <label for="">Merk</label>
                <input type="text" class="form-control" value="{{$mobil->merk}}" name="merk">
            </div>
            <div class="form-group">
                <label for="">Model</label>
                <input type="text" class="form-control" value="{{$mobil->model}}" name="model">
            </div>
            <div class="form-group">
                <label for="">Nomor Plat</label>
                <input type="text" class="form-control" value="{{$mobil->nomor_plat}}" name="nomor_plat">
            </div>
            <div class="form-group">
                <label for="">Harga Sewa Perhari</label>
                <input type="text" class="form-control" value="{{$mobil->harga_sewa_perhari}}" name="harga_sewa_perhari">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea class="form-control" rows="3" value="" name="deskripsi">{{$mobil-> deskripsi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">kirim</button>
        </form>
        </div>
      </div>
    </div>
@endsection