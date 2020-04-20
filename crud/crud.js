$(document).ready(function(){
  $("#btn").click(function(){
    var na=$("#name").val();
    var em=$("#email").val();
    $.ajax({
      type:'post',
      url:'ajax.php',
      data:{name:na,email:em},

    });
  });



});
