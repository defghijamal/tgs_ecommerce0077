<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Pemberitahuan;
use App\Models\Berita;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan hanya satu import Auth
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){
        $email = Auth::user()->email;
    
        $thisKursus = Kursus::where('email', $email)->get();
    
        $kursus = $thisKursus->pluck('kursus')->implode(', ');
        $totalDisetujui = $thisKursus->where('status','disetujui')->count();

        $pemberitahuan = Pemberitahuan::where('email',$email)->get();
        $totalPemberitahuan = $pemberitahuan->count();

        $berita = Berita::first();

        return view('user.index', [
            'kursus' => $kursus,
            'totalDisetujui' => $totalDisetujui,
            'pemberitahuan' => $pemberitahuan,
            'totalPemberitahuan' => $totalPemberitahuan,
            'berita' => $berita
        ]);
    }

    public function sew(){
        $email = Auth::user()->email;
        $isRegistered = Kursus::where('email', $email)->where('kursus','sew')->exists();
        
        $pemberitahuan = Pemberitahuan::where('email',$email)->get();

        $totalPemberitahuan = $pemberitahuan->count();
        
        return view('user.sew',[
            'isRegistered' => $isRegistered,
            'pemberitahuan' => $pemberitahuan,
            'totalPemberitahuan' => $totalPemberitahuan
        ]);
    }

    public function cake(){
        $email = Auth::user()->email;
        $isRegistered = Kursus::where('email', $email)->where('kursus','cake')->exists();
        
        $pemberitahuan = Pemberitahuan::where('email',$email)->get();

        $totalPemberitahuan = $pemberitahuan->count();

        return view('user.cake',[
            'isRegistered' => $isRegistered,
            'pemberitahuan' => $pemberitahuan,
            'totalPemberitahuan' => $totalPemberitahuan
        ]);
    }

    //jadwal
    public function Jadwal()
    {
        $kursusList = Kursus::where('email', Auth::user()->email)->get();

        $isJadwal = collect();

        $statusMessages = $kursusList->map(function ($kursus) {
            return [
                'kursus' => $kursus->kursus,
                'status' => $kursus->status,
            ];
        });

        if ($kursusList->isNotEmpty()) {
            foreach ($kursusList as $kursus) {
                if ($kursus->status === 'disetujui') {
                    $isJadwal = $isJadwal->merge(Jadwal::where('kursus', $kursus->kursus)->get());
                }
            }
        }

        $notification = Pemberitahuan::where('email',Auth::user()->email)->get();
        $countNotifications = $notification->count();

        return view('user.jadwal', [
            'isJadwal' => $isJadwal,
            'statusMessages' => $statusMessages,
            'notification' => $notification,
            'countNotifications' => $countNotifications
        ]);
    }

    //laporan
    public function laporan()
    {
        $kursusList = Kursus::where('email', Auth::user()->email)->get();

        $isJadwal = collect();
        $approvedKursusList = collect();

        if ($kursusList->isNotEmpty()) {
            foreach ($kursusList as $kursus) {
                if ($kursus->status === 'disetujui') {
                    $isJadwal = $isJadwal->merge(Jadwal::where('kursus', $kursus->kursus)->get());
                    $approvedKursusList->push($kursus);
                }
            }
        }

        $laporan = $approvedKursusList->map(function ($kursus) {
            return (object)[
                'nama' => $kursus->nama,
                'email' => $kursus->email,
                'no_hp' => $kursus->no_hp,
                'kursus' => $kursus->kursus,
                'start' => $kursus->created_at->format('Y/m/d')
            ];
        });

        $notification = Pemberitahuan::where('email',Auth::user()->email)->get();
        $countNotifications = $notification->count();

        return view('user.laporan', [
            'isJadwal' => $isJadwal,
            'laporan' => $laporan,
            'notification' => $notification,
            'countNotifications' => $countNotifications
        ]);
    }

    function generateLaporanPdf() {
        $user = Auth::user();
        $kursusList = Kursus::where('email', Auth::user()->email)->get();
        $isJadwal = collect();
    
        if ($kursusList->isNotEmpty()) {
            foreach ($kursusList as $kursus) {
                if ($kursus->status === 'disetujui') {
                    $isJadwal = $isJadwal->merge(Jadwal::where('kursus', $kursus->kursus)->get());
                }
            }
        }
    
        $laporan = $kursusList->map(function ($kursus) {
            return [
                'nama' => $kursus->nama,
                'email' => $kursus->email,
                'no_hp' => $kursus->no_hp,
                'kursus' => $kursus->kursus,
                'start' => $kursus->created_at,
            ];
        });

        $idKursus = 'KRS-' . strtoupper(substr($user->name, 0, 3)) . '-' . $user->id;
        $noPelajar = 'NP-' . strtoupper(substr($user->name, 0, 3)) . '-' . date('Ymd', strtotime($user->created_at));

        $timestamp = now()->format('Ymd_His');
        $filename = 'laporan_kursus_' . $user->id . '_' . $timestamp . '.pdf';
    
        $pdf = PDF::loadView('user.laporan_pdf', [
            'idKursus' => $idKursus,
            'noPelajar' => $noPelajar,
            'isJadwal' => $isJadwal,
            'laporan' => $laporan,
            'user' => $user
        ]);
    
        return $pdf->download($filename);
    }

    //daftar kursus
    function create(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'no_hp' => 'required',
            'alamat' => 'required|string',
            'alasan' => 'required|string',
            'kursus' => 'required'
        ],[
            'nama.required' => 'nama wajib diisi!',
            'email.required' => 'email wajib diisi!',
            'no_hp.required' => 'no hp wajib diisi!',
            'alamat.required' => 'alamat wajib diisi!',
            'alasan.required' => 'alasan wajib diisi!',
            'kursus.required' => 'kursus wajib diisi!'
        ]);

        Kursus::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'alasan' => $request->alasan,
            'kursus' => $request->kursus
        ]);

        $currentWaktu = Carbon::now()->format('F j, Y');

        Pemberitahuan::create([
            'email' => $request->email,
            'waktu' => $currentWaktu,
            'pesan' => "Berhasil Mendaftar Kursus $request->kursus! Mohon tunggu persentujuan dari Admin. Terimakasih",
        ]);

        return redirect()->route('user')->with('success', 'Berhasil mendaftar. Silakan cek pusat peringatan secara berkala!.');
    }
}
