<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

//class DokterModel extends Model
//{
    //use HasFactory;

    //protected $table = 'dokter';
    //protected $primaryKey = 'id_dokter';
    //protected $fillable = [
        'kode_dokter',
        'nama_dokter',
        'spesialisasi',
        'no_telepon',
        'jenis_kelamin',
    //];

    //public function pemeriksaan(): HasMany
    //{
        //return $this->hasMany(PemeriksaanModel::class);
    //}
//}
