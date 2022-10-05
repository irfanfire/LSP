<?php
$nama = "Tambah Data";
include '../func.php';
include 'header.php';
include 'connect.php';

if (isset($_POST['tambah'])) {

    $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(id,nama,jenkel,tgl_lahir,prodi,fakultas,angkatan,alamat,email,telp) VALUES('$_POST[id_mhs]','$_POST[nama]','$_POST[jenkel]','$_POST[tgl_lahir]','$_POST[prodi]','$_POST[fakultas]','$_POST[angkatan]','$_POST[alamat]','$_POST[email]','$_POST[telp]')");
    echo "<meta content='0; url=mahasiswa.php' http-equiv='refresh'>";
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
                                Tambah Daftar Mahasiswa
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
            
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3"><label for="nama">Nama</label><input class="form-control" name="nama" type="text"  placeholder=""></div>
                        <div class="mb-3"><label for="jenkel">Jenis Kelamin</label><select class="form-control"  placeholder="" value="<?php echo $jenkel;?>"></div>
                                <option value="Laki-Laki" >Laki-Laki</option>
                                <option value="Perempuan" >Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3"><label for="tgl_lahir">Tanggal Lahir</label><input class="form-control" name="tgl_lahir" type="text" placeholder=""></div>
                        <div class="mb-3"><label for="prodi">Program Studi</label><input class="form-control" name="prodi" type="text"  placeholder=""></div>
                        <div class="mb-3"><label for="fakultas">Fakultas</label><input class="form-control" name="fakultas" type="text"  placeholder=""></div>
                        <div class="mb-3"><label for="angkatan">Angkatan</label><input class="form-control" name="angkatan" type="text"  placeholder=""></div>
                        <div class="mb-3"><label for="alamat"> Alamat</label><input class="form-control" name="alamat" type="text"  placeholder=""></div>
                        <div class="mb-3"><label for="email">Email</label><input class="form-control" name="email" type="text"  placeholder=""></div>
                        <div class="mb-3"><label for="help">telp</label><input class="form-control" name="help" type="text"  placeholder=""></div>
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