@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Pemesanan
                </div>
                <div class="card-body text-center">
                    <h3>Pemesanan Telah Selesai</h3>
                    <p>Kami akan memproses pemesanan anda</p>
                    <p>Simpan link dibawah ini untuk melihat konfirmasi pemesanan anda</p>
                    <a href="{{route("mobil.profil_pesanan", ["kode" => $pesanan->kode_pesanan])}}" class="btn btn-primary">Lihat Status Konfirmasi Pemesanan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection