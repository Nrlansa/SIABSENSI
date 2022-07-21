<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;

class AuthController extends Controller
{
    public function login()
    {
        if(auth()->guard('mahasiswa')->check()) return redirect('mahasiswa');
        if(auth()->check()) return $this->manageRedirect(auth()->user());
        return view('auth.login');
    }

    public function loginProcess()
    {  
        $guard = null;
        $userid = request('userid');
        $field = null;
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen == 18) {
                $field = 'nip';
            } else if ($strlen == 17) {
                $field = 'nik';
            }
             else if ($strlen == 10) {
                $field = 'nim';
                $guard = 'mahasiswa';
            } 
        }

        if(!$field) return view('auth.login', ['message' => 'User ID Tidak Ditemukan']);
        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];
    
        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;
        if ($guard) {
            if (auth()->guard('mahasiswa')->attempt($credential, $remember)) {
                $user = auth()->user();
                return redirect('mahasiswa');
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        } else {
            if (auth()->attempt($credential, $remember)) {
                $user = auth()->user();
                return $this->manageRedirect($user);
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        }
    }
    public function logout()
    {
        auth()->guard('mahasiswa')->logout();
        auth()->logout();

        return redirect('login');
    }

    public function manageRedirect($user)
    {
        $list_role = $user->role;
        $firstRole = $list_role->first();
        $url = $firstRole->module->url;
        return redirect($url);
    }
}