
$("#login").click(function(){
		var username = $('#username').val();
		var password = $('#password').val();
		if(username!="" && password!=""){
			$.ajax({
				url: "../backend/login/login.php",
				type: "POST",
				data: {
					username: username,
					password: password				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					console.log(dataResult);
					if(dataResult.statusCode==201){
						window.location.href = "../create-modul-ajar/";		
					}
					else if(dataResult.statusCode==202){
						Swal.fire({
						  title: 'Error!',
						  text: 'The username or password is invalid',
						  icon: 'error',
						  confirmButtonText: 'Ok',
						  confirmButtonColor: "#d63630"
						})
					}
					
				}
			});
		}
		else{
				const toastLiveExample = document.getElementById('liveToast');
				const toast = new bootstrap.Toast(toastLiveExample);

		    	toast.show();
		}
});