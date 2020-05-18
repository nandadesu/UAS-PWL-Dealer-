<?php

namespace App\Models;

use CodeIgniter\Model;

class Mobil extends Model
{
    public function listAll($id = false)
    {
        if ($id == false) {
        $query = $this->db->table("mobil")->get()->getResultArray();
        } else {
        $query = $this->db->table("mobil")->getWhere(["id" => $id])->getRow();
        }
        return $query;
    }
}
