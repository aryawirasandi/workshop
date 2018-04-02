<?php
include('conn.php'); 
// == fungsi input ==
if (isset($_POST['save'])) { 
  $nama = $_POST['name']; 
  $alamat = $_POST['address'];

  $query = "INSERT INTO pegawai (nama,alamat) VALUES (' $nama','$alamat')";
  mysqli_query($db, $query);
  echo '
  <script language="javascript">
  alert("Data Added ");
  document.location ="index.php";
  </script>
  ';
}
?>
