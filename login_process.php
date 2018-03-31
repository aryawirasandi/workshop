<?php
include('conn.php');
include('session.php');
// == fungsi login ==
if(isset($_POST['login'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $query = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");
  $row = mysqli_fetch_array($query);

  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

  if ($username == $row['username'] && $password == $row['password']){
    echo '
    <script language="javascript">
    document.location ="index.php";
    </script>
    ';

  }else{
    session_destroy();
    echo '
    <script language="javascript">
    alert("Failed to login!");
    document.location ="login.html";
    </script>
    ';
  }

}
 ?>
