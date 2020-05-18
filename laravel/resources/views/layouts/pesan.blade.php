@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Jadwal
                    {{-- <a href="#" class="btn btn-success float-right">Tambah User</a> --}}
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old("nama_lengkap") ?? ""}}" class="form-control @error('nama_lengkap') is-invalid @enderror" />
                            @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" id="no_hp" value="{{ old("no_hp") ?? ""}}" class="form-control @error('no_hp') is-invalid @enderror" />
                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="{{ old("alamat") ?? ""}}" class="form-control @error('alamat') is-invalid @enderror" />
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ktp">KTP</label>
                            <div class="row"  id="ktp">
                                <div class="col">
                                    <input type="text" name="ktp"  value="{{ old("ktp") ?? ""}}"  class="form-control @error('ktp') is-invalid @enderror" />
                                    @error("ktp")
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="metode_pembayaran">Metode Pembayaran</label>
                            <select class="custom-select @error('metode_pembayaran') is-invalid @enderror" name="metode_pembayaran" id="metode_pembayaran">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="BCA">BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="CimbNiaga">CimbNiaga</option>
                            </select>
                            {{-- <input type="text" name="metode_pembayaran" id="metode_pembayaran" value="{{ old("metode_pembayaran") ?? ""}}" class="form-control @error('hari') is-invalid @enderror" /> --}}
                            @error('metode_pembayaran')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kartu_kredit">Kartu Kredit</label>
                            <div class="kartu_kredit"  id="kartu_kredit">
                                <div class="col">
                                    <input type="text" name="kartu_kredit"  value="{{ old("kartu_kredit") ?? ""}}"  class="form-control @error('kartu_kredit') is-invalid @enderror" />
                                    @error("kartu_kredit")
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <a href="{{route("admin.jadwal")}}"  class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")

@endsection
