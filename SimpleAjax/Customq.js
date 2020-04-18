$(document).ready(function(){
	$("#btn1").click(function(){
		var name=$("#name").val();
		var message=$("#msg").val();
		$.get("test.php",{name:name,masg:message},function(data){
			$(".f1").html(data);
		});
	});

	$("#btn").click(function(){
		var name=$("#name1").val();
		var message=$("#msg1").val();
		$.post("test.php",{name1:name,masg1:message},function(data){
			$(".f2").html(data);
		});
	});

	$("#btn3").click(function(){
		$.ajax({
			url:"ajax.php",
			success:function(data){
				$('#data').html(data);
			}
		});
	});

});
