<?php
if(isset($_POST["user_id"])){
$conn=new mysqli("localhost","root","","ajaxcrud");
$id=$_POST["user_id"];
$email=$_POST["email"];
$sql="update users set email='$email' where id='$id' ";
$result=$conn->query($sql);
if($result){
  include('load1.php');
}
}
 ?>
