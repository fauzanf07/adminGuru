function isEmpty(str) {
    return (!str || str.length === 0 );
}
$(document).ready( function () {
    $('#phone').mask('+62000000000000');
} );

$(document).on("wheel", "input[type=number]", function (e) {
    $(this).blur();
});

function subscribe(id){
    const dataID = $(id).data('id');
    var productName = "";
    var amount = 0;
    switch(dataID){
        case 1:
            productName = "AdminGuru Basic";
            qty = 1;
            amount =15000;
            $("#qty").keyup(function(){
                qty = $("#qty").val();
                console.log(qty);
                if(qty<1 && !isEmpty(qty)){
                    $("#qty").val(1);
                    $('#totalAmount').html(1*amount);
                }else{
                    $('#totalAmount').html(qty*amount);
                }
                
            });
            break;
        case 2:
            productName = "AdminGuru Individual";
            qty = 1;
            $('#qty').attr('disabled','disabled');
            amount= 300000;
            break;
    }
    $('#productName').html(productName);
    $('#qty').val(qty);
    $('#amount').html(amount);
    $('#totalAmount').html(amount);
}

function addPayment(){
    const productName = $('#productName').text();
    const qty = $('#qty').val();
    const name = $('#name').val();
    const email = $('#email').val();
    const phone = $('#phone').val();
    const city = $('#city').val();
    const schoolName = $('#schoolName').val();

    if(validateForm(qty,phone,city,schoolName)){
        $.ajax({
            url: "../backend/payment/add.php",
            type: "POST",
            data: {
                productName: productName,
                qty: qty,
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

function validateForm(qty,phone,city,schoolName){
    var res = false;
    var msg = "Terdapat input yang belum diisi";
    if(isEmpty(qty) ||isEmpty(phone) || isEmpty(city) || isEmpty(schoolName)){
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

function redeemVoucher(){
    const voucCode = $('#voucherCode').val();
    if(!isEmpty(voucCode)){
        $.ajax({
            url: "../backend/voucher/redeem.php",
            type: "POST",
            data: {
                voucCode: voucCode	
            },
            cache: false,
            success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==201){
                    Swal.fire({
                        title: 'Success!',
                        text: 'Kode voucher berhasil diredeem',
                        icon: 'success',
                        confirmButtonText: 'Ok',
                        confirmButtonColor: "#d63630"
                    }).then((result) =>{
                        if(result.isConfirmed){
                            location.reload();
                        }});
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
                    Swal.fire({
                        title: 'Error!',
                        text: 'Voucher sudah kadaluwarsa',
                        icon: 'error',
                        confirmButtonText: 'Ok',
                        confirmButtonColor: "#d63630"
                    })
                }else if(dataResult.statusCode==204){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Kode voucher yang anda masukan salah',
                        icon: 'error',
                        confirmButtonText: 'Ok',
                        confirmButtonColor: "#d63630"
                    })
                }else if(dataResult.statusCode==205){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Kode voucher yang anda masukan sudah digunakan',
                        icon: 'error',
                        confirmButtonText: 'Ok',
                        confirmButtonColor: "#d63630"
                    })
                }
            }
        });
    }
}