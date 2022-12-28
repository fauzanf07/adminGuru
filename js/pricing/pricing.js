function isEmpty(str) {
    return (!str || str.length === 0 );
}
$(document).ready( function () {
    $('#paymentTable').DataTable();
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
                    location.reload();
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

function checkout(id){
    var id = $(id).data('id');
    
    $.ajax({
        url: "../backend/payment/get_token.php",
        type: "POST",
        data: {
            id: id,	
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==201){
                window.snap.pay(dataResult.token, {
                    onSuccess: function(result){
                        updatePayStatus(id,2);
                        console.log(result);
                    },
                    onPending: function(result){
                      updatePayStatus(id,1);
                      console.log(result);
                    },
                    onError: function(result){
                        updatePayStatus(id,3);
                        console.log(result);
                    },
                    onClose: function(){
                    }
                  });
            }
            else if(dataResult.statusCode==202){
                Swal.fire({
                    title: 'Error!',
                    text: 'There is something wrong',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: "#d63630"
                })
            }
        }
    });
}

function updatePayStatus(id,status){
    $.ajax({
        url: "../backend/payment/update_status.php",
        type: "POST",
        data: {
            id: id,	
            status: status,
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==201){
                console.log("update success");
                location.reload();
            }
        }
    });
}

function getUpdateStatus(id){
    var orderId = $(id).data('order');
    var id = $(id).data('id');
    $.ajax({
        url: "../backend/payment/get_status.php",
        type: "POST",
        data: {
            order_id:orderId
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.status_code != 400 || dataResult.status_code!=401 || dataResult.status_code!=404){
                if(dataResult.transaction_status==="capture" || dataResult.transaction_status==="settlement"){
                    updatePayStatus(id,2);
                }else if(dataResult.transaction_status==="pending"){
                    updatePayStatus(id,1);
                }else if(dataResult.transaction_status==="deny" || dataResult.transaction_status==="cancel" || dataResult.transaction_status==="expire"){
                    updatePayStatus(id,3);
                }
            }
        }
    });
}
function updatePayStatus(id,status){
    $.ajax({
        url: "../backend/payment/update_status.php",
        type: "POST",
        data: {
            id: id,	
            status: status,
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==201){
                console.log("update success");
                location.reload();
            }
        }
    });
}

function getDetailsTrans(id){
    var orderId = $(id).data('order');
    var id = $(id).data('id');
    $.ajax({
        url: "../backend/payment/get_details.php",
        type: "POST",
        data: {
            id:id,
            order_id:orderId
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            $('#orderId').html(dataResult.status.order_id);
            $('#detailProductName').html(dataResult.pay_details.product_name);
            $('#grossAmount').html("Rp"+dataResult.status.gross_amount);
            $('#paymentType').html(dataResult.status.payment_type);
            $('#transactionTime').html(dataResult.status.transaction_time);
            if(dataResult.status.transaction_status==="capture" || dataResult.status.transaction_status==="settlement"){
                $('#transactionStatus').html("<span class='badge text-bg-success'>"+dataResult.status.transaction_status+"</span>");
            }else if(dataResult.status.transaction_status==="pending"){
                $('#transactionStatus').html("<span class='badge text-bg-warning'>"+dataResult.status.transaction_status+"</span>");
            }else if(dataResult.status.transaction_status==="deny" || dataResult.status.transaction_status==="cancel" || dataResult.transaction_status==="expire"){
                $('#transactionStatus').html("<span class='badge text-bg-danger'>"+dataResult.status.transaction_status+"</span>");
            }
            $('#statusMessage').html(dataResult.status.status_message);
            $('#detailName').html(dataResult.pay_details.name);
            $('#detailEmail').html(dataResult.pay_details.email);
            $('#detailPhoneNo').html(dataResult.pay_details.phone_no);
            $('#detailCity').html(dataResult.pay_details.city);
            $('#detailSchoolName').html(dataResult.pay_details.school_name);
            $('#detailsPayment').modal('show');
        }
    });
}
function deletePayment(id){
    var id = $(id).data('id');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#24576E',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../backend/payment/delete.php",
                type: "POST",
                data: {
                    id:id
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==201){
                        Swal.fire({
                            title: 'Success!',
                            text: 'Data pembayaran berhasil dihapus',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: "#d63630"
                        }).then((result) =>{
                            if(result.isConfirmed){
                                location.reload();
                            }
                        });
                    }
                    else if(dataResult.statusCode==202){
                        Swal.fire({
                            title: 'Error!',
                            text: 'There is something wrong',
                            icon: 'error',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: "#d63630"
                        })
                    }
                }
            });
        }
      })
}
function showToast(msg){
    $('#msg-toast').html(msg);
	const toastLiveExample = document.getElementById('showMsg');
	const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
}