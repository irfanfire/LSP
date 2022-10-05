<<?php
include '../func.php';
include 'header.php';
$sql = "SELECT * FROM jadwal";
$result = $conn->query($sql);

?>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-calendar-alt mr-2"></i> Mahasiswa </h3>
      <hr>
      <a href="tambahjadwal.php" class="btn btn-primary rounded mt-2"><i class="fas fa-plus-circle mr-2"></i>Tambah</a>
      <table class="table mt-3 ">
        <thead class="thead-dark text-center 1">
          <tr>
            <th scope="col">Kode MP</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Waktu</th>
            <th scope="col">Pengajar</th>
            <th scope="col">Ruang</th>
            <th colspan="3">Aksi</th>

          </tr>
        </thead>

        <tbody>
         <?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo ' <tr>' ;
    echo '<td>'.$row["id_mapel"].'</td>';
    echo '<td>'.$row["nama_mapel"].'</td>';
    echo '<td>'.$row["jam"].'</td>';
    echo '<td>'.$row["guru"].'</td>';
    echo '<td>'.$row["ruang"].'</td>';
    echo '<td><a href="detailjadwal.php?id='.$row["id_mapel"].'" class="btn btn-primary">Detail <i class="fas fa-angle-double-right"></i></a></td>';
    echo '<td><a href="editjadwal.php?id='.$row["id_mapel"].'"><i class="fas fa-edit pd-4 text-success mt-2" data-toggle="tooltip" title="Edit"></i></a></td>';
    echo '<td><a href="hapusjadwal.php?id='.$row["id_mapel"].'"><i class="fas fa-trash-alt text-danger mt-2" data-toggle="tooltip" title="Delete"></i></a></td>';
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


  <?php
include 'footer.php';
?>
         