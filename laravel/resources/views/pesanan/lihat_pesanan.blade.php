@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Konfirmasi Pemesanan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">Nama Pemesan</div>
                        <div class="col-9">{{$pesanan->nama_pemesan}}</div>
                    </div>
                    <div class="row">
                        <div class="col-3">Nomor HP</div>
                        <div class="col-9">{{$pesanan->no_hp}}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-3">Alamat</div>
                        <div class="col-9">{{$pesanan->alamat}}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-3">Metode Pembayaran</div>
                        <div class="col-9">{{$pesanan->metode}}</div>
                    </div>

                    <div class="row">
                        <div class="col-3">Konfirmasi</div>
                        <div class="col-9"><b>Belum Terkonfirmasi</b></div>
                    </div>

                    <hr />
                    <div class="row">
                        <div class="col-3">Mobil</div>
                        <div class="col-9">{{$mobil->nama_mobil}}</div>
                    </div>
                    <div class="row">
                        <div class="col-3">Warna</div>
                        <div class="col-9">{{$mobil->warna}}</div>
                    </div>
                    <div class="row">
                        <div class="col-3">Bahan Bakar</div>
                        <div class="col-9">{{$mobil->bahan_bakar}}</div>
                    </div>
                    <div class="row">
                        <div class="col-3">Transmisi</div>
                        <div class="col-9">{{$mobil->transmisi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-3">Lokasi</div>
                        <div class="col-9">{{$mobil->lokasi}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection