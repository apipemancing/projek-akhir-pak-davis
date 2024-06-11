<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'gender',
        'umur',
        'asal',
        'tempat_tinggal',
        'tanggal_lahir',
        'nama_orang_tua',
        'asal_sekolah',
        'alasan',
    ];
}
