function isEmpty(str) {
    return (!str || str.length === 0 );
}

function changeImg(f){
	var id = $('#submit').data('id');
	var namaLengkap = $('#namaLengkap').val();
	var nip = $('#inputNIP').val();
	var sekolah = $('#inputSekolah').val();
	var kepsek = $('#kepsek').val();
	var jabatan = $('#inputJabatan').find(":selected").text();
	var mapel = $('#inputMapel').val();
	var email = $('#inputEmail').val();
	var fd = new FormData();
	var files = f;

	if(files.length > 0 && !isEmpty(namaLengkap) && !isEmpty(nip)  && !isEmpty(kepsek) && !isEmpty(sekolah) && !isEmpty(jabatan) 
		&& !isEmpty(mapel) && !isEmpty(email) && $('#verif').is(":checked")){
        fd.append('file',files[0]);

        $.ajax({
              url: "../backend/edit-profile/change-img.php",
              type: "POST",
              data: fd,
              contentType: false,
              processData: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
				console.log(dataResult)
				if(dataResult.statusCode==200){
					uploadFormData();			
				}
              },
        });
    }else{
        getToast("Ada input yang belum diisi. Silahkan isi terlebih dahulu!");;
    }
}

function uploadFormData(){
	var id = $('#submit').data('id');
	var namaLengkap = $('#namaLengkap').val();
	var nip = $('#inputNIP').val();
	var sekolah = $('#inputSekolah').val();
	var kepsek = $('#kepsek').val();
	var jabatan = $('#inputJabatan').find(":selected").text();
	var mapel = $('#inputMapel').val();
	var email = $('#inputEmail').val();

	console.log(namaLengkap+' '+nip+' '+sekolah+' '+kepsek+' '+jabatan+' '+mapel+' '+email);
	if(!isEmpty(namaLengkap) && !isEmpty(nip)  && !isEmpty(kepsek) && !isEmpty(sekolah) && !isEmpty(jabatan) 
		&& !isEmpty(mapel) && !isEmpty(email) && $('#verif').is(":checked")){
		$.ajax({
	        url: '../backend/edit-profile/edit.php',
	        type: 'POST',
	        data: {
	        	id: id,
	        	namaLengkap: namaLengkap,
				nip: nip,
				sekolah: sekolah,
				kepsek: kepsek,
				jabatan: jabatan,
				mapel: mapel,
				email: email,
			},
			cache: false,
	        success: function(dataResult){
	        	var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
	            if(dataResult.statusCode==201){
	            	Swal.fire({
						title: 'Success!',
						text: 'Edit Profile berhasil',
						icon: 'success',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					}).then((result) =>{
						if(result.isConfirmed){
							location.reload();	
						}
					});
	            }
	            else{
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

}

$('#customFile').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#profile-pic-edit').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#profile-pic-edit').attr('src', '../images/profile-img/avatar.jpg');
    }
});

$('#submit').click(function(){
    var files = $('#customFile')[0].files;
    if(files.length> 0){
    	changeImg(files);
    }else{
    	uploadFormData();
    }
	
})

function getToast(msg){
	var msg = msg;
	$('#toastBody').html(msg);
	const toastLiveExample = document.getElementById('liveToast');
	const toast = new bootstrap.Toast(toastLiveExample);

    toast.show();
}