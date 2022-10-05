
<?php
$nama = "Edit Data";
include '../func.php';
include 'header.php';
include 'connect.php';

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM matkul WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $id = $data['id'];
    $nama = $data['id_dosen'];
    $jenkel = $data['kode'];
    $pendidikan = $data['nama'];
    $fakultas = $data['sks'];
    $prodi = $data['jenis'];
}


if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "UPDATE matkul SET id='$_POST[id]',id_dosen='$_POST[id_dosen]',kode='$_POST[kode]',nama='$_POST[nama]',sks='$_POST[sks]',jenis='$_POST[jenis]' WHERE id=$id");
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
                                Edit Mata Kuliah
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Mata Kuliah</div>
                <div class="card-body">
                    <form method="POST" action="">
                    <div class="mb-3"><label for="id">ID</label><input class="form-control" name="id" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="id_dosen">ID Dosen</label><input class="form-control" name="nama" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="kode">Kode</label><input class="form-control" name="nama" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="nama">Nama</label><input class="form-control" name="pendidikan"></div>
                        <div class="mb-3"><label for="sks">SKS</label><input class="form-control" name="fakultas"></div>
                        <div class="mb-3"><label for="jenis">Jenis</label><input class="form-control" name="prodi"></div>
                        <div class="mb-3"><button class="btn btn-primary btn-block" type="submit" name="tambah">Kirim Data</button></div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>


