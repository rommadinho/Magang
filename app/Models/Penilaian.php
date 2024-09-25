<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaians';
    protected $primaryKey = 'karyawan_id';

    // Tambahkan kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nilai',
        'nama_karyawan', // Tambahkan ini
    ];
    

    // Relasi dengan tabel karyawan
    public function karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class, 'id');
    }
}
