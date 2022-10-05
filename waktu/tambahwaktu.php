<?php
$nama = "Tambah Data";
include '../func.php';
include 'header.php';
include 'connect.php';

if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "INSERT INTO waktu(id,id_mhs,id_dosen,id_matkul,ruang_id,mulai,selesai,hari) VALUES('$_POST[id]','$_POST[id_mhs]','$_POST[id_dosen]','$_POST[id_matkul]','$_POST[ruang_id]','$_POST[mulai]','$_POST[selesai]','$_POST[hari]')");
    echo "<meta content='0; url=waktu.php' http-equiv='refresh'>";
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
                                Tambah Daftar Waktu Kuliah
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Daftar Waktu Kuliah</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="id_mhs">ID Mahasiswa</label><input class="form-control" name="id_mhs" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="id_dosen">ID Dosen</label><input class="form-control" name="id_dosen" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="id_matkul">ID Matkul</label><input class="form-control" name="id_matkul" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="ruang_id">ID Ruang</label><input class="form-control" name="ruang_id" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="mulai">Mulai</label><input class="form-control" name="mulai" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="selesai">Selesai</label><input class="form-control" name="selesai" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="hari">Hari</label><input class="form-control" name="hari" type="text" placeholder=""></div>
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