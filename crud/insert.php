<?php
  $conn=new mysqli("localhost","root","","ajaxcrud");
  $name=$_POST["name"];
  $email=$_POST["email"];
  $sql="insert into users(name,email) values('$name','$email')";
  $result=$conn->query($sql);
  echo "Success";
 ?>
