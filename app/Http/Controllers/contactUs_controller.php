<?php

namespace App\Http\Controllers;

use App\Mail\contactUs_Mail;
use App\Models\tb_mail;
use App\Models\user_reg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactUs_controller extends Controller
{
    // public function index(){

    //     $details = [
    //     'title' => 'Mail from websitepercobaan.com',
    //     'body' => 'Ya Gitu'
    //     ];
       
    //     Mail::to('adityayatma@gmail.com')->send(new contactUs_Mail($details));
       
    //     dd("Email sudah terkirim.");
    
        
    //     }
        
        public function index()
        {
            return view('userpage.contact_us');
        }

        public function faq()
        {
            return view('userpage.faq');
        }

        public function profile()
        {
            $data['user'] = user_reg::where([['is_deleted',1],['role_id',2]])->first();
           return view('userpage.profile',$data);
        }

        public function admin_side(Request $request)
        {
            $page = 3;
            $data['Page'] = "Kelola Email";
            $data['mail'] = tb_mail::where('is_deleted', 1)->paginate($page);
            $data['get_total'] = tb_mail::where('is_deleted', 1)->count();
            $data['page_now'] = $request->page;
            $data['search'] = $request->page;
            $round = ceil($data['get_total'] / $page);
            $data['pagin'] = $round;
            return view("adminpage.contactUs",$data);
        }

        public function answereMail(Request $request)
        {
            if (session()->get('username') == "") {
                return redirect('/login')->with('alert-notif', 'Anda Harus Login Terlebih Dahulu');
            }
            $id =  $request->id;
            $get_data = [
                'status' =>  2,
                'updated_at' => date("Y-m-d H:i:s"),
            ];
            tb_mail::where('id', $id)->update($get_data);
            return redirect('contactUs_admin');
        }

        public function getData($id)
        {
            $data['data'] = tb_mail::where([['id', $id], ['is_deleted', 1]])->first();
            return Response()->json($data);
        }
}
