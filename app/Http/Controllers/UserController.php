<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\User;
use App\Electra;
use App\Baronas;
use App\Linkupload;
use Mail;

use App\Exports\ElectraExport;
use App\Exports\BaronasExport;
use App\Linkbaronas;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function exportElectra()
    {
        return Excel::download(new ElectraExport, 'Electra.xlsx');
    }




    public function exportBaronas()
    {
        return Excel::download(new BaronasExport, 'Baronas.xlsx');
    }






    public function submitBuktiPembayaranElectra(Request $request)
    {

        $uploaded_filename = $request->file_bukti->store('public');
        $uploaded_filename = str_replace("public/", "", $uploaded_filename);
        //$baronas = Baronas::where("email", "=", Auth::user()->email)->first();
        $electra = Electra::where("email", "=", Auth::user()->email)->first();


        $electra->pembayaran_bank       = $request->bank_tujuan;
        $electra->pembayaran_atas_nama  = $request->nama_pengirim;
        $electra->pembayaran_status     = 1; //Sudah disubmit peserta, belum dikonfirmasi oleh admin
        $electra->pembayaran_bukti      = $uploaded_filename;
        $electra->save();

        return redirect('/user/pembayaran-electra');
    }




   public function submitBuktiPembayaranBaronas(Request $request)
    {
       $uploaded_filename = $request->file_bukti->store('public');
        $uploaded_filename = str_replace("public/", "", $uploaded_filename);

        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();

        $baronas->pembayaran_bank       = $request->bank_tujuan;
        $baronas->pembayaran_atas_nama  = $request->nama_pengirim;
       $baronas->pembayaran_status     = 1; //Sudah disubmit peserta, belum dikonfirmasi oleh admin
       $baronas->upload_status     = 1;
        $baronas->pembayaran_bukti      = $uploaded_filename;
       $baronas->save();

       return redirect('/user/pembayaran-baronas');
   }












    public function userPembayaranElectra(Request $request)
    {
        $electra = Electra::where("email", "=", Auth::user()->email)->first();
       // $baronas = Baronas::where("email", "=", Auth::user()->email)->first();

        if ($electra == null)
            $electra = new Electra;

       // }


        return view('user.pembayaran-electra', compact('electra'));
    }





   public function userPembayaranBaronas(Request $request)
   {
        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();

        if ($baronas == null)
            $baronas = new Baronas;

        return view('user.pembayaran-baronas', compact('baronas'));
    }







    public function listElectraKonfirmasi($id)
    {
        $electra = Electra::find($id);

        if ($electra->pembayaran_status == 3)
            $electra->pembayaran_status = 4;
        else if ($electra->pembayaran_status == 1)
            $electra->pembayaran_status = 2;

        $electra->save();

        $data_target = DB::table('electras')->where('id', $id)->first();
        // generate dari menurut region
        $e = 1;
        $region = $data_target->region;
        if ($region == null) {
            $x = 0;
            $y = 0;
            $e = 2;
        } else if ($region == 'Jabodetabek') {
            $x = 1;
            $y = 5;
        } else if ($region == 'Banyuwangi') {
            $x = 1;
            $y = 1;
        } else if ($region == 'Madiun') {
            $x = 0;
            $y = 9;
        } else if ($region == 'Tuban') {
            $x = 0;
            $y = 6;
        } else if ($region == 'Semarang') {
            $x = 1;
            $y = 4;
        } else if ($region == 'Malang') {
            $x = 0;
            $y = 5;
        } else if ($region == 'Surabaya') {
            $x = 0;
            $y = 1;
        } else if ($region == 'Sidoarjo') {
            $x = 0;
            $y = 2;
        } else if ($region == 'Bali') {
            $x = 1;
            $y = 6;
        } else if ($region == 'Gresik') {
            $x = 0;
            $y = 3;
        } else if ($region == 'Balikpapan') {
            $x = 1;
            $y = 7;
        } else if ($region == 'Jember') {
            $x = 1;
            $y = 0;
        } else if ($region == 'Kediri') {
            $x = 0;
            $y = 8;
        } else if ($region == 'Mojokerto') {
            $x = 0;
            $y = 4;
        } else if ($region == 'Madura') {
            $x = 1;
            $y = 2;
        } else if ($region == 'Probolinggo') {
            $x = 0;
            $y = 7;
        } else if ($region == 'Solo') {
            $x = 1;
            $y = 3;
        }

        // genegrate nomor register berdasarkan id
        $nomor_peserta = $data_target->id;
        $syarat = $nomor_peserta / 10;
        if ($syarat < 1) {
            // 1 sampai 9
            $a = 0;
            $b = 0;
            $c = 0;
            $d = substr($nomor_peserta, 0, 1);
        } else if ($syarat < 10 && $syarat >= 1) {
            // 10 sampai 99
            $a = 0;
            $b = 0;
            $c = substr($nomor_peserta, 0, 1);
            $d = substr($nomor_peserta, 1, 1);
        } else if ($syarat >= 10 && $syarat < 100) {
            // 100 sampai 999
            $a = 0;
            $b = substr($nomor_peserta, 0, 1);
            $c = substr($nomor_peserta, 1, 1);
            $d = substr($nomor_peserta, 2, 1);
        } else if ($syarat >= 100) {
            // 1000 sampai 9999
            $a = substr($nomor_peserta, 0, 1);
            $b = substr($nomor_peserta, 1, 1);
            $c = substr($nomor_peserta, 2, 1);
            $d = substr($nomor_peserta, 3, 1);
        }

        $biaya = '60.000';
        $email = $data_target->email;
        $data = array(
            'nama_tim' => $data_target->nama_tim,
            'nama_ketua' => $data_target->nama_ketua,
            'nama_anggota' => $data_target->nama_anggota,
            'biaya' => $biaya,
            'digit_pertama' => $a,
            'digit_kedua' => $b,
            'digit_ketiga' => $c,
            'digit_keempat' => $d,
            'region_pertama' => $x,
            'region_kedua' => $y,
            'kode_akses' => $e,
        );

        $pdf = \PDF::loadView('dokumen.invoice-layout', $data)->setPaper('a5', 'landscape');

        Mail::send('dokumen.email-layout', $data, function ($message) use ($email, $pdf) {

            $message->to($email, $email)
                ->subject('BUKTI PEMBAYARAN ELECTRA-10 2021')
                ->attachData($pdf->output(), "kuitansi.pdf");
            $message->from('evolutionelektroits@gmail.com');
        });

        // jika gagal
        if (Mail::failures())
            return redirect('/admin/list/electra')->with('email-fail', 'Email gagal dikirim');

        else
            return redirect('/admin/list/electra');
    }






    public function listBaronasKonfirmasi($id)
    {
        $baronas = Baronas::find($id);

        if($baronas->upload_status == 0 && $baronas->kategori=='UMUM') {

        $baronas->upload_status = 1;

    }

        elseif ($baronas->pembayaran_status == 1 && $baronas->kategori!='UMUM') {
            $baronas->pembayaran_status = 2;
            $baronas->upload_status = 2;


        }

        $baronas->save();


        $data_target = DB::table('baronas')->where('id', $id)->first();
        // generate dari menurut region


     //  $kategori = $data_target->kategori;
      //  if($kategori=='umum')
      //{

        //$a =


      // }

        $biaya = '60.000';
        $email = $data_target->email;
        $kategori = $data_target->kategori;
        $y = 1;


        if($kategori=='SD')
        {
            $x = 1;
        }

        elseif($kategori=='SMP')
        {
            $x = 2;
        }

        elseif($kategori=='SMA')
        {
            $x = 3;
        }

        elseif($kategori=='UMUM')
        {
            $x = 4;
        }



        $data = array(
            'nama_tim' => $data_target->nama_tim,
            'nama_ketua' => $data_target->nama_ketua,
            'nama_anggota' => $data_target->nama_anggota,
            'nama_anggotadua' => $data_target->nama_anggotadua,
            'id' => $data_target->id,
            'biaya' => $biaya,
            'kategori'=> $data_target->kategori,
            'digit_pertama' => $x,
            'digit_kedua' => $y,

        );

        $pdf = \PDF::loadView('dokumen.invoice-layout-baronas', $data)->setPaper('a5', 'landscape');

        Mail::send('dokumen.email-layout-baronas', $data, function ($message) use ($email, $pdf) {

            $message->to($email, $email)
               ->subject('BUKTI PEMBAYARAN Baronas-10 2021')
               ->attachData($pdf->output(), "kuitansi.pdf");
           $message->from('evolutionelektroits@gmail.com');
        });

        // jika gagal
       // if (Mail::failures())
         //   return redirect('/admin/list/baronas')->with('email-fail', 'Email gagal dikirim');

      //  else
            return redirect('/admin/list/baronas');
    }




    // public function kartuPeserta()
    // {
    //     $electra = Electra::where("email", "=", Auth::user()->email)->first();
    //     if ($electra == null) {
    //         $data = array(
    //             'status' => -1
    //         );
    //     } else {
    //         $data = array(
    //             'status' => $electra->pembayaran_status
    //         );
    //     }

    //     return view('/user/kartu', $data);
    // }

    // public function unduhKartu()
    // {
    //     ambil data berdasarkan id
    //     $electra = Electra::where("email", "=", Auth::user()->email)->first();
    //     $region = $electra->region;

    //    $e = 1;
    //     if ($region == null) {
    //       $x = 0;
    //        $y = 0;
    //         $e = 2;
    //     } else if ($region == 'Jabodetabek') {
    //         $x = 1;
    //         $y = 5;
    //     } else if ($region == 'Banyuwangi') {
    //         $x = 1;
    //         $y = 1;
    //     } else if ($region == 'Madiun') {
    //         $x = 0;
    //         $y = 9;
    //     } else if ($region == 'Tuban') {
    //         $x = 0;
    //         $y = 6;
    //     } else if ($region == 'Semarang') {
    //         $x = 1;
    //         $y = 4;
    //     } else if ($region == 'Malang') {
    //         $x = 0;
    //         $y = 5;
    //     } else if ($region == 'Surabaya') {
    //         $x = 0;
    //         $y = 1;
    //     } else if ($region == 'Sidoarjo') {
    //         $x = 0;
    //         $y = 2;
    //     } else if ($region == 'Bali') {
    //         $x = 1;
    //         $y = 6;
    //     } else if ($region == 'Gresik') {
    //         $x = 0;
    //         $y = 3;
    //     } else if ($region == 'Balikpapan') {
    //         $x = 1;
    //         $y = 7;
    //     } else if ($region == 'Jember') {
    //         $x = 1;
    //         $y = 0;
    //     } else if ($region == 'Kediri') {
    //         $x = 0;
    //         $y = 8;
    //     } else if ($region == 'Mojokerto') {
    //         $x = 0;
    //         $y = 4;
    //     } else if ($region == 'Madura') {
    //         $x = 1;
    //         $y = 2;
    //     } else if ($region == 'Probolinggo') {
    //         $x = 0;
    //         $y = 7;
    //     } else if ($region == 'Solo') {
    //         $x = 1;
    //         $y = 3;
    //     }

    //     $nomor_peserta = $electra->id;
    //     $syarat = $nomor_peserta / 10;
    //     if ($syarat < 1) {
    //         // 1 sampai 9
    //         $a = 0;
    //         $b = 0;
    //         $c = 0;
    //         $d = substr($nomor_peserta, 0, 1);
    //     } else if ($syarat < 10 && $syarat >= 1) {
    //         // 10 sampai 99
    //         $a = 0;
    //         $b = 0;
    //         $c = substr($nomor_peserta, 0, 1);
    //         $d = substr($nomor_peserta, 1, 1);
    //     } else if ($syarat >= 10 && $syarat < 100) {
    //         // 100 sampai 999
    //         $a = 0;
    //         $b = substr($nomor_peserta, 0, 1);
    //         $c = substr($nomor_peserta, 1, 1);
    //         $d = substr($nomor_peserta, 2, 1);
    //     } else if ($syarat >= 100) {
    //         // 1000 sampai 9999
    //         $a = substr($nomor_peserta, 0, 1);
    //         $b = substr($nomor_peserta, 1, 1);
    //         $c = substr($nomor_peserta, 2, 1);
    //         $d = substr($nomor_peserta, 3, 1);
    //     }

    //     $nomor_peserta_final = $x . $y . '-' . '10' . $a . '-' . $b . $c . $d . '-' . $e;

    //     $data = array(
    //         'nama_ketua' => $electra->nama_ketua,
    //         'nama_anggota' => $electra->nama_anggota,
    //         'nama_tim' => $electra->nama_tim,
    //         'sekolah' => $electra->sekolah,
    //         'nomor_peserta' => $nomor_peserta_final,
    //     );

    //     $pdf = \PDF::loadView('dokumen.kartu-peserta-layout', $data)->setPaper('a5', 'potrait');
    //     return $pdf->download('kartu-peserta.pdf');
    // }

    public function listElectraDelete($id)
    {
        $electra = Electra::find($id);
        $electra->delete();

        $user = User::where("email", "=", $electra->email)->first();
        $user->delete();

        return redirect('/admin/list/electra')->with('success', 'Data peserta telah dihapus');
    }




    public function kartuPesertaBaronas()
    {
        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();
        if ($baronas == null) {
            $data = array(
                'status' => -1
            );
        } else {
            $data = array(
                'status' => $baronas->pembayaran_status,
                'upload' => $baronas->upload_status,
                'kategori' => $baronas->kategori,
            );
        }

        return view('/user/kartu-baronas', $data);
    }

    public function unduhKartuBaronas()
    {
        // ambil data berdasarkan id
        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();




        $kategori = $baronas->kategori;
        $id = $baronas->id;
        $no = 1;
        $nol = 0;


        if($kategori=='SD')
        {
            $x = 1;
        }

        elseif($kategori=='SMP')
        {
            $x = 2;
        }

        elseif($kategori=='SMA')
        {
            $x = 3;
        }

        elseif($kategori=='UMUM')
        {
            $x = 4;
        }


        $nomor_peserta = $nol . 1 . '-' . $nol . $nol . $x . '-' . $nol . $nol . $id;


        $data = array(
            'nama_ketua' => $baronas->nama_ketua,
            'nama_anggota' => $baronas->nama_anggota,
            'nama_anggotadua' => $baronas->nama_anggotadua,
            'nama_tim' => $baronas->nama_tim,
            'kategori'=> $baronas->kategori,
            'nomor_peserta' => $nomor_peserta,
            'sekolah' => $baronas->sekolah,
        );

        $pdf = \PDF::loadView('dokumen.kartu-peserta-layout-baronas', $data)->setPaper('a5', 'potrait');
        return $pdf->download('kartu-peserta-baronas.pdf');
    }






    public function unduhNametagBaronas()
    {
        // ambil data berdasarkan id
        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();




        $kategori = $baronas->kategori;
        $id = $baronas->id;
        $no = 1;
        $nol = 0;







        $data = array(
            'nama_ketua' => $baronas->nama_ketua,
            'nama_anggota' => $baronas->nama_anggota,
            'nama_anggotadua' => $baronas->nama_anggotadua,
            'nama_tim' => $baronas->nama_tim,
            'kategori'=> $baronas->kategori,
            'nomor_hp' => $baronas->nomor_hp,
            'sekolah' => $baronas->sekolah,
        );

        $pdf = \PDF::loadView('dokumen.nametag-robot-baronas', $data)->setPaper('a5', 'potrait');
        return $pdf->download('nametag-baronas.pdf');
    }

































    public function listElectra(Request $request)
    {
        $list_electra = DB::table('electras')->get();
        return view('admin.list-electra', ['list_electra' => $list_electra]);
    }

    public function formElectra(Request $request)
    {
        $electra = Electra::where("email", "=", Auth::user()->email)->first();

        if ($electra == null)
            $electra = new Electra;

        return view('user.form-electra', compact('electra'));
    }


    public function daftarElectra(Request $request)
    {
        $electraDaftar = Electra::where([['email',Auth::user()->email]])->first();

        // Jika tidak ada sebelumnya
        if(!$electraDaftar)
        {
            $daftar = new Electra;
            $daftar->email              = Auth::user()->email;
            $daftar->nama_tim           = $request->nama_tim;
            $daftar->nama_ketua         = $request->nama_ketua;
            $daftar->kelas_ketua        = $request->kelas_ketua;
            $daftar->nama_anggota       = $request->nama_anggota;
            $daftar->kelas_anggota      = $request->kelas_anggota;
            $daftar->sekolah            = $request->sekolah;
            $daftar->alamat_sekolah     = $request->alamat_sekolah;
            $daftar->nomor_hp           = $request->nomor_hp;
            $daftar->pembayaran_status  = 0;
            $daftar->file_ktp_ketua     = $request->file_ktp_ketua->store('public');
            $daftar->file_ktp_anggota   = $request->file_ktp_anggota->store('public');



            $daftar->save();
        }

        return redirect('/user/daftar/electra');
    }




    public function daftarBaronas(Request $request)
    {
        $baronasDaftar = Baronas::where([['email',Auth::user()->email]])->first();


        // Jika tidak ada sebelumnya
        if(!$baronasDaftar)
        {
            $daftar = new Baronas;
            $daftar->email              = Auth::user()->email;
            $daftar->nama_tim           = $request->nama_tim;
            $daftar->kategori           = $request->kategori;
            $daftar->nama_ketua         = $request->nama_ketua;
            //$daftar->kelas_ketua        = $request->kelas_ketua;
            $daftar->nama_anggota       = $request->nama_anggota;
            $daftar->nama_anggotadua       = $request->nama_anggotadua;
            //$daftar->kelas_anggota      = $request->kelas_anggota;
            $daftar->sekolah            = $request->sekolah;
            $daftar->alamat_sekolah     = $request->alamat_sekolah;
            $daftar->nama_pembina       = $request->nama_pembina;
            $daftar->nomor_hp           = $request->nomor_hp;
            $daftar->kecepatan_internet     = $request->kecepatan_internet->store('public');
            $daftar->pembayaran_status  = 0;
            $daftar->upload_status = 0 ;
            $daftar->file_ktp_ketua     = $request->file_ktp_ketua->store('public');
            $daftar->file_ktp_anggota   = $request->file_ktp_anggota->store('public');
            $daftar->file_ktp_anggotadua   = $request->file_ktp_anggotadua->store('public');

            $z = 0;
            $y = 1;
            $kategori = $request->kategori;
            $no_daftar = $request->no_pendaftaran;
            $id = $request->id;

            if($kategori=='SD')
            {
                $x = 1;
            }

            elseif($kategori=='SMP')
            {
                $x = 2;
            }

            elseif($kategori=='SMA')
            {
                $x = 3;
            }

            elseif($kategori=='UMUM')
            {
                $x = 4;
            }

            $no_daftar = $z . $y . '-' . $z . $z . $x . '-' . $z  . $daftar->id ;

            $daftar->no_pendaftaran = $no_daftar;
            $daftar->save();
        }

        return redirect('/user/daftar/baronas');
    }







    public function uploadBaronas(Request $request)
    {

        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();

           $baronas->judul_file           = $request->judul_file ;
           $baronas->deskripsi_file         = $request->deskripsi_file ;
            $baronas->link_file        = $request->link_file ;
            $baronas->upload_status  = 3 ;
            $baronas->save();

        return redirect('/user/upload-link-baronas');
    }



    public function listBaronasDelete($id)
    {
        $baronas = Baronas::find($id);
       // if($baronas!=null) {
        $baronas->delete();

        // $user = User::where("email", "=", $baronas->email)->first();


        // $user->delete();

        return redirect('/admin/list/baronas')->with('success', 'Data peserta telah dihapus'); // }
    }


    public function listBaronas(Request $request)
    {
        $list_baronas = DB::table('baronas')->get();
        return view('admin.list-baronas', ['list_baronas' => $list_baronas]);
    }



    public function formBaronas(Request $request) {

        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();

        if ($baronas == null)
            $baronas = new Baronas;

        return view('user.form-baronas', compact('baronas'));
    }






    public function formuploadBaronas(Request $request) {

        $baronas = Baronas::where("email", "=", Auth::user()->email)->first();

        if ($baronas == null)
            $baronas = new Baronas();

        return view('user.upload-link-baronas', compact('baronas'));
    }






    public function editBaronas($id)
    {
        $baronas = Baronas::findOrFail($id);
        $data_target = DB::table('baronas')->where('id', $id)->first();
        return view('admin.edit-peserta-baronas', compact('baronas'));
    }





    public function updateBaronas(Request $request, $id)
    {
       $update = $request->validate([
            'nama_tim'=>'required',
            'kategori' => 'required',
            'nama_ketua'=>'required',
            'nama_anggota' => 'required',
            'nama_anggotadua'=>'required',
            'nama_pembina' => 'required',
            'sekolah' => 'required',
            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);


        $subject = Baronas::whereId($id)->update($update);
        if($subject) {

            Session::flash('message', 'Update successfully!');
            Session::flash('alert-class', 'alert-success');
         }else{
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect('/admin/list/baronas')->with('success', 'Data peserta telah diupdate');
    }






    // public function updateBaronas(Request $request)
    // {



    //     DB::table('baronas')->where('id', $request->id)->update([

    //   'nama_tim' => $request->nama_tim,
    //    'kategori' => $request->kategori,
    //    'nama_ketua' => $request->nama_ketua,
    //    'nama_anggota' => $request->nama_anggota,
    //    'nama_anggotadua' => $request->nama_anggotadua,
    //     'nama_pembina' => $request->nama_pembina,
    //     'sekolah' => $request->sekolah,
    //     ]);


    //     return redirect('/admin/list/baronas/edit/{id}')->with('success', 'Data peserta telah diupdate');
    // }














    public function daftarElectraAdmin(Request $request)
    {
        if (Auth::user()->email == 'evolutionelektroits@gmail.com') {
            // User register rules
            $rules = array('email' => 'required|email|unique:users,email', 'password' => 'required|min:8');

            $input['email'] = $request->email;
            $input['password'] = "evolution123";
            $validator = Validator::make($input, $rules);

            if ($validator->fails()) {
                return redirect('/admin/tambah')->with('failed', $request->email);
            } else {
                // Register the new user
                User::create([
                    'email' => $request->email,
                    'password' => Hash::make($input['password']),
                    'register_status' => 1,
                ]);
            }

            $daftar = new Electra;

            $daftar->email              = $request->email;
            $daftar->nama_tim           = $request->nama_tim;
            $daftar->nama_ketua         = $request->nama_ketua;
            $daftar->kelas_ketua        = $request->kelas_ketua;
            $daftar->nama_anggota       = $request->nama_anggota;
            $daftar->kelas_anggota      = $request->kelas_anggota;
            $daftar->sekolah            = $request->sekolah;
            $daftar->alamat_sekolah     = $request->alamat_sekolah;
            $daftar->nomor_hp           = $request->nomor_hp;
            $daftar->region             = $request->region;
            $daftar->pembayaran_status  = 3; // register via korlap dan sudah lunas
            $daftar->file_ktp_ketua     = $request->file_ktp_ketua->store('public');
            $daftar->file_ktp_anggota   = $request->file_ktp_anggota->store('public');
            $daftar->save();

            return redirect('/admin/tambah')->with('success', $request->nama_tim);
        }
    }



    public function register(Request $request)
    {
        $input['email'] = $request->email;
        $input['password'] = $request->password;

        $email_target = $request->email;

        // User register rules
        $rules = array('email' => 'required|email|unique:users,email', 'password' => 'required|min:8');

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect('/register')->with('failed', 'Email telah terdaftar');
        } else {
            // Register the new user
            User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user = User::where("email", "=", $email_target)->first();

            $data = array(
                'id' => $user->id
            );

            Mail::send('dokumen.verifkasi', $data, function ($message) use ($email_target) {

                $message->to($email_target, $email_target)
                    ->subject('VERIFIKASI AKUN EVOLUTION');
                $message->from('evolutionelektroits@gmail.com');
            });

            return redirect('/register')->with('success', 'Silahkan cek email Anda untuk verifikasi akun');
        }
    }

    public function updatePassword(Request $request)
    {
        if (Auth::user()) {

            // ambil data berdasarkan id
            $user = User::find(Auth::user()->id);

            // simpan form ke dalam variabel baru
            $passLama = $request->passwordLama;
            $passBaru = $request->passwordBaru;
            $passBaruKonfirmasi = $request->konfirmasiPasswordBaru;

            // cek apakah password lama sama atau tidak
            if (Hash::check($passLama, $user->password)) {

                // cek apakah password baru sama atau tidak
                if ($passBaru != $passBaruKonfirmasi) {
                    return redirect('/user/akun')->with('failed-baru', 'Password baru tidak sama');
                } else {
                    // ganti password
                    $request->user()->fill([
                        'password' => Hash::make($request->passwordBaru)
                    ])->save();

                    return redirect('/user/akun')->with('success', 'Password berhasil diganti');
                }
            } else {

                return redirect('/user/akun')->with('failed-lama', 'Password lama tidak sesuai');
            }
        }
    }

    public function login(Request $request)
    {
        if ($request->email == 'evolutionelektroits@gmail.com') {
            $credentials1 = ['email' => $request->email, 'password' => $request->password];
            if (Auth::attempt($credentials1)) {
                return redirect('/admin/dashboard');
            }
        } else {
            $credentials2 = ['email' => $request->email, 'password' => $request->password, 'register_status' => 1];
            if (Auth::attempt($credentials2)) {
                // Authentication passed...
                return redirect('/user/dashboard');
            }
        }

        return redirect('/login')->with('failed', 'Email atau Password salah');
    }

    public function verifikasiAkun($id)
    {
        $sukses = User::where(['id' => $id])->update(['register_status' => '1']);

        if ($sukses)
            return redirect('/login')->with('success', 'Akun anda berhasil diverifikasi, silahkan login');
        else
            return redirect('/login')->with('failed', 'Akun anda gagal diverifikasi');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
