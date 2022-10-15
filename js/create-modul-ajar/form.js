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
			$('#button-addon2'+i).attr('data-no',(i-1));
			$('#inputMateri'+i).attr('id','inputMateri'+(i-1));
			$('#addon-wrapping'+i).attr('id','addon-wrapping'+(i-1));
			$('#input'+i).attr('id','input'+(i-1));
			$('#button-addon2'+i).attr('id','button-addon2'+(i-1));

		}
		materi = $('.input-materi').length;
	}
	
}

var ka = 1;
$('#addKA').click(function(){
	ka = ka+1;
	$('#inputs-ka').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ka" id="inputKA'+ka+
		'"><span class="input-group-text" id="addon-wrapping-ka'+ka+'">'+ka+'</span><input type="text" class="form-control" placeholder="Kompetensi Awal '+ka+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="ka'+ka+'" id="inputKa'+ka+'"><button class="btn btn-danger" id="button-addon2-ka'+ka+'"  type="button" data-ka="'
		+ka+'" onclick="hapusKA(this);">Hapus</button></div>');
});

function hapusKA(id){
	var total_inputs = $('.input-ka').length;
	if(total_inputs==1){
		alert("Minimal 1 kompetensi awal");
	}else{
		var no = $(id).data('ka');
		$('#inputKA'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-ka'+i).html(i-1);
			$('#inputKa'+i).attr('placeholder', 'Kompetensi Awal '+(i-1));
			$('#inputKa'+i).attr('name', 'ka'+(i-1));
			$('#button-addon2-ka'+i).attr('data-ka',(i-1));
			$('#inputKA'+i).attr('id','inputKA'+(i-1));
			$('#addon-wrapping-ka'+i).attr('id','addon-wrapping-ka'+(i-1));
			$('#inputKa'+i).attr('id','inputKa'+(i-1));
			$('#button-addon2-ka'+i).attr('id','button-addon2-ka'+(i-1));
		}
		ka = $('.input-ka').length;
	}	
}

var pp = 1;
$('#addPP').click(function(){
	pp = pp+1;
	$('#inputs-pp').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pp" id="inputPP'+pp+
		'"><span class="input-group-text" id="addon-wrapping-pp'+pp+'">'+pp+'</span><input type="text" class="form-control" placeholder="Profil '+pp+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="pp'+pp+'" id="inputPp'+pp+'"><button class="btn btn-danger" id="button-addon2-pp'+pp+'"  type="button" data-pp="'
		+pp+'" onclick="hapusPP(this);">Hapus</button></div>');
});

function hapusPP(id){
	var total_inputs = $('.input-pp').length;
	if(total_inputs==1){
		alert("Minimal 1 Profil Pancasila");
	}else{
		var no = $(id).data('pp');
		$('#inputPP'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-pp'+i).html(i-1);
			$('#inputPp'+i).attr('placeholder', 'Profil '+(i-1));
			$('#inputPp'+i).attr('name', 'pp'+(i-1));
			$('#button-addon2-pp'+i).attr('data-pp',(i-1));
			$('#inputPP'+i).attr('id','inputPP'+(i-1));
			$('#addon-wrapping-pp'+i).attr('id','addon-wrapping-pp'+(i-1));
			$('#inputPp'+i).attr('id','inputPp'+(i-1));
			$('#button-addon2-pp'+i).attr('id','button-addon2-pp'+(i-1));
		}
		pp = $('.input-pp').length;
	}	
}

var tp = 1;
$('#addTP').click(function(){
	tp = tp+1;
	$('#inputs-tp').append('<div class="input-group flex-nowrap mb-3 mt-3 input-tp" id="inputTP'+tp+
		'"><span class="input-group-text" id="addon-wrapping-tp'+tp+'">'+tp+'</span><input type="text" class="form-control" placeholder="Tujuan Pembelajaran '+tp+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="tp'+tp+'" id="inputTp'+tp+'"><button class="btn btn-danger" id="button-addon2-tp'+tp+'"  type="button" data-tp="'
		+tp+'" onclick="hapusTP(this);">Hapus</button></div>');
});

function hapusTP(id){
	var total_inputs = $('.input-tp').length;
	if(total_inputs==1){
		alert("Minimal 1 Tujuan Pembelajaran");
	}else{
		var no = $(id).data('tp');
		$('#inputTP'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-tp'+i).html(i-1);
			$('#inputTp'+i).attr('placeholder', 'Tujuan Pembelajaran '+(i-1));
			$('#inputTp'+i).attr('name', 'tp'+(i-1));
			$('#button-addon2-tp'+i).attr('data-tp',(i-1));
			$('#inputTP'+i).attr('id','inputTP'+(i-1));
			$('#addon-wrapping-tp'+i).attr('id','addon-wrapping-tp'+(i-1));
			$('#inputTp'+i).attr('id','inputTp'+(i-1));
			$('#button-addon2-tp'+i).attr('id','button-addon2-tp'+(i-1));
		}
		tp = $('.input-tp').length;
	}	
}

var pb = 1;
$('#addPB').click(function(){
	pb = pb+1;
	$('#inputs-pb').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pb" id="inputPB'+pb+
		'"><span class="input-group-text" id="addon-wrapping-pb'+pb+'">'+pb+'</span><input type="text" class="form-control" placeholder="Pemahaman Bermakna '+pb+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="pb'+pb+'" id="inputPb'+pb+'"><button class="btn btn-danger" id="button-addon2-pb'+pb+'"  type="button" data-pb="'
		+pb+'" onclick="hapusPB(this);">Hapus</button></div>');
});

function hapusPB(id){
	var total_inputs = $('.input-pb').length;
	if(total_inputs==1){
		alert("Minimal 1 Pemahaman Bermakna");
	}else{
		var no = $(id).data('pb');
		$('#inputPB'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-pb'+i).html(i-1);
			$('#inputPb'+i).attr('placeholder', 'Pemahaman Bermakna '+(i-1));
			$('#inputPb'+i).attr('name', 'pb'+(i-1));
			$('#button-addon2-pb'+i).attr('data-pb',(i-1));
			$('#inputPB'+i).attr('id','inputPB'+(i-1));
			$('#addon-wrapping-pb'+i).attr('id','addon-wrapping-pb'+(i-1));
			$('#inputPb'+i).attr('id','inputPb'+(i-1));
			$('#button-addon2-pb'+i).attr('id','button-addon2-pb'+(i-1));
		}
		pb = $('.input-pb').length;
	}	
}

var perpem = 1;
$('#addPERPEM').click(function(){
	perpem = perpem+1;
	$('#inputs-perpem').append('<div class="input-group flex-nowrap mb-3 mt-3 input-perpem" id="inputPERPEM'+perpem+
		'"><span class="input-group-text" id="addon-wrapping-perpem'+perpem+'">'+perpem+'</span><input type="text" class="form-control" placeholder="Pertanyaan Pemantik '+perpem+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="perpem'+perpem+'" id="inputPerpem'+perpem+'"><button class="btn btn-danger" id="button-addon2-perpem'+perpem+'"  type="button" data-perpem="'
		+perpem+'" onclick="hapusPERPEM(this);">Hapus</button></div>');
});

function hapusPERPEM(id){
	var total_inputs = $('.input-perpem').length;
	if(total_inputs==1){
		alert("Minimal 1 Pertanyaan Pemantik");
	}else{
		var no = $(id).data('perpem');
		$('#inputPERPEM'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-perpem'+i).html(i-1);
			$('#inputPerpem'+i).attr('placeholder', 'Pertanyaan Pemantik '+(i-1));
			$('#inputPerpem'+i).attr('name', 'perpem'+(i-1));
			$('#button-addon2-perpem'+i).attr('data-perpem',(i-1));
			$('#inputPERPEM'+i).attr('id','inputPERPEM'+(i-1));
			$('#addon-wrapping-perpem'+i).attr('id','addon-wrapping-perpem'+(i-1));
			$('#inputPerpem'+i).attr('id','inputPerpem'+(i-1));
			$('#button-addon2-perpem'+i).attr('id','button-addon2-perpem'+(i-1));
		}
		perpem = $('.input-perpem').length;
	}	
}

var perpemb = 1;
$('#addPERPEMB').click(function(){
	perpemb = perpemb+1;
	$('#inputs-perpemb').append('<div class="input-group flex-nowrap mb-3 mt-3 input-perpemb" id="inputPERPEMB'+perpemb+
		'"><span class="input-group-text" id="addon-wrapping-perpemb'+perpemb+'">'+perpemb+'</span><input type="text" class="form-control" placeholder="Persiapan Pembelajaran '+perpemb+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="perpemb'+perpemb+'" id="inputPerpemb'+perpemb+'"><button class="btn btn-danger" id="button-addon2-perpemb'+perpemb+'"  type="button" data-perpemb="'
		+perpemb+'" onclick="hapusPERPEMB(this);">Hapus</button></div>');
});

function hapusPERPEMB(id){
	var total_inputs = $('.input-perpemb').length;
	if(total_inputs==1){
		alert("Minimal 1 Persiapan Pembelajaran");
	}else{
		var no = $(id).data('perpemb');
		$('#inputPERPEMB'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-perpemb'+i).html(i-1);
			$('#inputPerpemb'+i).attr('placeholder', 'Persiapan Pembelajaran '+(i-1));
			$('#inputPerpemb'+i).attr('name', 'perpemb'+(i-1));
			$('#button-addon2-perpemb'+i).attr('data-perpemb',(i-1));
			$('#inputPERPEMB'+i).attr('id','inputPERPEMB'+(i-1));
			$('#addon-wrapping-perpemb'+i).attr('id','addon-wrapping-perpemb'+(i-1));
			$('#inputPerpemb'+i).attr('id','inputPerpemb'+(i-1));
			$('#button-addon2-perpemb'+i).attr('id','button-addon2-perpemb'+(i-1));
		}
		perpem = $('.input-perpemb').length;
	}	
}

var pend = 1;
$('#addPEND').click(function(){
	pend = pend+1;
	$('#inputs-pend').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pend" id="inputPEND'+pend+
		'"><span class="input-group-text" id="addon-wrapping-pend'+pend+'">'+pend+'</span><input type="text" class="form-control" placeholder="Kegiatan '+pend+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="pend'+pend+'" id="inputPend'+pend+'"><button class="btn btn-danger" id="button-addon2-pend'+pend+'"  type="button" data-pend="'
		+pend+'" onclick="hapusPEND(this);">Hapus</button></div>');
});

function hapusPEND(id){
	var total_inputs = $('.input-pend').length;
	if(total_inputs==1){
		alert("Minimal 1 Kegiatan");
	}else{
		var no = $(id).data('pend');
		$('#inputPEND'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-pend'+i).html(i-1);
			$('#inputPend'+i).attr('placeholder', 'Kegiatan '+(i-1));
			$('#inputPend'+i).attr('name', 'pend'+(i-1));
			$('#button-addon2-pend'+i).attr('data-pend',(i-1));
			$('#inputPEND'+i).attr('id','inputPEND'+(i-1));
			$('#addon-wrapping-pend'+i).attr('id','addon-wrapping-pend'+(i-1));
			$('#inputPend'+i).attr('id','inputPend'+(i-1));
			$('#button-addon2-pend'+i).attr('id','button-addon2-pend'+(i-1));
		}
		pend = $('.input-pend').length;
	}	
}

var inti = 1;
$('#addINTI').click(function(){
	inti = inti+1;
	$('#inputs-inti').append('<div class="input-group flex-nowrap mb-3 mt-3 input-inti" id="inputINTI'+inti+
		'"><span class="input-group-text" id="addon-wrapping-inti'+inti+'">'+inti+'</span><input type="text" class="form-control" placeholder="Kegiatan '+inti+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="inti'+inti+'" id="inputInti'+inti+'"><button class="btn btn-danger" id="button-addon2-inti'+inti+'"  type="button" data-inti="'
		+inti+'" onclick="hapusINTI(this);">Hapus</button></div>');
});

function hapusINTI(id){
	var total_inputs = $('.input-inti').length;
	if(total_inputs==1){
		alert("Minimal 1 Kegiatan");
	}else{
		var no = $(id).data('inti');
		$('#inputINTI'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-inti'+i).html(i-1);
			$('#inputInti'+i).attr('placeholder', 'Kegiatan '+(i-1));
			$('#inputInti'+i).attr('name', 'inti'+(i-1));
			$('#button-addon2-inti'+i).attr('data-inti',(i-1));
			$('#inputINTI'+i).attr('id','inputINTI'+(i-1));
			$('#addon-wrapping-inti'+i).attr('id','addon-wrapping-inti'+(i-1));
			$('#inputInti'+i).attr('id','inputInti'+(i-1));
			$('#button-addon2-inti'+i).attr('id','button-addon2-inti'+(i-1));
		}
		inti = $('.input-inti').length;
	}	
}

var penutup = 1;
$('#addPENUTUP').click(function(){
	penutup = penutup+1;
	$('#inputs-penutup').append('<div class="input-group flex-nowrap mb-3 mt-3 input-penutup" id="inputPENUTUP'+penutup+
		'"><span class="input-group-text" id="addon-wrapping-penutup'+penutup+'">'+penutup+'</span><input type="text" class="form-control" placeholder="Kegiatan '+penutup+
		'" aria-label="Username" aria-describedby="addon-wrapping" name="penutup'+penutup+'" id="inputPenutup'+penutup+'"><button class="btn btn-danger" id="button-addon2-penutup'+penutup+'"  type="button" data-penutup="'
		+penutup+'" onclick="hapusPENUTUP(this);">Hapus</button></div>');
});

function hapusPENUTUP(id){
	var total_inputs = $('.input-penutup').length;
	if(total_inputs==1){
		alert("Minimal 1 Kegiatan");
	}else{
		var no = $(id).data('penutup');
		$('#inputPENUTUP'+no).remove();
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-penutup'+i).html(i-1);
			$('#inputPenutup'+i).attr('placeholder', 'Kegiatan '+(i-1));
			$('#inputPenutup'+i).attr('name', 'penutup'+(i-1));
			$('#button-addon2-penutup'+i).attr('data-penutup',(i-1));
			$('#inputPENUTUP'+i).attr('id','inputPENUTUP'+(i-1));
			$('#addon-wrapping-penutup'+i).attr('id','addon-wrapping-penutup'+(i-1));
			$('#inputPenutup'+i).attr('id','inputPenutup'+(i-1));
			$('#button-addon2-penutup'+i).attr('id','button-addon2-penutup'+(i-1));
		}
		penutup = $('.input-penutup').length;
	}	
}