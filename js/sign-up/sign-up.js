$('#spinner').css('display','none');
function isEmpty(str) {
    return (!str || str.length === 0 );
}
$('#submit').click(function(){
	var namaLengkap = $('#namaLengkap').val();
	var nip = $('#inputNIP').val();
	var sekolah = $('#inputSekolah').val();
	var kepsek = $('#kepsek').val();
	var jabatan = $('#inputJabatan').find(":selected").text();
	var mapel = $('#inputMapel').val();
	var email = $('#inputEmail').val();
	var username = $('#inputUsername').val();
	var pass = $('#inputUsername').val();
	console.log(namaLengkap+' '+nip+' '+sekolah+' '+kepsek+' '+jabatan+' '+mapel+' '+email+' '+username+' '+pass);
	if(!isEmpty(namaLengkap) && !isEmpty(nip)  && !isEmpty(kepsek) && !isEmpty(sekolah) && !isEmpty(jabatan) 
		&& !isEmpty(mapel) && !isEmpty(email) && !isEmpty(username) && !isEmpty(pass) &&  $('#verif').is(":checked")){
		$('#spinner').css('display','inline-block');
		$.ajax({
	        url: '../backend/sign-up/sign-up.php',
	        type: 'POST',
	        data: {
	        	namaLengkap: namaLengkap,
				nip: nip,
				sekolah: sekolah,
				kepsek: kepsek,
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
	            	sendEmail(email, namaLengkap);
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
						text: 'Username telah dipakai',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
	            }
	            else{
	            	getToast("Username tersebut sudah dipakai oleh akun lain");
	            }
	        },
	   });

	}else{
    	getToast("Ada input yang belum diisi. Silahkan isi terlebih dahulu!");
	}
})

function sendEmail(email, nama){
	$.ajax({
	        url: '../backend/sign-up/send-email-welcome.php',
	        type: 'POST',
	        data: {
	        	nama: nama,
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