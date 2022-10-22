function isEmpty(str) {
    return (!str || str.length === 0 );
}
$('#submit').click(function(){
	var email = $('#inputEmail').val();
	var username = $('#inputUsername').val();
	var newPass = $('#inputPasswordBaru').val();
	if(!isEmpty(email) && !isEmpty(username) && !isEmpty(newPass)){
		$.ajax({
	        url: '../backend/forgot-password/forgot.php',
	        type: 'POST',
	        data: {
				email: email,
				username: username,
				newPass: newPass			
			},
			cache: false,
	        success: function(dataResult){
	        	var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
	            if(dataResult.statusCode==201){
	            	Swal.fire({
						title: 'Success!',
						text: 'Anda telah mengganti password baru',
						icon: 'success',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					}).then((result) =>{
						if(result.isConfirmed){
							window.location.href = "../login";	
						}
					});
	            }
	            else if(dataResult.statusCode==202){
	                Swal.fire({
						title: 'Error!',
						text: 'There is something wrong with server',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }else{
	            	Swal.fire({
						title: 'Error!',
						text: 'Email atau username salah. Silahkan isi Email dan Username dengan benar!',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }
	        },
	   });

	}else{
		const toastLiveExample = document.getElementById('liveToast');
		const toast = new bootstrap.Toast(toastLiveExample);

    	toast.show();
	}
})