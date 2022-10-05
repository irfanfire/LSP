<?php
include '../func.php';
include '../header.php';
$sql = "SELECT * FROM ruang";
$result = $conn->query($sql);

?>
    <div class="col-md-12 p-5 pt-2">
      <h3><i class="fas fa-calendar-alt mr-2"></i> Ruang Kuliah </h3>
      <hr>
      <a href="tambahruang.php" class="btn btn-primary rounded mt-2"><i class="fas fa-plus-circle mr-2"></i> [+] Tambah </a>
      <table class="table mt-3 ">
        <thead class="thead-dark text-center 1">
          <tr>
          <th scope="col">ID</th>
            <th scope="col">Nomor</th>
            <th scope="col">Gedung</th>
            <th scope="col">Fakultas</th>
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
    echo '<td>'.$row["nomor"].'</td>';
    echo '<td>'.$row["gedung"].'</td>';
    echo '<td>'.$row["fakultas"].'</td>';
     echo '<td> <a class="btn btn-primary" href="editruang.php?id='.$row["id"].'"> edit |  </a> |';
    echo ' <a class="btn btn-primary" href="hapusruang.php?id='.$row["id"].'"> delete | </a></td>';
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
         