<?php

namespace App\Models;

use CodeIgniter\Model;

class Pesanan extends Model
{
    protected $table = "pesanan";
    protected function generate_string($input, $strength = 16)
    {
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }
    public function addPesanan($mobil, $namapemesan, $no_hp, $alamat, $ktp, $metode, $kartukredit)
    {
        $query = $this->db->table($this->table)->insert([
            "mobil_id" => $mobil,
            "kode_pesanan" => ucwords($this->generate_string("uiwefisdfksauhdfiw421445j23hj45234532jh45jh23", 10)),
            "nama_pemesan" => $namapemesan,
            "no_hp" => $no_hp,
            "alamat" => $alamat,
            "ktp" => $ktp,
            "metode" => $metode,
            "kartu_kredit" =>  $kartukredit
        ]);
        return $this->db->table("pesanan")->getWhere(["id" => $this->db->insertID()])->getRow();
        // return $this->listAll($this->db->insertID());
    }
    public function listAll($id = false)
    {
        if ($id == false) {
        $query = $this->db->table("pesanan")->get()->getResultArray();
        } else {
        $query = $this->db->table("pesanan")->getWhere(["id" => $id])->getRow();
        }
        return $query;
    }
    public function listAllFromKode($kode)
    {
        $query = $this->db->table("pesanan")->getWhere(["kode_pesanan" => $kode])->getRow();
        return $query;
    }
}
