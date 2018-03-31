<?php
include('conn.php');
// == fungsi logout ==
  session_start();
  session_destroy();
  echo '
  <script language="javascript">
  alert("Logout!! Goodbye");
  document.location ="login.html";
  </script>
  ';
 ?>
