$(document).ready(function(){
	function validateUpdateForm(){
		let user_id = $("#user_id").val();
		let username = $("#username").val();
		let firstname = $("#firstname").val();
		let	lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#home_address").val();
		let old_password = $("#old_password").val();
		let new_password = $("#new_password").val();
		let confirm_password = $("#confirm_password").val();

		
		let errors = 0;
		if(username.length < 8){
			$("#username").next().text("Please provide valid username");
			errors++;
		} else {
			$("#username").next().text("");
		}

		if(firstname.length == 0){
			$("#firstname").next().text("Provide a valid firstname");
			errors++;
		} else {
			$("#firstname").next().text("");
		}

		if(lastname.length == 0){
			$("#lastname").next().text("Provide a valid lastname");
			errors++;
		} else {
			$("#lastname").next().text("");
		}

		if(address.length == 0){
			$("#home_address").next().text("Provide a valid address");
			errors++;
		} else {
			$("#home_address").next().text("");
		}

		if(new_password != confirm_password){
			$("#confirm_password").next().text("Passwords should match");
			errors++;
		} else {
			$("#confirm_password").next().text("");
		}

		if(old_password == new_password){
			$("#confirm_password").next().text("New password can't be the same as old password");
			errors++;
		} else {
			$("#confirm_password").next().text("");
		}


		if(errors > 0) {
			return false;

		} else {
			return true;
		}
		

	}



	

	$("#update_user").on("click", function() {
		if(validateUpdateForm()){


			$.ajax({
				"url": "../controllers/update_user.php",
				"type": "POST",
				"data":{
					"user_id":user_id,
					"username":username,
					"firstname":firstname,
					"lastname":lastname,
					"email":email,
					"address":home_address,
					"old_password":old_password,
					"new_password":new_password
				},
				"success":function(dataFromController){
					if (dataFromController == "success") {
						$("#update_status").text("You have successfully edited your profile");
					}

					if(dataFromController == "incorrect"){
						$("#update_status").text("incorrect old password provided");
					}

				}

			});



		}
	});

});
