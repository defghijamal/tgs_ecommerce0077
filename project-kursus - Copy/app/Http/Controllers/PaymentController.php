<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Pastikan import ini ada
use App\Models\Course;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Tampilkan halaman pembayaran
    public function showPaymentPage($courseId)
    {
        // Jika pengguna belum login, arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $course = Course::findOrFail($courseId); // Ambil data kursus berdasarkan ID
        return view('payment', compact('course'));
    }

    // Proses pembayaran
    public function processPayment(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);

        // Kurangi stok kursus
        if ($course->stok > 0) {
            $course->stok -= 1;
            $course->save();

            return redirect()->route('user.index')->with('success', 'Pembayaran berhasil. Stok kursus berkurang.');
        } else {
            return redirect()->route('user.index')->with('error', 'Stok kursus tidak tersedia.');
        }
    }
}
