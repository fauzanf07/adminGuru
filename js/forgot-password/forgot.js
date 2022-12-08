function isEmpty(str) {
    return (!str || str.length === 0 );
}
$('#submit').click(function(){
	var email = $('#inputEmail').val();
	if(!isEmpty(email)){
		$.ajax({
	        url: '../backend/forgot-password/forgot.php',
	        type: 'POST',
	        data: {
				email: email			
			},
			cache: false,
	        success: function(dataResult){
	        	var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
	            if(dataResult.statusCode==200){
	            	$('#emailForm').css('display','none');
					$('#success').css('display','block');
	            }
	            else if(dataResult.statusCode==202){
	                Swal.fire({
						title: 'Error!',
						text: 'There is something wrong with server',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }else if(dataResult.statusCode==203){
	            	Swal.fire({
						title: 'Error!',
						text: 'Email yang anda masukan belum terdaftar!',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }else{
					Swal.fire({
						title: 'Error!',
						text: dataResult.statusCode + ' '+ dataResult.reason,
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					});
				}
	        },
	   });

	}else{
		const toastLiveExample = document.getElementById('liveToast');
		const toast = new bootstrap.Toast(toastLiveExample);

    	toast.show();
	}
})