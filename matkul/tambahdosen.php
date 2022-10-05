<?php
$nama = "Tambah Data";
include '../func.php';
include 'header.php';
include 'connect.php';

if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "INSERT INTO dosen(id,nama,jenkel,pendidikan,fakultas,prodi,email,telp) VALUES('$_POST[id]','$_POST[nama]','$_POST[jenkel]','$_POST[pendidikan]','$_POST[fakultas]','$_POST[prodi]','$_POST[email]','$_POST[telp]')");
    echo "<meta content='0; url=dosen.php' http-equiv='refresh'>";
}
?>

<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Tambah Daftar Dosen
                            </h1>
                            <div class="page-header-subtitle">Ini tu halaman awal buat nampilin semua jenis data</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Daftar Dosen</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="id">ID</label><input class="form-control" name="id" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="nama">Nama Dosen</label><input class="form-control" name="nama" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="jenkel">Jenis Kelamin</label><select class="form-control">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select> </div>
                        <div class="mb-3"><label for="pendidikan">Pendidikan</label><input class="form-control" name="pendidikan"></div>
                        <div class="mb-3"><label for="fakultas">Fakultas</label><input class="form-control" name="fakultas"></div>
                        <div class="mb-3"><label for="prodi">Program Studi</label><input class="form-control" name="prodi"></div>
                        <div class="mb-3"><label for="email">Email</label><input class="form-control" name="email"></div>
                        <div class="mb-3"><label for="telp">Telp</label><input class="form-control" name="telp"></div>
                        <div class="mb-3"><button class="btn btn-primary btn-block" type="submit" name="tambah">Kirim Data</button></div>

                    </form>
                </div>
            </div>
        </div>

</div>
</div>
</main>

<?php
include 'footer.php';
?>