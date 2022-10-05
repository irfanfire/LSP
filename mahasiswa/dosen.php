<?php
include '../func.php';
include 'header.php';
$sql = "SELECT * FROM dosen";
$result = $conn->query($sql);

?>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-calendar-alt mr-2"></i> Dosen </h3>
      <hr>
      <a href="tambahdosen.php" class="btn btn-primary rounded mt-2"><i class="fas fa-plus-circle mr-2"></i> [+] Tambah </a>
      <table class="table mt-3 ">
        <thead class="thead-dark text-center 1">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Prodi</th>
            <th scope="col">Email</th>
            <th scope="col">Telp</th>
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
    echo '<td>'.$row["pendidikan"].'</td>';
    echo '<td>'.$row["fakultas"].'</td>';
    echo '<td>'.$row["prodi"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '<td>'.$row["telp"].'</td>';
     echo '<td> <a class="btn btn-primary" href="editdosen.php?id='.$row["id"].'"> edit |  </a> |';
    echo ' <a class="btn btn-primary" href="hapusdosen.php?id='.$row["id"].'"> delete | </a></td>';
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
         