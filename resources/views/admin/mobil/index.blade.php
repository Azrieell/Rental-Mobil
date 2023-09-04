@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
      mobil
    </div>
    <div class="card">
      <div class="card-body">
        <a href="{{route('mobil.create')}}" class="btn btn-primary">Tambah Mobil</a>
        <table class="table">
          <thead>
            <tr>
              <th>NO</th>
              <th>Gambar</th>
              <th>Merek</th>
              <th>Model</th>
              <th>No Plat</th>
              <th>Status</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
            $no = 1;
            @endphp
            

            @foreach ($mobil as $item)
            <tr>
              <td>{{$no++}}</td>
              <td><img src="{{$item->gambar()}}" style="height: 50px;"></td>
              <td>{{$item->merk}}</td>
              <td>{{$item->model}}</td>
              <td>{{$item->nomor_plat}}</td>

              <td>

                @if ($item->status_sewa == 'Tersedia')
                <div class="bg-succes rounded ">Tersedia</div>
                  @else 
                  <div class="bg-danger rounded">disewa</div>
                @endif

              </td>
              <td>Rp. {{$item->harga_sewa_perhari}}</td>
              <td>
                <form action="" method="post">
                  @method('delete')
                  @csrf
                  <a href="{{route('mobil.edit', $item->id)}}" class="btn btn-sm btn-info">Edit</a>
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Menghapus?')">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection