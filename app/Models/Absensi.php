<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis'; // Nama tabel

    protected $fillable = [
        'id_karyawan',  // Tambahkan ini
        'tanggal',
        'status_kehadiran',
        // tambahkan field lain sesuai dengan struktur tabel absensi
    ];
    public function karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class, 'id');
    }
}
