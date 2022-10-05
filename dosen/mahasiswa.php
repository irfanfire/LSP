<?php
include '../func.php';
include 'header.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

?>
    <div class="col-md-12 p-5 pt-2">
      <h3><i class="fas fa-calendar-alt mr-2"></i> Mahasiswa </h3>
      <hr>
      <a href="tambahmhs.php" class="btn btn-primary rounded mt-2"><i class="fas fa-plus-circle mr-2"></i> [+] Tambah </a>
      <table class="table mt-3 ">
        <thead class="thead-dark text-center 1">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Angkatan</th>
            <th scope="col">Alamat</th>
            <th scope="col">email</th>
            <th scope="col">telp</th>
            <th scope="col">Opsi</th>

          </tr>
        </thead>

        <tbody>
         <?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo ' <tr>' ;
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["nama"].'</td>';
    echo '<td>'.$row["jenkel"].'</td>';
    echo '<td>'.$row["tgl_lahir"].'</td>';
    echo '<td>'.$row["prodi"].'</td>';
    echo '<td>'.$row["fakultas"].'</td>';
    echo '<td>'.$row["angkatan"].'</td>';
    echo '<td>'.$row["alamat"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '<td>'.$row["telp"].'</td>';
    echo '<td> <a class="btn btn-primary" href="editmhs.php?id='.$row["id"].'"> edit |  </a> |';
    echo ' <a class="btn btn-primary" href="hapusmhs.php?id='.$row["id"].'"> delete | </a></td>';
    echo '</tr>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>
        

      </table>

    </div>
  </div>


</body>
</html>
         