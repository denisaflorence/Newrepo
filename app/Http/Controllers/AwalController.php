<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;

class AwalController extends Controller
{
    public function index(){
        //echo "Halo Kamu ngakses Controller Awal pada function index";
        //return view('form');

        return view('index');
    }
    public function login() {
        return view('login');
    }
    public function authentication(Request $req) {
        $nama=$req->input('nama_user');
        $kat=$req->input('kata_sandi');
        if ($nama==$kat) {
            $req->session()->put('nama',$nama);
            if ($req->has('prev')) {
                $prev=$req->input('prev');
                return redirect ($prev);
            } else {
                return redirect('/profile');
            }
        } else { 
            if ($req->has('prev')) {
                $prev=$req->input('prev');
                $baru='/login?prev='.$prev;
                return redirect($baru)->with(['error'=> 'Username atau Password salah!']);
            } else {
                return redirect('/login')->with(['error'=> 'Username atau Password salah!']);
             /* Session::flash('message','This Is A Mesaage');*/
            }
        }
    }
    public function profile(Request $req) {
        if ($req->session()->has('nama')) {
            $nama = $req->session()->get('nama');
            return view('/profile',['nama'=>$nama]);
        } else {
            return redirect('/login');
        }
    }
    public function register() {
        return view('register');
    }
    public function about() {
        if (Session::has('nama')){      
            return view('about');
        } else {
            $prev= url()->full();
            $full_prev_url='/login?prev='.$prev;
            echo $full_prev_url;
            return redirect($full_prev_url)->with(['error'=> 'Mohon login terlebih dahulu!']);
        }
    }
    public function setting() {
     return view('setting');
    }
    public function tangkap(Request $req) {
        echo $req->input('nama_user');
        echo "<br>";
        echo $req->input('alamat_surat');
    }
    public function logout(Request $req) {
        $req->session()->flash('nama');
        return redirect('/login')->with(['success'=>'Berhasil Keluar']);
    }
   
}