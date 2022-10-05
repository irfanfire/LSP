
<?php
$nama = "Edit Data";
include '../func.php';
include 'header.php';
include 'connect.php';

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $id = $data['id'];
    $nama = $data['nama'];
    $jenkel = $data['jenkel'];
    $pendidikan = $data['pendidikan'];
    $fakultas = $data['fakultas'];
    $prodi = $data['prodi'];
    $email = $data['email'];
    $telp = $data['telp'];
}


if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "UPDATE dosen SET id='$_POST[id]',nama='$_POST[nama]',jenkel='$_POST[jenkel]',pendidikan='$_POST[pendidikan]',fakultas='$_POST[fakultas]',prodi='$_POST[prodi]',email='$_POST[email]',telp='$_POST[telp]' WHERE id_dosen=$id");
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
                                Edit Data Guru
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-4">
                <div class="card-header">Daftar Siswa</div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="id">ID</label><input class="form-control" name="id" type="text" value="<?php echo $id; ?>"></div>
                        <div class="mb-3"><label for="nama">Nama</label><input class="form-control" name="nama" type="text" value="<?php echo $nama; ?>"></div>
                        <div class="mb-3"><label for="jenkel">Jenis Kelamin</label><select class="form-control" value="<?php echo $jenkel; ?>" name="jenkel">
                                <option value="Laki-Laki" <?php if($jenkel == 'Laki-Laki'){echo("selected");}?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if($jenkel == 'Perempuan'){echo("selected");}?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3"><label for="pendidikan">Pendidikan</label><input class="form-control" name="pendidikan" type="text" value="<?php echo $pendidikan; ?>"></div>
                        <div class="mb-3"><label for="fakultas">Fakultas</label><input class="form-control" name="fakultas" type="text" value="<?php echo $fakultas; ?>"></div>
                        <div class="mb-3"><label for="prodi">Program Studi</label><input class="form-control" name="prodi" type="text" value="<?php echo $prodi; ?>"></div>
                        <div class="mb-3"><label for="email">Email</label><input class="form-control" name="email" type="text" value="<?php echo $email; ?>"></div>
                        <div class="mb-3"><label for="telp"> Telp</label><input class="form-control" name="telp" type="text" value="<?php echo $telp; ?>"></div>
                        <div class="mb-3"><button class="btn btn-primary btn-block" type="submit" name="tambah">Kirim Data</button></div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>


