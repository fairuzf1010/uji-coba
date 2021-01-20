<?php

namespace App\Http\Controllers;

use App\Mail\NotifPendaftaran;
use App\Mail\NotifPembayaran;
use App\Mail\NotifRegisWebinar;
use App\User;
use App\City;
use App\State;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        return view('home',compact('users'));
    }


    public function data()
    {
        $users = User::all();

        return view('adminpage',compact('users'));
    }


    public function wilayah()
    {
        $cities = City::all();
        $states = State::all();

        return view('daftarkota',compact('users'));
    }



    public function stat(Request $request)
    {
        $users = User::all();


        $email = $request->email;
        $data = array(
                'name' => $request->name,
                'email_body' => $request->email_body
            );



        Mail::to($email)->send(new NotifRegisWebinar);





        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return view('status',compact('users'));
    }








   // public function soviet()
   // {
    //    $users = User::all();

      //  return view('soviet');
    //}

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }


    public function sendEmail(Request $request){
        // Siapkan Data
        $email = $request->email;
        $data = array(
                'name' => $request->name,
                'email_body' => $request->email_body
            );

        // Kirim Email Asli

      //  Mail::send('email_template', $data, function($mail) use($email) {
           // $mail->to($email, 'no-reply')
                    //->subject("Notifikasi Status Pembayaran");
           // $mail->from('fairuzf1010@gmail.com', 'MechTech IDN'); });


Mail::to($email)->send(new NotifPendaftaran);





        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return "Email berhasil dikirim!";
    }





    public function sendNotif(Request $request){
        // Siapkan Data
        $email = $request->email;
        $data = array(
                'name' => $request->name,
                'email_body' => $request->email_body
            );

        // Kirim Email
        $img_url = env('APP_URL')."/img/my-logo.png";
        Mail::to($email)->send(new NotifPembayaran);

        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return "Email berhasil dikirim!";
    }




}
