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
	console.log(namaLengkap+' '+nip+' '+sekolah+' '+kepsek+' '+jabatan+' '+mapel+' '+email);
	if(!isEmpty(namaLengkap) && !isEmpty(nip)  && !isEmpty(kepsek) && !isEmpty(sekolah) && !isEmpty(jabatan) 
		&& !isEmpty(mapel) &&  $('#verif').is(":checked")){
		$('#spinner').css('display','inline-block');
		$.ajax({
	        url: '../backend/data-profile/data-profile.php',
	        type: 'POST',
	        data: {
	        	namaLengkap: namaLengkap,
				nip: nip,
				sekolah: sekolah,
				kepsek: kepsek,
				jabatan: jabatan,
				mapel: mapel,
				email: email
			},
			cache: false,
	        success: function(dataResult){
	        	var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
	            if(dataResult.statusCode==201){
	            	Swal.fire({
						title: 'Success!',
						text: 'Data pribadi berhasil diperbarui',
						icon: 'success',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					}).then((result) =>{
                        if(result.isConfirmed){
                            window.location.href = "../create-modul-ajar";
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