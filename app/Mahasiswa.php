<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama','nim'];
    public function saveMhs($data)
    {
        $this->nama = $data['nama'];
        $this->nim = $data['nim'];
        $this->save();
        return 1;
    }
}
