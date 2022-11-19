$('#spinner').css('display','none');
function isEmpty(str) {
    return (!str || str.length === 0 );
}
$('#submit').click(function(){
	var email = $('#inputEmail').val();
	var pass = $('#inputPassword').val();
	var confPass = $('#inputConfPassword').val();
	console.log(email+' '+pass+' '+confPass);
	if(!isEmpty(email) && !isEmpty(pass) && !isEmpty(confPass) &&  $('#verif').is(":checked")){
		$('#spinner').css('display','inline-block');
		if(pass === confPass){
			$.ajax({
				url: '../backend/sign-up/sign-up.php',
				type: 'POST',
				data: {
					email: email,
					pass: pass,
					confPass: confPass
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					console.log(dataResult);
					if(dataResult.statusCode==201){
						sendEmail(email);
					}
					else if(dataResult.statusCode==202){
						$('#spinner').css('display','none');
						Swal.fire({
							title: 'Error!',
							text: 'There is something wrong with server',
							icon: 'error',
							confirmButtonText: 'Ok',
							confirmButtonColor: "#d63630"
						})
					}else if(dataResult.statusCode==203){
						$('#spinner').css('display','none');
						Swal.fire({
							title: 'Error!',
							text: 'Email telah dipakai',
							icon: 'error',
							confirmButtonText: 'Ok',
							confirmButtonColor: "#d63630"
						})
					}
					else{
						$('#spinner').css('display','none');
						getToast("Email tersebut sudah dipakai oleh akun lain");
					}
				},
		   });
		}else{
			getToast("Password dan Konfirmasi password tidak sama");
		}
		

	}else{
    	getToast("Ada input yang belum diisi. Silahkan isi terlebih dahulu!");
	}
})

function sendEmail(email){
	$.ajax({
	        url: '../backend/sign-up/send-email-welcome.php',
	        type: 'POST',
	        data: {
				email: email
			},
			cache: false,
	        success: function(dataResult){
	        	var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
	            if(dataResult.statusCode==200){
	            	$('#spinner').css('display','none');
	            	Swal.fire({
						title: 'Success!',
						text: 'Sign up berhasil',
						icon: 'success',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					}).then((result) =>{
						if(result.isConfirmed){
							window.location.href = "../login";	
						}
					});

	            }
	            else{
	                Swal.fire({
						title: 'Error!',
						text: dataResult.statusCode + ' '+ dataResult.reason,
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }
	        },
	   });
}
function getToast(msg){
	var msg = msg;
	$('#toastBody').html(msg);
	const toastLiveExample = document.getElementById('liveToast');
	const toast = new bootstrap.Toast(toastLiveExample);

    toast.show();
}