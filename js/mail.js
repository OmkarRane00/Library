$(document).ready(function(){

	$("#sub_btn").click(function(){
		// alert()

		$("#err_reg1").show()

		data = $("#mail_form").serialize();
		

		$.ajax({
			url : "ajax/ajax_insert.php",
			type : "post",
			data : data,
			success : function(){
				// alert(response)
				setTimeout(function(){
					$("#err_reg1").hide()
					$("#err_reg").show()	
				},3000),
					$("#err_reg").hide()

				
			}
		})
	})
})