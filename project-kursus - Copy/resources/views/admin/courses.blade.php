<table class="table table-bordered">
    <thead>
        <tr>
            <th>Foto Kursus</th>
            <th>Nama Kursus</th>
            <th>Nama Pengajar</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td><img src="{{ asset($course->foto_kursus) }}" alt="Foto Kursus" style="width:50px; height:50px;"></td>
            <td>{{ $course->nama_kursus }}</td>
            <td>{{ $course->nama_pengajar }}</td>
            <td>Rp{{ number_format($course->harga, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('editCourse', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('destroyCourse', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
