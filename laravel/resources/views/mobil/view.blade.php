@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-8 py-4">
            <div class="card">
                <div class="card-body">
                    <img style="max-width: 650px" src="{{env("CODEIGNITER_ADDRESS") . $mobil->img}}" alt="">
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>Detail</h3>
                    <div class="row">
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    {{$mobil->merek}}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Warna
                                </div>
                                <div class="col-6">
                                    {{$mobil->warna}}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Model
                                </div>
                                <div class="col-6">
                                    {{$mobil->nama_mobil}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col-6">
                                    Tahun
                                </div>
                                <div class="col-6">
                                    {{$mobil->tahun_mobil}}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Tipe Bahan Bakar
                                </div>
                                <div class="col-6">
                                    {{$mobil->bahan_bakar}}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Transmisi
                                </div>
                                <div class="col-6">
                                    {{$mobil->transmisi}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>Deskripsi</h3>
                    <p>{!!nl2br($mobil->deskripsi)!!}</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="position: sticky; top: 4.9rem" >
                <div class="card-body">
                    <h3>Rp {{$mobil->harga}}</h3>
                    <span class="text-muted">{{$mobil->tahun_mobil}}</span><br/>
                    <span>{{$mobil->nama_mobil}} {{$mobil->tahun_mobil}}</span><br/>
                    <div class="mt-5">
                        <span class="lokasi float-left">{{$mobil->lokasi}}</span>
                        {{-- <span class="lokasi float-right">Apr 5 2000</span> --}}
                    </div>
                    <a href="{{route("mobil.pesan", ['id' => $mobil->id])}}" class="btn btn-primary mt-3 w-100">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
