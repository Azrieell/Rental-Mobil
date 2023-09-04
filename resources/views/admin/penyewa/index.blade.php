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
                    <th>Nama</th>
                    <th>Sim</th>
                    <th>Email</th>
                    <th>Nomor Telphone</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($sewan as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->user->alamat}}</td>
                    <td>{{$item->user->sim}}</td>
                    <td>{{$item->user->email}}</td>
                    <td>{{$item->user->nomor}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
