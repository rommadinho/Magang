<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penggajian extends Model
{
    use HasFactory;

    protected $table = 'penggajians';

    // Menambahkan kolom yang bisa diisi melalui mass assignment
    protected $fillable = [
        'nama_karyawan',
        'gaji_pokok',
        'tunjangan',
        'potongan',
        'total_gaji',
    ];
    public function karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class,'id');
    }
}
