
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<div>

<table class="table table-dark col-sm-12">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn=new mysqli("localhost","root","","ajaxcrud");
    $sql="select * from users";
    $result=$conn->query($sql);
    while($row= $result->fetch_assoc()){
      $id=$row["id"];
    ?>
    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td contenteditable="true" id="<?php echo $row["id"]; ?>" onblur="update('#<?php echo $row["id"]; ?>','<?php echo $row["id"]; ?>')"><?php echo $row["name"]; ?></td>
      <td contenteditable="true" class="<?php echo $row["id"]; ?>" onblur="updatemail('.<?php echo $row["id"]; ?>','<?php echo $row["id"]; ?>')"><?php echo $row["email"]; ?></td>
      <td><a class="delete_data btn btn-danger" del_id="<?php echo $row["id"]; ?>" onclick="del(<?php echo $row["id"];?>)">Delete</a></td>
    </tr>
    <?php } ?>


  </tbody>

</table>
</div>
