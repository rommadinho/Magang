<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'telepon',
        'alamat',
        'jabatan_id',
        'departemen_id'
    ];

    public function jabatan() : BelongsTo
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function departemen() : BelongsTo
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }

    public function absensi(): HasMany
    {
        return $this->hasMany(Absensi::class);
    }
}
