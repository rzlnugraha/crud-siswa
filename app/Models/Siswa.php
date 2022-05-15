<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Model
{
    use HasApiTokens, HasFactory;

    // protected $guarded = ['kolom_1', kolom2, dst]; // kolom yang di array ga akan masuk ke db
    protected $fillable = ['nisn', 'nama_siswa', 'jenis_kelamin', 'alamat', 'sekolah_id']; // kolom yang di array masuk ke db

    /**
     * Get the sekolah that owns the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id');
    }

    public function getJenisKelaminAttribute()
    {
        if ($this->attributes['jenis_kelamin'] == 'M') return 'Laki Laki';

        return 'Perempuan';
    }
}
