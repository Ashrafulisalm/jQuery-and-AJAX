<?php
if(isset($_POST["user_id"])){
$conn=new mysqli("localhost","root","","ajaxcrud");
$id=$_POST["user_id"];
$sql="delete from users where id=$id ";
$result=$conn->query($sql);
if($result){
  include('load1.php');
}
}
 ?>
