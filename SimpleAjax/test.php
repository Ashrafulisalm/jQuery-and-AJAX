<?php
  if(isset($_GET['name'],$_GET['masg'])){
    echo $_GET['name']."<br>";
    echo $_GET['masg'];
  }

  if(isset($_POST['name1'],$_POST['masg1'])){
    echo $_POST['name1']."<br>";
    echo $_POST['masg1'];
  }
?>
