function isEmpty(str) {
    return (!str || str.length === 0 );
}
$('#submit').click(function(){
	var email = $('#inputEmail').val();
    var pass = $('#inputPassword').val();
    var confPass = $('#inputConfirmPassword').val();
    if(!isEmpty(email) && !isEmpty(pass) && !isEmpty(confPass)){
        if(pass !== confPass){
            $('#toastBody').html("Password dan Konfirmasi Password tidak sesuai");
            const toastLiveExample = document.getElementById('liveToast');
            const toast = new bootstrap.Toast(toastLiveExample);
    
            toast.show();
        }else{
            $.ajax({
                url: '../backend/reset-password/reset.php',
                type: 'POST',
                data: {
                    email: email,
                    pass: pass		
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    console.log(dataResult);
                    if(dataResult.statusCode==201){
                        Swal.fire({
                            title: 'Success!',
                            text: 'Ganti kata sandi berhasil',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: "#d63630"
                        }).then((result) =>{
                            if(result.isConfirmed){
                                window.location.href = "../login/";
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
                        });
                    }
                },
           });
        }

    }else{
        $('#toastBody').html("Ada input yang belum diisi. Silahkan isi terlebih dahulu!");
        const toastLiveExample = document.getElementById('liveToast');
        const toast = new bootstrap.Toast(toastLiveExample);

        toast.show();
    }
})