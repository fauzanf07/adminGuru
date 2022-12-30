$(document).ready( function () {
    $('#paymentTable').DataTable();
} );

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