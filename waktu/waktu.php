<?php
include '../func.php';
include '../header.php';
$sql = "SELECT waktu.id, mahasiswa.id as idmahasiswa, mahasiswa.nama, mahasiswa.prodi, matkul.nama as namamatkul, ruang.gedung, waktu.hari, waktu.mulai, waktu.selesai, dosen.nama as namadosen FROM waktu 
LEFT JOIN mahasiswa ON mahasiswa.id = waktu.id_mhs
LEFT JOIN matkul ON matkul.id = waktu.id_matkul
LEFT JOIN ruang ON ruang.id = waktu.ruang_id
LEFT JOIN dosen ON dosen.id = waktu.id_dosen";
$result = $conn->query($sql);

?>
    <div class="col-md-12 p-5 pt-2">
      <h3><i class="fas fa-calendar-alt mr-2"></i> Waktu Kuliah </h3>
      <hr>
      <a href="tambahwaktu.php" class="btn btn-primary rounded mt-2"><i class="fas fa-plus-circle mr-2"></i> [+] Tambah </a>
      <table class="table mt-3 ">
        <thead class="thead-dark text-center 1">
          <tr>
          <th scope="col">ID</th>
            <th scope="col">ID Mahasiswa</th>
            <th scope="col">ID Dosen</th>
            <th scope="col">ID Mata Kuliah</th>
            <th scope="col">ID Ruang</th>
            <th scope="col">Mulai</th>
            <th scope="col">Selesai</th>
            <th scope="col">Hari</th>
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
    echo '<td>'.$row["namadosen"].'</td>';
    echo '<td>'.$row["namamatkul"].'</td>';
    echo '<td>'.$row["gedung"].'</td>';
    echo '<td>'.$row["mulai"].'</td>';
    echo '<td>'.$row["selesai"].'</td>';
    echo '<td>'.$row["hari"].'</td>';
     echo '<td> <a class="btn btn-primary" href="editwaktu.php?id='.$row["id"].'"> edit |  </a> |';
    echo ' <a class="btn btn-primary" href="hapuswaktu.php?id='.$row["id"].'"> delete | </a></td>';
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
         