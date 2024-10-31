<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard User Kursus - Codeworshipper</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet" />
</head>

<body>
    @include('fragment.alert')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kursus</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('storeCourse') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_kursus">Nama Kursus</label>
                    <input type="text" class="form-control" id="nama_kursus" name="nama_kursus" placeholder="Nama Kursus" required>
                </div>
                <div class="form-group">
                    <label for="foto_kursus">Foto Kursus</label>
                    <input type="file" class="form-control-file" id="foto_kursus" name="foto_kursus" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengajar">Nama Pengajar</label>
                    <input type="text" class="form-control" id="nama_pengajar" name="nama_pengajar" placeholder="Nama Pengajar" required>
                </div>
                <div class="form-group">
                    <label for="foto_pengajar">Foto Pengajar</label>
                    <input type="file" class="form-control-file" id="foto_pengajar" name="foto_pengajar" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_pengajar">Pekerjaan Pengajar</label>
                    <input type="text" class="form-control" id="pekerjaan_pengajar" name="pekerjaan_pengajar" placeholder="Pekerjaan Pengajar" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control" id="rating" name="rating" placeholder="Rating" min="1" max="5" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                </div>
                <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Diskon">
                </div>
                <div class="form-group">
                    <label for="type">Jenis Kursus</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="stok">Slot Tersedia</label>
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Kursus</button>
            </form>
        </div>
    </div>
    

    <!-- Script -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
