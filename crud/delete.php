<?php
$conn=new mysqli("localhost","root","","ajaxcrud");
$id=$_POST["user_id"];
$sql="delete from users where id='$id' ";
$result=$conn->query($sql);

 ?>
