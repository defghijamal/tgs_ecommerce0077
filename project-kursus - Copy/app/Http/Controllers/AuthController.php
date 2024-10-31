<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Pastikan hanya satu import Auth
use Illuminate\Support\Facades\Hash; // Pastikan hanya satu import Hash
use Illuminate\Support\Facades\Notification; // Pastikan hanya satu import Hash
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\VerifyEmail;
// use Illuminate\Notifications\Notification;

class AuthController extends Controller
{
    public function auth(){
        return view('auth');
    }

    public function register(Request $request){ // "Request" sudah benar
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Gunakan Hash untuk password
            ]);

            // SMTP untuk email verifikasi bisa ditambahkan di sini
            Notification::send($user, new VerifyEmail());

            return redirect()->route('auth')->with('success', 'Akun berhasil dibuat! Silahkan cek email anda untuk verifikasi akun anda!');
        } catch(\Exception $e) {
            return redirect()->route('auth')->with('error', 'Akun gagal dibuat! '.$e->getMessage());
        }
    }

    public function login(Request $request){ // "Request" sudah benar
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'Email harus valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);
        
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
        
            // Redirect berdasarkan peran pengguna
            if (Auth::user()->email_verified_at) {
                if (Auth::user()->role == 'admin') {
                    return redirect()->route('admin')->with('success', 'Selamat Datang Admin!');
                } else {
                    return redirect()->route('user')->with('success', 'Berhasil login!');
                }
            } else {
                Auth::logout();
                return back()->with('error', 'Harap verifikasi akun anda!');
            }
        }
        

        return redirect()->route('auth')->with('error', 'Email atau password salah');
    }

    public function verify($id, $hash){
        $user = User::findOrFail($id);

        if (sha1($user->getEmailForVerification()) !== $hash){
            return redirect()->route('auth')->with('error', 'Verifikasi gagal!');
        }

        if($user->hasVerifyEmail()){
            return redirect()->route('auth')->with('success','Akun anda sudah terferifikasi');
        }

        if($user->markEmailAsVerified()){
            return redirect()->route('auth')->with('success','Akun anda berhasil diverifikasi');
        }
        return redirect()->route('auth')->with('error','Gagal verifikasi email');
    }


    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    protected function authenticated(Request $request, $user)
{
    // Arahkan pengguna kembali ke URL yang diinginkan setelah login
    return redirect()->intended(); // Ini akan mengarahkan ke URL yang disimpan di session['url.intended']
}public function showLoginForm()
{
    // Cek apakah pengguna sudah login
    if (Auth::check()) {
        return redirect()->route('user.index'); // Arahkan ke dashboard user
    }
    return view('auth');
}



}
