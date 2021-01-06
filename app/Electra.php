<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electra extends Model
{
    //
    protected $fillable = [
        'no_pendaftaran', 'email', 'nama_tim', 'nama_ketua', 'kelas_ketua', 'nama_anggota', 'kelas_anggota', 'sekolah', 'alamat_sekolah', 'nomor_hp'
        , 'region', 'pembayaran_bank', 'pembayaran_atas_nama', 'pembayaran_status', 'pembayaran_bukti', 'file_ktp_ketua', 'file_ktp_anggota',
    ];
}
