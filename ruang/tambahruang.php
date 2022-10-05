<?php
$nama = "Tambah Data";
include '../func.php';
include 'header.php';
include 'connect.php';

if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "INSERT INTO ruang(id,nomor,gedung,fakultas) VALUES('$_POST[id]','$_POST[nomor]','$_POST[gedung]','$_POST[fakultas]')");
    echo "<meta content='0; url=ruang.php' http-equiv='refresh'>";
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
                                Tambah Daftar Ruang Kuliah
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Daftar Ruang Kuliah</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="nomor">Nomor</label><input class="form-control" name="nomor" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="gedung">Gedung</label><input class="form-control" name="gedung" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="fakultas">Fakultas</label><input class="form-control" name="fakultas" type="text" placeholder=""></div>
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