<?php
  $conn=new mysqli("localhost","root","","ecommerce");
  $search=$_GET['sa'];

  $sql="SELECT subcatagory_name from sub_catagories where subcatagory_name like '%$search%' ";
  $result = $conn->query($sql);
  while($row= $result->fetch_assoc()){
    echo $row["subcatagory_name"]."<br>";
  }


 ?>
