<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $koderk=$_POST['koderk'];
 $namark=$_POST['namark'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `rokokan` (`koderk`,`namark`,`harga`) VALUES ('$koderk','$namark','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>