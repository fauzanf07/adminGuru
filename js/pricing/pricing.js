$(document).ready( function () {
    $('#paymentTable').DataTable();
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
    $('#amount').val(amount);
    $('#totalAmount').html(amount);
}