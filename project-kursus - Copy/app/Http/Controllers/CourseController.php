<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Menampilkan daftar kursus
    public function index()
    {
        // $totalCourses = Course::count(); // Menghitung jumlah kursus
        $courses = Course::all(); // Mengambil semua kursus dari database
        return view('courses.index', compact('courses')); // Menampilkan view dengan data kursus
    }

    public function show($id)
{
    $course = Course::findOrFail($id);
    return view('courses.show', compact('course'));
}


public function create()
{
    return view('admin.add_course'); // buat view baru untuk form tambah kursus
}

public function store(Request $request)
{
    // Validasi data dan simpan kursus
    $validatedData = $request->validate([
        'foto_kursus' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'nama_kursus' => 'required|string|max:255',
        'foto_pengajar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'nama_pengajar' => 'required|string|max:255',
        'pekerjaan_pengajar' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'harga' => 'required|integer',
        'diskon' => 'nullable|integer',
        'type' => 'required|string',
        'stok' => 'required|integer'
    ]);

    // Menyimpan foto kursus
    if ($request->hasFile('foto_kursus')) {
        $fotoKursus = $request->file('foto_kursus')->store('images/kursus', 'public'); // Simpan di folder public/images/kursus
        $validatedData['foto_kursus'] = $fotoKursus; // Tambahkan path ke data yang divalidasi
    }

    // Menyimpan foto pengajar
    if ($request->hasFile('foto_pengajar')) {
        $fotoPengajar = $request->file('foto_pengajar')->store('images/pengajar', 'public'); // Simpan di folder public/images/pengajar
        $validatedData['foto_pengajar'] = $fotoPengajar; // Tambahkan path ke data yang divalidasi
    }

    // Membuat entri baru di database
    Course::create($validatedData);

    return redirect()->route('admin.index')->with('success', 'Kursus berhasil ditambahkan');
}



// Tampilkan form edit kursus
// Menampilkan form edit kursus
public function editCourse($id)
{
    $course = Course::findOrFail($id); // Mengambil kursus berdasarkan ID
    return view('admin.edit_course', compact('course')); // Mengembalikan tampilan edit-course
}

// Memproses pembaruan kursus
public function updateCourse(Request $request, $id)
{
    $request->validate([
        'nama_kursus' => 'required|string|max:255',
        'foto_kursus' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'foto_pengajar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'nama_pengajar' => 'required|string|max:255',
        'pekerjaan_pengajar' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'harga' => 'required|integer',
        'diskon' => 'nullable|integer',
        'type' => 'required|in:online,offline',
        'stok' => 'required|integer',
    ]);

    $course = Course::findOrFail($id);
    $course->nama_kursus = $request->nama_kursus;
    $course->nama_pengajar = $request->nama_pengajar;
    $course->pekerjaan_pengajar = $request->pekerjaan_pengajar;
    $course->rating = $request->rating;
    $course->harga = $request->harga;
    $course->diskon = $request->diskon;
    $course->type = $request->type;
    $course->stok = $request->stok;

    // Handle upload foto kursus
    if ($request->hasFile('foto_kursus')) {
        $fotoKursus = $request->file('foto_kursus')->store('images', 'public');
        $course->foto_kursus = $fotoKursus;
    }

    // Handle upload foto pengajar
    if ($request->hasFile('foto_pengajar')) {
        $fotoPengajar = $request->file('foto_pengajar')->store('images', 'public');
        $course->foto_pengajar = $fotoPengajar;
    }

    $course->save(); // Simpan perubahan

    return redirect()->route('admin.courses')->with('success', 'Kursus berhasil diperbarui.');
}

// Hapus kursus
public function destroyCourse($id)
{
    $course = Course::findOrFail($id);
    $course->delete();

    return redirect()->route('admin.courses')->with('success', 'Kursus berhasil dihapus.');
}
}
