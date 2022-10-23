function isEmpty(str) {
    return (!str || str.length === 0 );
}
$('#submit').click(function(){
	var fName = $('#firstName').val();
	var lName = $('#lastNameTitle').val();
	var nip = $('#inputNIP').val();
	var sekolah = $('#inputSekolah').val();
	var jabatan = $('#inputJabatan').find(":selected").text();
	var mapel = $('#inputMapel').val();
	var email = $('#inputEmail').val();
	var username = $('#inputUsername').val();
	var pass = $('#inputUsername').val();
	console.log(fName+' '+lName+' '+nip+' '+sekolah+' '+jabatan+' '+mapel+' '+email+' '+username+' '+pass);
	if(!isEmpty(fName) && !isEmpty(lName) && !isEmpty(nip) && !isEmpty(sekolah) && !isEmpty(jabatan) 
		&& !isEmpty(mapel) && !isEmpty(email) && !isEmpty(username) && !isEmpty(pass) &&  $('#verif').is(":checked")){
		$.ajax({
	        url: '../backend/sign-up/sign-up.php',
	        type: 'POST',
	        data: {
				fName: fName,
				lName: lName,
				nip: nip,
				sekolah: sekolah,
				jabatan: jabatan,
				mapel: mapel,
				email: email,
				username: username,
				pass: pass
			},
			cache: false,
	        success: function(dataResult){
	        	var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
	            if(dataResult.statusCode==201){
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
	            else if(dataResult.statusCode==202){
	                Swal.fire({
						title: 'Error!',
						text: 'There is something wrong with server',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }else{
	            	getToast("Username tersebut sudah dipakai oleh akun lain");
	            }
	        },
	   });

	}else{
    	getToast("Ada input yang belum diisi. Silahkan isi terlebih dahulu!");
	}
})

function getToast(msg){
	var msg = msg;
	$('#toastBody').html(msg);
	const toastLiveExample = document.getElementById('liveToast');
	const toast = new bootstrap.Toast(toastLiveExample);

    toast.show();
}