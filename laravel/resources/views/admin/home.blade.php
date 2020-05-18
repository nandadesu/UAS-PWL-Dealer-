@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Pesanan</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Mobil</th>
                                <th>Nama Pemesan</th>
                                <th>Harga</th>
                                <th>Metode Pembayaran</th>
                                <th>Kode Pesanan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Toyota X AE 12 2017</td>
                                <td>Mamank Sudadank</td>
                                <td>Rp XX.XXX,XX</td>
                                <td>BCA</td>
                                <td>696969696969</td>
                                <td class="text-center"><a href="#" class="btn btn-success mr-2">Proses</a><a href="#" class="btn btn-danger">Hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
