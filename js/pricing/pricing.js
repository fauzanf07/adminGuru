function isEmpty(str) {
    return (!str || str.length === 0 );
}
$(document).ready( function () {
    $('#phone').mask('+62000000000000');
} );

function subscribe(id){
    const dataID = $(id).data('id');
    var productName = "";
    var amount = 0;
    switch(dataID){
        case 1:
            productName = "AdminGuru Starter";
            amount =0;
            break;
        case 2:
            productName = "AdminGuru Basic";
            amount= 500000;
            break;
        case 3:
            productName = "AdminGuru Professional";
            amount = 1000000;
            break;
    }
    $('#productName').html(productName);
    $('#amount').html(amount);
    $('#totalAmount').html(amount);
}

function addPayment(){
    const productName = $('#productName').text();
    const name = $('#name').val();
    const email = $('#email').val();
    const phone = $('#phone').val();
    const city = $('#city').val();
    const schoolName = $('#schoolName').val();

    if(validateForm(phone,city,schoolName)){
        $.ajax({
            url: "../backend/payment/add.php",
            type: "POST",
            data: {
                productName: productName,
                name: name,
                email: email,
                phone: phone,
                city: city,
                schoolName: schoolName		
            },
            cache: false,
            success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==201){
                    window.location.href = "../payment";
                }
                else if(dataResult.statusCode==202){
                    Swal.fire({
						title: 'Error!',
						text: 'There is something wrong',
						icon: 'error',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					})
                }else if(dataResult.statusCode==203){
                    var msg = "Anda hanya boleh menambah satu pembayaran";
                    showToast(msg);
                }else{
                    var msg = "Tidak bisa menambah pembayaran karena akun anda masih berlangganan";
                    showToast(msg);
                }
            }
        });
    }
}

function validateForm(phone,city,schoolName){
    var res = false;
    var msg = "Terdapat input yang belum diisi";
    if(isEmpty(phone) || isEmpty(city) || isEmpty(schoolName)){
        res= false;
		showToast(msg);
    }else{
        res = true;
    }
    return res;
}

function showToast(msg){
    $('#msg-toast').html(msg);
	const toastLiveExample = document.getElementById('showMsg');
	const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
}