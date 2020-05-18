<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected function ambil_post($alamat, $data)
    {
        $client = new Client();
        $res = $client->request('POST', $alamat, [
            'form_params' => $data
        ]);
        if ($res->getStatusCode() == 200) { // 200 OK
            return json_decode($res->getBody()->getContents());
        }
    }
    protected function ambil_get($alamat, $opt = false)
    {
        $client = new Client();
        $res = $client->request('GET', $alamat);
        if ($res->getStatusCode() == 200) { // 200 OK
            return json_decode($res->getBody()->getContents(), $opt);
        }
    }
    public function index()
    {
        $data["mobil"] = $this->ambil_get(env("CODEIGNITER_API_ADDRESS") . "/mobil")->data;
        // dd($data['mobil']);
        return view('welcome', $data);
    }
    public function mobil_index($id)
    {
        $data["mobil"] = $this->ambil_get(env("CODEIGNITER_API_ADDRESS") . "/mobil" . "/" . $id)->data;
        // dd($data['mobil']);
        return view("mobil.view", $data);
    }
    public function mobil_pesan($id)
    {
        // $data["mobil"] = $this->ambil_get(env("CODEIGNITER_API_ADDRESS") . "/mobil" . "/" . $id)->data;
        $data['id'] = $id;
        // dd($data['mobil']);
        return view("pesanan.tambah_pesanan", $data);
    }
    public function proses_pesan(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "nama_lengkap" => "required",
            "no_hp" => "required",
            "kartu_kredit" => "required|integer",
            "ktp" => "required",
            "metode_pembayaran" => "required",
            "alamat" => "required"
        ]);
        $datajson = [
            "nama_lengkap" => $request->nama_lengkap,
            "no_hp" => $request->no_hp,
            "kartu_kredit" => $request->kartu_kredit,
            "ktp" => $request->ktp,
            "metode_pembayaran" => $request->metode_pembayaran,
            "alamat" => $request->alamat,
            "mobil_id" => $id
        ];
        $datafetch = $this->ambil_post(env("CODEIGNITER_API_ADDRESS") . "/tambahpesanan", $datajson)->data;
        $data["pesanan"] = $datafetch;
        // dd($data);
        return view("pesanan.success_pesanan", $data);
    }
    public function pesanan_index($kode)
    {
        $data["pesanan"] = $this->ambil_get(env("CODEIGNITER_API_ADDRESS") . "/pesanan" . "/" . $kode)->data;
        $data["mobil"] = $this->ambil_get(env("CODEIGNITER_API_ADDRESS") . "/mobil" . "/" . $data["pesanan"]->mobil_id)->data;
        // dd($data);
        return view("pesanan.lihat_pesanan", $data);
    }
}
