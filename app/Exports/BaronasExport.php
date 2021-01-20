<?php

namespace App\Exports;

use App\Baronas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BaronasExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //


        return Baronas::all();
    }



    public function headings(): array
    {
        return [

            "id",
            "no_pendaftaran",
            "email",
            "kategori",
            "nama_tim",
            "nama_ketua",
            "nama_anggota",
            "nama_anggotadua",
            "sekolah",
            "alamat_sekolah",
            "nama_pembina",
            "nomor_hp",
            "region",
            "pembayaran_bank",
            "pembayaran_atas_nama",
            "pembayaran_status",
            "pembayaran_bukti",
            "judul_file",
            "deskripsi_file",
            "link_file",
            "file_ktp_ketua",
            "file_ktp_anggota",
            "file_ktp_anggotadua",
            "created_at",
            "updated_at",

        ];
    }

}
