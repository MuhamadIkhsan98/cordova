<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $koderk=$_POST['koderk'];
 $namark=$_POST['namark'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `rokokan` SET `koderk`='$koderk',`namark`='$namark',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>