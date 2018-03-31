<?php
include('conn.php');
include('session.php');
// == fungsi update ==
if(isset($_POST['update'])){ // ketika button update di klik
  $name = $_POST['name'];
  $address = $_POST['address'];
  $id = $_POST['id'];

  mysqli_query($db, "UPDATE pegawai SET nama='$name', alamat='$address' WHERE id='$id'");
  echo '
  <script language="javascript">
  alert("Data Updated");
  document.location ="index.php";
  </script>
  ';
}
?>
