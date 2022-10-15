$(document).ready( function () {
    $('#tableModul').DataTable();
} );

$('#logout').click(function(){
	window.location.href = "../backend/logout/logout.php";
});


