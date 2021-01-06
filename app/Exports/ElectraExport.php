<?php

namespace App\Exports;

use App\Electra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ElectraExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Electra::all();
    }
    
    public function headings(): array
    {
        return [
            
            "id",
            "no_pendaftaran",
            "email",
            "nama_tim",
            "nama_ketua",
            "kelas_ketua",
            "nama_anggota",
            "kelas_anggota",
            "sekolah",
            "alamat_sekolah",
            "nomor_hp",
            "region",
            "pembayaran_bank",
            "pembayaran_atas_nama",
            "pembayaran_status",
            "pembayaran_bukti",
            "file_ktp_ketua",
            "file_ktp_anggota",
            "created_at",
            "updated_at",

        ];
    }
}
