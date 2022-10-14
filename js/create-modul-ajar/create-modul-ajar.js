$(document).ready( function () {
    $('#tableModul').DataTable();
} );
var materi = 1;
$('#addMateri').click(function(){
	materi = materi+1;
	$('#inputs').append('<div class="input-group flex-nowrap mb-3 mt-3 input-materi" id="inputMateri'+materi+'"><span class="input-group-text" id="addon-wrapping'+materi+'">'+materi+
		'</span><input type="text" class="form-control" placeholder="Materi '+materi+'" aria-label="Username" aria-describedby="addon-wrapping" name="materi'+materi+
		'" id="input'+materi+'"><button class="btn btn-danger" type="button" data-no="'+materi+'" id="button-addon2'+materi+'" onclick="hapusMateri(this);">Hapus</button></div>');
});

function hapusMateri(id){
	var total_inputs = $('.input-materi').length;
	if(total_inputs==1){
		alert("Minimal 1 materi");
	}else{
		var no = $(id).data('no');
		$('#inputMateri'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping'+i).html(i-1);
			$('#input'+i).attr('placeholder', 'Materi '+(i-1));
			$('#input'+i).attr('name', 'materi'+(i-1));
			$('#inputMateri'+i).attr('id','inputMateri'+(i-1));
			$('#inputMateri'+i).attr('id','addon-wrapping'+(i-1));
			$('#input'+i).attr('id','input'+(i-1));
			$('#button-addon2'+i).attr('data-no',(i-1));

		}
	}
	
}