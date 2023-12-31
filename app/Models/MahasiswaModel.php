<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
  protected $table      = 'mahasiswa';
  protected $primaryKey = 'id';
  // protected $fields = ["nama", "npm", "prodi"];
  protected $protectFields = false;


  // Dates
  protected $useTimestamps = true;

  public function getAllMahasiswa()
  {
    return $this->findAll();
  }

  public function createMahasiswa($data)
  {
    return $this->insert($data);
  }
}
