<?php
$nama = "Tambah Data";
include '../func.php';
include 'header.php';
include 'connect.php';

if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "INSERT INTO matkul(id,id_dosen,kode,nama,sks,jenis) VALUES('$_POST[id]','$_POST[id_dosen]','$_POST[kode]','$_POST[nama]','$_POST[sks]','$_POST[jenis]')");
    echo "<meta content='0; url=matkul.php' http-equiv='refresh'>";
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
                                Tambah Daftar Mata Kuliah
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Daftar Mata Kuliah</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="id_dosen">ID Dosen</label><input class="form-control" name="id_dosen" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="kode">Kode</label><input class="form-control" name="kode" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="nama">Nama</label><input class="form-control" name="nama"></div>
                        <div class="mb-3"><label for="sks">SKS</label><input class="form-control" name="sks"></div>
                        <div class="mb-3"><label for="jenis">Jenis</label><input class="form-control" name="jenis"></div>
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