
<?php
$nama = "Edit Data";
include '../func.php';
include 'header.php';
include 'connect.php';

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM waktu WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $id = $data['id'];
    $id_mhs = $data['id_mhs'];
    $id_dosen = $data['id_dosen'];
    $id_matkul = $data['id_matkul'];
    $ruang_id = $data['ruang_id'];
    $mulai = $data['mulai'];
    $selesai = $data['selesai'];
}


if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "UPDATE waktu SET id='$_POST[id]',id_mhs='$_POST[id_mhs]',id_dosen='$_POST[id_dosen]',id_matkul='$_POST[id_matkul]',ruang_id='$_POST[ruang_id]',mulai='$_POST[mulai]',selesai='$_POST[selesai]' WHERE id=$id");
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
                                Edit Waktu Kuliah
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Waktu Kuliah</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="id_mhs">ID Mahasiswa</label><input class="form-control" name="id_mhs"  type="text" value="<?php echo $id_mhs; ?>"></div>
                        <div class="mb-3"><label for="id_dosen">ID Dosen</label><input class="form-control" name="id_dosen"  type="text" value="<?php echo $id_dosen; ?>"></div>
                        <div class="mb-3"><label for="id_matkul">ID Matkul</label><input class="form-control" name="id_matkul"  type="text" value="<?php echo $id_matkul; ?>"></div>
                        <div class="mb-3"><label for="ruang_id">ID Ruang</label><input class="form-control" name="ruang_id"  type="text" value="<?php echo $ruang_id; ?>"></div>
                        <div class="mb-3"><label for="mulai">Mulai</label><input class="form-control" name="mulai"  type="text" value="<?php echo $mulai; ?>"></div>
                        <div class="mb-3"><label for="selesai">Selesai</label><input class="form-control" name="selesai"  type="text" value="<?php echo $selesai; ?>"></div>
                        <div class="mb-3"><label for="hari">Hari</label><input class="form-control" name="hari"  type="text" value="<?php echo $selesai; ?>"></div>
                        <div class="mb-3"><button class="btn btn-primary btn-block" type="submit" name="tambah">Kirim Data</button></div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>


