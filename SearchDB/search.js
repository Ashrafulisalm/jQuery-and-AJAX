$(document).ready(function(){
  $("#search").keyup(function(){
    var sear = $("#search").val();

    $.ajax({
      url:'search.php',
      data:'sa='+sear,
      success:function(data){
        $("#dataa").html(data);
      }
    });
  });
});
