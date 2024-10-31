<!-- resources/views/admin/edit-course.blade.php -->

<form action="{{ route('updateCourse', $course->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <label>Nama Kursus:</label>
    <input type="text" name="nama_kursus" value="{{ $course->nama_kursus }}" required>

    <label>Foto Kursus:</label>
    <input type="file" name="foto_kursus">

    <label>Nama Pengajar:</label>
    <input type="text" name="nama_pengajar" value="{{ $course->nama_pengajar }}" required>

    <label>Pekerjaan Pengajar:</label>
    <input type="text" name="pekerjaan_pengajar" value="{{ $course->pekerjaan_pengajar }}" required>

    <label>Rating:</label>
    <input type="number" name="rating" value="{{ $course->rating }}" min="1" max="5" required>

    <label>Harga:</label>
    <input type="number" name="harga" value="{{ $course->harga }}" required>

    <label>Diskon:</label>
    <input type="number" name="diskon" value="{{ $course->diskon }}">

    <label>Jenis Kursus:</label>
    <select name="type">
        <option value="online" {{ $course->type == 'online' ? 'selected' : '' }}>Online</option>
        <option value="offline" {{ $course->type == 'offline' ? 'selected' : '' }}>Offline</option>
    </select>

    <label>Stok:</label>
    <input type="number" name="stok" value="{{ $course->stok }}" required>

    <button type="submit">Update Kursus</button>
</form>
