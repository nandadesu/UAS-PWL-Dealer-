<?php

namespace App\Controllers;

use App\Models\Mobil;
use App\Models\Pesanan;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Api extends Controller
{
    use ResponseTrait;
    public function listMobil($id = false)
    {
        $mobil = new Mobil();
        if ($id == false) {
            $query = $mobil->listAll();
            
        } else {
            $query = $mobil->listAll($id);
        }
        return $this->respond([
            "status" => 200,
            "data" => $query
        ]);
    }
    public function tambahPesanan()
    {
        $pesanan = new Pesanan();
        $namalengkap = $this->request->getVar("nama_lengkap");
        $no_hp = $this->request->getVar("no_hp");
        $metode = $this->request->getVar("metode_pembayaran");
        $alamat = $this->request->getVar("alamat");
        $ktp = $this->request->getVar("ktp");
        $kartukredit = $this->request->getVar("kartu_kredit");
        $mobil = $this->request->getVar("mobil_id");

        $create = $pesanan->addPesanan($mobil, $namalengkap, $no_hp, $alamat, $ktp, $metode, $kartukredit);

        return $this->respond([
            "status" => 200,
            "data" => $create
        ]);
    }
    public function getPesanan($kode = false)
    {
        $mobil = new Pesanan();
        
        $query = $mobil->listAll();
        
        return $this->respond([
            "status" => 200,
            "data" => $query
        ]);
        // return $query;
    }
    public function getPesananFromKode($kode)
    {
        $mobil = new Pesanan();
        
        $query = $mobil->listAllFromKode($kode);
        
        return $this->respond([
            "status" => 200,
            "data" => $query
        ]);
        // return $query;
    }
}
