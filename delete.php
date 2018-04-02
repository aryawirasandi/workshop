<?php
include('conn.php');  
// == fungsi delete ==
if (isset($_GET['id'])){ // ketika link delete di klik
  $id = $_GET['id'];
  mysqli_query($db, "DELETE FROM pegawai WHERE id='$id'");
  echo '
  <script language="javascript">
  alert("Data Deleted");
  document.location ="index.php";
  </script>
  ';
}
?>
