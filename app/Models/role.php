<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable = [
        'nama', 'telepon', 'alamat', 'jabatan_id', 'departemen_id', 'role'
    ];
    
    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isKaryawan() {
        return $this->role === 'karyawan';
    }
}
