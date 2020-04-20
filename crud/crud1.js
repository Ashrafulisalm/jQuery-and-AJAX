$(document).ready(function(){
  $("#btn").click(function(){
    var na=$("#name").val();
    var em=$("#email").val();
    $.ajax({
      type:'post',
      url:'insert.php',
      data:{
        name:na,
        email:em
      },

    });
  });
});

//For index
function users(){
  $(document).ready(function(){
    $.ajax({
      type:'get',
      url:'load1.php',
      success:function(data){
        $("#details").html(data);
      }
    });
  });
}

//ajax delete
function del(id){
  console.log(id);
  $.ajax({
    type:'post',
    url:'delete.php',
    data:{user_id:id},
    success:function(data){
      $("#details").html(data);
    }

  });
}

//ajax update for name field by contenteditable
function update(id,rid){
  $(document).ready(function(){
    var value=$(id).html();
    $.ajax({
      type:'post',
      url:'update.php',
      data:{
        user_id:rid,
        name:value
      },
      success:function(data){
        $("#details").html(data);
      }
    });
  });
}

//ajax update for email field by contenteditable
function updatemail(id,rid){
  $(document).ready(function(){
    var value=$(id).html();
    $.ajax({
      type:'post',
      url:'updatemail.php',
      data:{
        user_id:rid,
        email:value
      },
      success:function(data){
        $("#details").html(data);
      }
    });
  });
}
