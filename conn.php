<?php
include('dbconn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['uname'];
    $c = $_POST['pass'];

    $s = "SELECT * from admin_login where UserName = '$a' && Password ='$c'";
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);
    echo $num;
    if ($num == 1)
     {
      echo '<script>

      window.location = "index.html";
    
    </script>';
      echo 'connection';
    } elseif ($num == 0) {
     echo'<script>
     alert ("wrong Email and Password");
     window.location = "login page.html";
   
   </script>
   ';
      echo ' wrong password';
    }
  }
  else{
    echo "not post method";
  }
  ?>