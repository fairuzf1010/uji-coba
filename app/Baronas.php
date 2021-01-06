<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baronas extends Model
{
    //
    protected $fillable = [
        'no_pendaftaran', 'email', 'nama_tim', 'kategori', 'nama_ketua' , 'nama_anggota' , 'sekolah', 'alamat_sekolah', 'nama_pembina', 'nomor_hp'
        , 'region', 'pembayaran_bank', 'pembayaran_atas_nama', 'pembayaran_status', 'pembayaran_bukti', 'file_ktp_ketua', 'file_ktp_anggota',
    ];
}
