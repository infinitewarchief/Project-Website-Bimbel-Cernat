@extends('layout')

@section('content')

<br><br><br><br>
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
              <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
                @if(Session::has('success'))
                <form method="post">
                    <center><h3>Data Peserta Didik</h3></center>
                    <br>
                    <b>Tanggal Registrasi</b>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" name="tanggal_registrasi" placeholder="Tanggal Registrasi">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nama Lengkap Siswa</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nomor Whatsapp</b>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="whatsapp" placeholder="Nomor Whatsapp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Jenis Kelamin</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <b>Alamat</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Usia</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="usia" placeholder="Usia">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Asal Sekolah</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Agama</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="agama" placeholder="Agama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Kelas</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nama Orang Tua</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama_orang_tua" placeholder="Nama Orang Tua">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nomor Whatsapp Orang Tua</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nomor_whatsapp_orang_tua" placeholder="Nomor whatsapp orang tua">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Paket</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="paket" placeholder="Paket">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Program yang Di Ambil</b>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="mapel" placeholder="Program yang Ingin di Ambil">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Jadwal</b>
                    <br>
                    <a>Silahkan memilih hari les privat yang available untuk anak didik sesuai dengan jumlah pertemuan les yang mau diambil </a>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="jadwal" placeholder="Jadwal">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Jam Privat</b>
                    <br>
                    <a>Silahkan memilih waktu les sesuai dengan waktu kerja bimbel kami yakni mulai pukul 7 pagi hingga 6 sore.</a>
                    <div class="input-group mb-3">
                        <input type="time" class="form-control" name="jam_les" placeholder="Jam Privat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Tanggal Mulai Les</b>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" name="tanggal_mulai_les" placeholder="Tanggal mulai les">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

@endsection
