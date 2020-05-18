@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="text-center my-3">
        <a href="#" class="btn btn-primary mx-2">Fiat</a>
        <a href="#" class="btn btn-primary mx-2">Kijang</a>
        <a href="#" class="btn btn-primary mx-2">Toyota</a>
    </div> --}}
    <div class="row row-cols-3">
        @foreach($mobil as $item)
        <div class="col p-2">
            <div class="card">
                <img src="{{env("CODEIGNITER_ADDRESS") . $item->img}}"  loading="lazy" class="card-img-top" alt="...">
                <div class="card-body">
                    {{$item->nama_mobil}}
                </div>
                <div class="card-footer">
                    <a href="{{route("mobil.index", ["id" => $item->id])}}" class="btn btn-primary">Info</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
