function isEmpty(str) {
    return (!str || str.length === 0 );
}
var idMateri =0;
if(Cookies.get('jmlMateri') !== undefined){
	idMateri = parseInt(Cookies.get('jmlMateri'));
}

function addMateri(){
	var materi = $('#materi-input').val();
	console.log('halo');

	if(!isEmpty(materi)){
		if(idMateri==0){
			$('#list-kosong-materi').remove();
		}
		idMateri = idMateri+1;
		Cookies.set('materi'+idMateri, materi);
		Cookies.set('jmlMateri',idMateri);
		$('#inputs-materi').append('<div class="input-group flex-nowrap mb-3 mt-3 input-materi" id="inputMATERI'+idMateri+
			'"><span class="input-group-text" id="addon-wrapping-materi'+idMateri+'">'+idMateri+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="materi'+idMateri+'" id="inputMateri'+idMateri+'" value="'+materi+'" disabled><button class="btn btn-danger" id="button-addon2-materi'+idMateri+'"  type="button" data-materi="'
			+idMateri+'" onclick="hapusMATERI(this);">Hapus</button></div>');
		$('#materi-input').val('');
	}
}

function hapusMATERI(id){
	var total_inputs = $('.input-materi').length;
	if(total_inputs==1){
		alert("Minimal 1 Materi");
	}else{
		var no = $(id).data('materi');
		$('#inputMATERI'+no).remove();
		Cookies.remove('materi'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-materi'+i).html(i-1);
			$('#inputMateri'+i).attr('name', 'media'+(i-1));
			$('#button-addon2-materi'+i).attr('data-materi',(i-1));
			$('#inputMATERI'+i).attr('id','inputMATERI'+(i-1));
			$('#addon-wrapping-materi'+i).attr('id','addon-wrapping-materi'+(i-1));
			$('#inputMateri'+i).attr('id','inputMateri'+(i-1));
			$('#button-addon2-materi'+i).attr('id','button-addon2-materi'+(i-1));
			Cookies.set('materi'+(i-1),Cookies.get('materi'+i));
		}
		idMateri = $('.input-materi').length;
		Cookies.set('jmlMateri',idMateri);
	}	
}


var ka = 1;
if(Cookies.get('jmlKa') !== undefined){
	ka = parseInt(Cookies.get('jmlKa'));
}
function keyUpKA(e){
	id = $(e).attr('id');
	val = $(e).val();
	Cookies.set('jmlKa',ka);
	Cookies.set(id,val);
}
$('#addKA').click(function(){
	ka = ka+1;
	$('#inputs-ka').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ka" id="inputKA'+ka+
		'"><span class="input-group-text" id="addon-wrapping-ka'+ka+'">'+ka+'</span><input type="text" class="form-control" placeholder="Kompetensi Awal '+ka+
		'" aria-label="Username" aria-describedby="addon-wrapping"  id="inputKa'+ka+'" onkeyup="keyUpKA(this)"><button class="btn btn-danger" id="button-addon2-ka'+ka+'"  type="button" data-ka="'
		+ka+'" onclick="hapusKA(this);">Hapus</button></div>');
});

function hapusKA(id){
	var total_inputs = $('.input-ka').length;
	if(total_inputs==1){
		alert("Minimal 1 kompetensi awal");
	}else{
		var no = $(id).data('ka');
		$('#inputKA'+no).remove();
		Cookies.remove('inputKa'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-ka'+i).html(i-1);
			$('#inputKa'+i).attr('name', 'ka'+(i-1));
			$('#button-addon2-ka'+i).attr('data-ka',(i-1));
			$('#inputKA'+i).attr('id','inputKA'+(i-1));
			$('#inputKa'+i).attr('placeholder','Kompetensi Awal '+(i-1));
			$('#addon-wrapping-ka'+i).attr('id','addon-wrapping-ka'+(i-1));
			$('#inputKa'+i).attr('id','inputKa'+(i-1));
			$('#button-addon2-ka'+i).attr('id','button-addon2-ka'+(i-1));
			Cookies.set('inputKa'+(i-1),Cookies.get('inputKa'+i));
		}
		ka = $('.input-ka').length;
		Cookies.set('jmlKa',ka);
	}	
}

var pp = 0;
if(Cookies.get('jmlPp') !== undefined){
	pp = parseInt(Cookies.get('jmlPp'));
}
function addPP(){
	var isiPP = $('#pp-input').val();

	if(!isEmpty(isiPP)){
		if(pp==0){
			$('#list-kosong-pp').remove();
		}
		pp = pp+1;
		Cookies.set('pp'+pp, isiPP);
		Cookies.set('jmlPp',pp);
		$('#inputs-pp').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pp" id="inputPP'+pp+
			'"><span class="input-group-text" id="addon-wrapping-pp'+pp+'">'+pp+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="pp'+pp+'" id="inputPp'+pp+'" value="'+isiPP+'" disabled><button class="btn btn-danger" id="button-addon2-pp'+pp+'"  type="button" data-pp="'
			+pp+'" onclick="hapusPP(this);">Hapus</button></div>');

		$('#pp-input').val('');
	}
};

function hapusPP(id){
	var total_inputs = $('.input-pp').length;
	if(total_inputs==1){
		alert("Minimal 1 Profil Pancasila");
	}else{
		var no = $(id).data('pp');
		$('#inputPP'+no).remove();
		Cookies.remove('pp'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-pp'+i).html(i-1);
			$('#inputPp'+i).attr('placeholder', 'Profil '+(i-1));
			$('#inputPp'+i).attr('name', 'pp'+(i-1));
			$('#button-addon2-pp'+i).attr('data-pp',(i-1));
			$('#inputPP'+i).attr('id','inputPP'+(i-1));
			$('#addon-wrapping-pp'+i).attr('id','addon-wrapping-pp'+(i-1));
			$('#inputPp'+i).attr('id','inputPp'+(i-1));
			$('#button-addon2-pp'+i).attr('id','button-addon2-pp'+(i-1));
			Cookies.set('pp'+(i-1),Cookies.get('pp'+i));
		}
		pp = $('.input-pp').length;
		Cookies.set('jmlPp',pp);
	}	
}

var idMedia = 0;
if(Cookies.get('jmlMedia') !== undefined){
	idMedia = parseInt(Cookies.get('jmlMedia'));
}
function addMedia(){
	var media = $('#media-input').val();

	if(!isEmpty(media)){
		if(idMedia==0){
			$('#list-kosong-media').remove();
		}
		idMedia = idMedia+1;
		Cookies.set('media'+idMedia, media);
		Cookies.set('jmlMedia',idMedia);
		$('#inputs-media').append('<div class="input-group flex-nowrap mb-3 mt-3 input-media" id="inputMEDIA'+idMedia+
			'"><span class="input-group-text" id="addon-wrapping-media'+idMedia+'">'+idMedia+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="media'+idMedia+'" id="inputMedia'+idMedia+'" value="'+media+'" disabled><button class="btn btn-danger" id="button-addon2-media'+idMedia+'"  type="button" data-media="'
			+idMedia+'" onclick="hapusMEDIA(this);">Hapus</button></div>');
		 $('#media-input').val('');
	}
}

function hapusMEDIA(id){
	var total_inputs = $('.input-media').length;
	if(total_inputs==1){
		alert("Minimal 1 Media Pembelajaran");
	}else{
		var no = $(id).data('media');
		$('#inputMEDIA'+no).remove();
		Cookies.remove('media'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-media'+i).html(i-1);
			$('#inputMedia'+i).attr('name', 'media'+(i-1));
			$('#button-addon2-media'+i).attr('data-media',(i-1));
			$('#inputMEDIA'+i).attr('id','inputMEDIA'+(i-1));
			$('#addon-wrapping-media'+i).attr('id','addon-wrapping-media'+(i-1));
			$('#inputMedia'+i).attr('id','inputMedia'+(i-1));
			$('#button-addon2-media'+i).attr('id','button-addon2-media'+(i-1));
			Cookies.set('media'+(i-1),Cookies.get('media'+i));
		}
		idMedia = $('.input-media').length;
		Cookies.set('jmlMedia',idMedia);
	}	
}

var idSumber = 0;
if(Cookies.get('jmlSumber') !== undefined){
	idSumber = parseInt(Cookies.get('jmlSumber'));
}
function addSumber(){
	var sumber = $('#sumber-input').val();
	if(!isEmpty(sumber)){	
		if(idSumber==0){
			$('#list-kosong-sumber').remove();
		}
		idSumber = idSumber+1;
		Cookies.set('sumber'+idSumber, sumber);
		Cookies.set('jmlSumber',idSumber);
		$('#inputs-sumber').append('<div class="input-group flex-nowrap mb-3 mt-3 input-sumber" id="inputSUMBER'+idSumber+
			'"><span class="input-group-text" id="addon-wrapping-sumber'+idSumber+'">'+idSumber+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="sumber'+idSumber+'" id="inputSumber'+idSumber+'" value="'+sumber+'" disabled><button class="btn btn-danger" id="button-addon2-sumber'+idSumber+'"  type="button" data-sumber="'
			+idSumber+'" onclick="hapusSUMBER(this);">Hapus</button></div>');
		$('#sumber-input').val('');
	}
}

function hapusSUMBER(id){
	var total_inputs = $('.input-sumber').length;
	if(total_inputs==1){
		alert("Minimal 1 Sumber Belajar");
	}else{
		var no = $(id).data('sumber');
		$('#inputSUMBER'+no).remove();
		Cookies.remove('sumber'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-sumber'+i).html(i-1);
			$('#inputSumber'+i).attr('name', 'sumber'+(i-1));
			$('#button-addon2-sumber'+i).attr('data-sumber',(i-1));
			$('#inputSUMBER'+i).attr('id','inputSUMBER'+(i-1));
			$('#addon-wrapping-sumber'+i).attr('id','addon-wrapping-sumber'+(i-1));
			$('#inputSumber'+i).attr('id','inputSumber'+(i-1));
			$('#button-addon2-sumber'+i).attr('id','button-addon2-sumber'+(i-1));
			Cookies.set('sumber'+(i-1),Cookies.get('sumber'+i));
		}
		idSumber = $('.input-sumber').length;
		Cookies.set('jmlSumber',idSumber);
	}	
}

var idTp = 0;
if(Cookies.get('jmlTp') !== undefined){
	idTp = parseInt(Cookies.get('jmlTp'));
}
function addTP(){
	var tp = $('#tp-input').val();
	if(!isEmpty(tp)){	
		if(idTp==0){
			$('#list-kosong-tp').remove();
		}
		idTp = idTp+1;
		Cookies.set('tp'+idTp, tp);
		Cookies.set('jmlTp',idTp);
		$('#inputs-tp').append('<div class="input-group flex-nowrap mb-3 mt-3 input-tp" id="inputTP'+idTp+
			'"><span class="input-group-text" id="addon-wrapping-tp'+idTp+'">'+idTp+'</span><textarea class="form-control" name="tp'+idTp+'" id="inputTp'+idTp+'" rows="2" disabled>'+tp+'</textarea><button class="btn btn-danger" id="button-addon2-tp'+idTp+'"  type="button" data-tp="'
			+idTp+'" onclick="hapusTP(this);">Hapus</button></div>');
		$('#tp-input').val('');
	}
}


function hapusTP(id){
	var total_inputs = $('.input-tp').length;
	if(total_inputs==1){
		alert("Minimal 1 Tujuan Pembelajaran");
	}else{
		var no = $(id).data('tp');
		$('#inputTP'+no).remove();
		Cookies.remove('tp'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-tp'+i).html(i-1);
			$('#inputTp'+i).attr('name', 'tp'+(i-1));
			$('#button-addon2-tp'+i).attr('data-tp',(i-1));
			$('#inputTP'+i).attr('id','inputTP'+(i-1));
			$('#addon-wrapping-tp'+i).attr('id','addon-wrapping-tp'+(i-1));
			$('#inputTp'+i).attr('id','inputTp'+(i-1));
			$('#button-addon2-tp'+i).attr('id','button-addon2-tp'+(i-1));
			Cookies.set('tp'+(i-1),Cookies.get('tp'+i));
		}
		idTp = $('.input-tp').length;
		Cookies.set('jmlTp',idTp);
	}	
}

var pb = 1;
if(Cookies.get('jmlPb') !== undefined){
	pb = parseInt(Cookies.get('jmlPb'));
}
function keyUpPB(e){
	id = $(e).attr('id');
	val = $(e).val();
	Cookies.set('jmlPb',pb);
	Cookies.set(id,val);
}
$('#addPB').click(function(){
	pb = pb+1;
	$('#inputs-pb').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pb" id="inputPB'+pb+
		'"><span class="input-group-text" id="addon-wrapping-pb'+pb+'">'+pb+'</span><input type="text" class="form-control" placeholder="Pemahaman Bermakna '+pb+
		'" aria-label="Username" aria-describedby="addon-wrapping"  id="inputPb'+pb+'" onkeyup="keyUpPB(this)"><button class="btn btn-danger" id="button-addon2-pb'+pb+'"  type="button" data-pb="'
		+pb+'" onclick="hapusPB(this);">Hapus</button></div>');
});

function hapusPB(id){
	var total_inputs = $('.input-pb').length;
	if(total_inputs==1){
		alert("Minimal 1 Pemahaman Bermakna");
	}else{
		var no = $(id).data('pb');
		$('#inputPB'+no).remove();
		Cookies.remove('inputPb'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-pb'+i).html(i-1);
			$('#inputPb'+i).attr('placeholder', 'Pemahaman Bermakna '+(i-1));
			$('#inputPb'+i).attr('name', 'pb'+(i-1));
			$('#button-addon2-pb'+i).attr('data-pb',(i-1));
			$('#inputPB'+i).attr('id','inputPB'+(i-1));
			$('#addon-wrapping-pb'+i).attr('id','addon-wrapping-pb'+(i-1));
			$('#inputPb'+i).attr('id','inputPb'+(i-1));
			$('#button-addon2-pb'+i).attr('id','button-addon2-pb'+(i-1));
			Cookies.set('inputPb'+(i-1),Cookies.get('inputPb'+i));
		}
		pb = $('.input-pb').length;
		Cookies.set('jmlPb',pb);
	}	
}

var perpem = 1;
if(Cookies.get('jmlPerpem') !== undefined){
	perpem = parseInt(Cookies.get('jmlPerpem'));
}
function keyUpPerpem(e){
	id = $(e).attr('id');
	val = $(e).val();
	Cookies.set('jmlPerpem',perpem);
	Cookies.set(id,val);
}
$('#addPERPEM').click(function(){
	perpem = perpem+1;
	$('#inputs-perpem').append('<div class="input-group flex-nowrap mb-3 mt-3 input-perpem" id="inputPERPEM'+perpem+
		'"><span class="input-group-text" id="addon-wrapping-perpem'+perpem+'">'+perpem+'</span><input type="text" class="form-control" placeholder="Pertanyaan Pemantik '+perpem+
		'" aria-label="Username" aria-describedby="addon-wrapping" id="inputPerpem'+perpem+'" onkeyup="keyUpPerpem(this)"><button class="btn btn-danger" id="button-addon2-perpem'+perpem+'"  type="button" data-perpem="'
		+perpem+'" onclick="hapusPERPEM(this);">Hapus</button></div>');
});

function hapusPERPEM(id){
	var total_inputs = $('.input-perpem').length;
	if(total_inputs==1){
		alert("Minimal 1 Pertanyaan Pemantik");
	}else{
		var no = $(id).data('perpem');
		$('#inputPERPEM'+no).remove();
		Cookies.remove('inputPerpem'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-perpem'+i).html(i-1);
			$('#inputPerpem'+i).attr('placeholder', 'Pertanyaan Pemantik '+(i-1));
			$('#inputPerpem'+i).attr('name', 'perpem'+(i-1));
			$('#button-addon2-perpem'+i).attr('data-perpem',(i-1));
			$('#inputPERPEM'+i).attr('id','inputPERPEM'+(i-1));
			$('#addon-wrapping-perpem'+i).attr('id','addon-wrapping-perpem'+(i-1));
			$('#inputPerpem'+i).attr('id','inputPerpem'+(i-1));
			$('#button-addon2-perpem'+i).attr('id','button-addon2-perpem'+(i-1));
			Cookies.set('inputPerpem'+(i-1),Cookies.get('inputPerpem'+i));
		}
		perpem = $('.input-perpem').length;
		Cookies.set('jmlPerpem',perpem);
	}	
}

var idPerpemb = 0;
if(Cookies.get('jmlPerpemb') !== undefined){
	idPerpemb = parseInt(Cookies.get('jmlPerpemb'));
}
function addPerpemb(){
	var perpemb = $('#perpemb-input').val();
	if(!isEmpty(perpemb)){	
		if(idPerpemb==0){
			$('#list-kosong-perpemb').remove();
		}
		idPerpemb = idPerpemb+1;
		Cookies.set('perpemb'+idPerpemb, perpemb);
		Cookies.set('jmlPerpemb',idPerpemb);
		$('#inputs-perpemb').append('<div class="input-group flex-nowrap mb-3 mt-3 input-perpemb" id="inputPERPEMB'+idPerpemb+
			'"><span class="input-group-text" id="addon-wrapping-perpemb'+idPerpemb+'">'+idPerpemb+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="perpemb'+idPerpemb+'" id="inputPerpemb'+idPerpemb+'" value="'+perpemb+'" disabled><button class="btn btn-danger" id="button-addon2-perpemb'+idPerpemb+'"  type="button" data-perpemb="'
			+idPerpemb+'" onclick="hapusPERPEMB(this);">Hapus</button></div>');
		$('#perpemb-input').val('');
	}
}

function hapusPERPEMB(id){
	var total_inputs = $('.input-perpemb').length;
	if(total_inputs==1){
		alert("Minimal 1 Persiapan Pembelajaran");
	}else{
		var no = $(id).data('perpemb');
		$('#inputPERPEMB'+no).remove();
		Cookies.remove('perpemb'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-perpemb'+i).html(i-1);
			$('#inputPerpemb'+i).attr('name', 'perpemb'+(i-1));
			$('#button-addon2-perpemb'+i).attr('data-perpemb',(i-1));
			$('#inputPERPEMB'+i).attr('id','inputPERPEMB'+(i-1));
			$('#addon-wrapping-perpemb'+i).attr('id','addon-wrapping-perpemb'+(i-1));
			$('#inputPerpemb'+i).attr('id','inputPerpemb'+(i-1));
			$('#button-addon2-perpemb'+i).attr('id','button-addon2-perpemb'+(i-1));
			Cookies.set('perpemb'+(i-1),Cookies.get('perpemb'+i));
		}
		idPerpemb = $('.input-perpemb').length;
		Cookies.set('jmlPerpemb',idPerpemb);
	}	
}

var idPend = 0;
if(Cookies.get('jmlPend') !== undefined){
	idPend = parseInt(Cookies.get('jmlPend'));
}
function addPEND(){
	var pend = $('#pend-input').val();
	if(!isEmpty(pend)){	
		if(idPend==0){
			$('#list-kosong-pend').remove();
		}
		idPend = idPend+1;
		Cookies.set('pend'+idPend, pend);
		Cookies.set('jmlPend',idPend);
		$('#inputs-pend').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pend" id="inputPEND'+idPend+
			'"><span class="input-group-text" id="addon-wrapping-pend'+idPend+'">'+idPend+'</span><textarea class="form-control" name="pend'+idPend+'" id="inputPend'+idPend+'" rows="2" disabled>'+pend+'</textarea><button class="btn btn-danger" id="button-addon2-pend'+idPend+'"  type="button" data-pend="'
			+idPend+'" onclick="hapusPEND(this);">Hapus</button></div>');
		$('#pend-input').val('');
	}
}

function hapusPEND(id){
	var total_inputs = $('.input-pend').length;
	if(total_inputs==1){
		alert("Minimal 1 Kegiatan");
	}else{
		var no = $(id).data('pend');
		$('#inputPEND'+no).remove();
		Cookies.remove('pend'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-pend'+i).html(i-1);
			$('#inputPend'+i).attr('name', 'pend'+(i-1));
			$('#button-addon2-pend'+i).attr('data-pend',(i-1));
			$('#inputPEND'+i).attr('id','inputPEND'+(i-1));
			$('#addon-wrapping-pend'+i).attr('id','addon-wrapping-pend'+(i-1));
			$('#inputPend'+i).attr('id','inputPend'+(i-1));
			$('#button-addon2-pend'+i).attr('id','button-addon2-pend'+(i-1));
			Cookies.set('pend'+(i-1),Cookies.get('pend'+i));
		}
		idPend = $('.input-pend').length;
		Cookies.set('jmlPend',idPend);
	}	
}

var idInti = 0;
if(Cookies.get('jmlInti') !== undefined){
	idInti = parseInt(Cookies.get('jmlInti'));
}
function addINTI(){
	var inti = $('#inti-input').val();
	if(!isEmpty(inti)){	
		if(idInti==0){
			$('#list-kosong-inti').remove();
		}
		idInti = idInti+1;
		Cookies.set('inti'+idInti, inti);
		Cookies.set('jmlInti',idInti);
		$('#inputs-inti').append('<div class="input-group flex-nowrap mb-3 mt-3 input-inti" id="inputINTI'+idInti+
			'"><span class="input-group-text" id="addon-wrapping-inti'+idInti+'">'+idInti+'</span><textarea class="form-control" name="inti'+idInti+'" id="inputInti'+idInti+'" rows="2" disabled>'+inti+'</textarea><button class="btn btn-danger" id="button-addon2-inti'+idInti+'"  type="button" data-inti="'
			+idInti+'" onclick="hapusINTI(this);">Hapus</button></div>');
		$('#inti-input').val('');
	}
}

function hapusINTI(id){
	var total_inputs = $('.input-inti').length;
	if(total_inputs==1){
		alert("Minimal 1 Kegiatan");
	}else{
		var no = $(id).data('inti');
		$('#inputINTI'+no).remove();
		Cookies.remove('inti'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-inti'+i).html(i-1);
			$('#inputInti'+i).attr('name', 'inti'+(i-1));
			$('#button-addon2-inti'+i).attr('data-inti',(i-1));
			$('#inputINTI'+i).attr('id','inputINTI'+(i-1));
			$('#addon-wrapping-inti'+i).attr('id','addon-wrapping-inti'+(i-1));
			$('#inputInti'+i).attr('id','inputInti'+(i-1));
			$('#button-addon2-inti'+i).attr('id','button-addon2-inti'+(i-1));
			Cookies.set('inti'+(i-1),Cookies.get('inti'+i));
		}
		idInti = $('.input-inti').length;
		Cookies.set('jmlInti',idInti);
	}	
}

var idPenutup = 0;
if(Cookies.get('jmlPenutup') !== undefined){
	idPenutup = parseInt(Cookies.get('jmlPenutup'));
}
function addPENUTUP(){
	var penutup = $('#penutup-input').val();
	if(!isEmpty(penutup)){	
		if(idPenutup==0){
			$('#list-kosong-penutup').remove();
		}
		idPenutup = idPenutup+1;
		Cookies.set('penutup'+idPenutup, penutup);
		Cookies.set('jmlPenutup',idPenutup);
		$('#inputs-penutup').append('<div class="input-group flex-nowrap mb-3 mt-3 input-penutup" id="inputPENUTUP'+idPenutup+
			'"><span class="input-group-text" id="addon-wrapping-penutup'+idPenutup+'">'+idPenutup+'</span><textarea class="form-control" name="penutup'+idPenutup+'" id="inputPenutup'+idPenutup+'" rows="2" disabled>'+penutup+'</textarea><button class="btn btn-danger" id="button-addon2-penutup'+idPenutup+'"  type="button" data-penutup="'
			+idPenutup+'" onclick="hapusPENUTUP(this);">Hapus</button></div>');
		$('#penutup-input').val('');
	}
}

function hapusPENUTUP(id){
	var total_inputs = $('.input-penutup').length;
	if(total_inputs==1){
		alert("Minimal 1 Kegiatan");
	}else{
		var no = $(id).data('penutup');
		$('#inputPENUTUP'+no).remove();
		Cookies.remove('penutup'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-penutup'+i).html(i-1);
			$('#inputPenutup'+i).attr('name', 'penutup'+(i-1));
			$('#button-addon2-penutup'+i).attr('data-penutup',(i-1));
			$('#inputPENUTUP'+i).attr('id','inputPENUTUP'+(i-1));
			$('#addon-wrapping-penutup'+i).attr('id','addon-wrapping-penutup'+(i-1));
			$('#inputPenutup'+i).attr('id','inputPenutup'+(i-1));
			$('#button-addon2-penutup'+i).attr('id','button-addon2-penutup'+(i-1));
			Cookies.set('penutup'+(i-1),Cookies.get('penutup'+i));
		}
		idPenutup = $('.input-penutup').length;
		Cookies.set('jmlPenutup',idPenutup);
	}	
}

var idAsesNon = 0;
if(Cookies.get('jmlAsesNon') !== undefined){
	idAsesNon = parseInt(Cookies.get('jmlAsesNon'));
}
function addAsesNon(){
	var asesNon = $('#ases-non-input').val();
	if(!isEmpty(asesNon)){	
		if(idAsesNon==0){
			$('#list-kosong-ases-non').remove();
		}
		idAsesNon = idAsesNon+1;
		Cookies.set('asesNon'+idAsesNon, asesNon);
		Cookies.set('jmlAsesNon',idAsesNon);
		$('#inputs-ases-non').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-non" id="inputASESNON'+idAsesNon+
			'"><span class="input-group-text" id="addon-wrapping-ases-non'+idAsesNon+'">'+idAsesNon+'</span><textarea class="form-control" name="ases-non'+idAsesNon+'" id="inputAsesNon'+idAsesNon+'" rows="2" disabled>'+asesNon+'</textarea><button class="btn btn-danger" id="button-addon2-ases-non'+idAsesNon+'"  type="button" data-asesnon="'
			+idAsesNon+'" onclick="hapusAsesNon(this);">Hapus</button></div>');
		$('#ases-non-input').val('');
	}
}

function hapusAsesNon(id){
		
		var total_inputs = $('.input-ases-non').length;
		var no = $(id).data('asesnon');
		console.log(no);
		$('#inputASESNON'+no).remove();
		Cookies.remove('asesNon'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-ases-non'+i).html(i-1);
			$('#inputAsesNon'+i).attr('name', 'ases-non'+(i-1));
			$('#button-addon2-ases-non'+i).attr('data-asesnon',(i-1));
			$('#inputASESNON'+i).attr('id','inputASESNON'+(i-1));
			$('#addon-wrapping-ases-non'+i).attr('id','addon-wrapping-ases-non'+(i-1));
			$('#inputAsesNon'+i).attr('id','inputAsesNon'+(i-1));
			$('#button-addon2-ases-non'+i).attr('id','button-addon2-ases-non'+(i-1));
			Cookies.set('asesNon'+(i-1),Cookies.get('asesNon'+i));
		}
		idAsesNon = $('.input-ases-non').length;
		Cookies.set('jmlAsesNon',idAsesNon);
		if(idAsesNon == 0){
			$('#inputs-ases-non').append('<div class="list-kosong" id="list-kosong-ases-non">Tidak ada Asesmen Non Kognitif</div>');
		}
}

var idAsesKog = 0;
if(Cookies.get('jmlAsesKog') !== undefined){
	idAsesKog = parseInt(Cookies.get('jmlAsesKog'));
}
function addAsesKog(){
	var asesKog = $('#ases-kog-input').val();
	if(!isEmpty(asesKog)){	
		if(idAsesKog==0){
			$('#list-kosong-ases-kog').remove();
		}
		idAsesKog = idAsesKog+1;
		Cookies.set('asesKog'+idAsesKog, asesKog);
		Cookies.set('jmlAsesKog',idAsesKog);
		$('#inputs-ases-kog').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-kog" id="inputASESKOG'+idAsesKog+
			'"><span class="input-group-text" id="addon-wrapping-ases-kog'+idAsesKog+'">'+idAsesKog+'</span><textarea class="form-control" name="ases-kog'+idAsesKog+'" id="inputAsesKog'+idAsesKog+'" rows="2" disabled>'+asesKog+'</textarea><button class="btn btn-danger" id="button-addon2-ases-kog'+idAsesKog+'"  type="button" data-aseskog="'
			+idAsesKog+'" onclick="hapusAsesKog(this);">Hapus</button></div>');
		$('#ases-kog-input').val('');
	}
}

function hapusAsesKog(id){
		
		var total_inputs = $('.input-ases-kog').length;
		var no = $(id).data('aseskog');
		console.log(no);
		$('#inputASESKOG'+no).remove();
		Cookies.remove('asesKog'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-ases-kog'+i).html(i-1);
			$('#inputAsesKog'+i).attr('name', 'ases-kog'+(i-1));
			$('#button-addon2-ases-kog'+i).attr('data-aseskog',(i-1));
			$('#inputASESKOG'+i).attr('id','inputASESKOG'+(i-1));
			$('#addon-wrapping-ases-kog'+i).attr('id','addon-wrapping-ases-kog'+(i-1));
			$('#inputAsesKog'+i).attr('id','inputAsesKog'+(i-1));
			$('#button-addon2-ases-kog'+i).attr('id','button-addon2-ases-kog'+(i-1));
			Cookies.set('asesKog'+(i-1),Cookies.get('asesKog'+i));
		}
		idAsesKog = $('.input-ases-kog').length;
		Cookies.set('jmlAsesKog',idAsesKog);
		if(idAsesKog == 0){
			$('#inputs-ases-kog').append('<div class="list-kosong" id="list-kosong-ases-kog">Tidak ada Asesmen Kognitif</div>');
		}
}

var idAsesFor = 0;
if(Cookies.get('jmlAsesFor') !== undefined){
	idAsesFor = parseInt(Cookies.get('jmlAsesFor'));
}
function addAsesFor(){
	var asesFor = $('#ases-for-input').val();
	if(!isEmpty(asesFor)){	
		if(idAsesFor==0){
			$('#list-kosong-ases-for').remove();
		}
		idAsesFor = idAsesFor+1;
		Cookies.set('asesFor'+idAsesFor, asesFor);
		Cookies.set('jmlAsesFor',idAsesFor);
		$('#inputs-ases-for').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-for" id="inputASESFOR'+idAsesFor+
			'"><span class="input-group-text" id="addon-wrapping-ases-for'+idAsesFor+'">'+idAsesFor+'</span><textarea class="form-control" name="ases-for'+idAsesFor+'" id="inputAsesFor'+idAsesFor+'" rows="2" disabled>'+asesFor+'</textarea><button class="btn btn-danger" id="button-addon2-ases-for'+idAsesFor+'"  type="button" data-asesfor="'
			+idAsesFor+'" onclick="hapusAsesFor(this);">Hapus</button></div>');
		$('#ases-for-input').val('');
	}
}

function hapusAsesFor(id){
		
		var total_inputs = $('.input-ases-for').length;
		var no = $(id).data('asesfor');
		console.log(no);
		$('#inputASESFOR'+no).remove();
		Cookies.remove('asesFor'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-ases-for'+i).html(i-1);
			$('#inputAsesFor'+i).attr('name', 'ases-for'+(i-1));
			$('#button-addon2-ases-for'+i).attr('data-asesfor',(i-1));
			$('#inputASESFOR'+i).attr('id','inputASESFOR'+(i-1));
			$('#addon-wrapping-ases-for'+i).attr('id','addon-wrapping-ases-for'+(i-1));
			$('#inputAsesFor'+i).attr('id','inputAsesFor'+(i-1));
			$('#button-addon2-ases-for'+i).attr('id','button-addon2-ases-for'+(i-1));
			Cookies.set('asesFor'+(i-1),Cookies.get('asesFor'+i));
		}
		idAsesFor = $('.input-ases-for').length;
		Cookies.set('jmlAsesFor',idAsesFor);
		if(idAsesFor == 0){
			$('#inputs-ases-for').append('<div class="list-kosong" id="list-kosong-ases-for">Tidak ada Asesmen Formatif</div>');
		}
}

var idAsesSum = 0;
if(Cookies.get('jmlAsesSum') !== undefined){
	idAsesSum = parseInt(Cookies.get('jmlAsesSum'));
}
function addAsesSum(){
	var asesSum = $('#ases-sum-input').val();
	if(!isEmpty(asesSum)){	
		if(idAsesSum==0){
			$('#list-kosong-ases-sum').remove();
		}
		idAsesSum = idAsesSum+1;
		Cookies.set('asesSum'+idAsesSum, asesSum);
		Cookies.set('jmlAsesSum',idAsesSum);
		$('#inputs-ases-sum').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-sum" id="inputASESSUM'+idAsesSum+
			'"><span class="input-group-text" id="addon-wrapping-ases-sum'+idAsesSum+'">'+idAsesSum+'</span><textarea class="form-control" name="ases-sum'+idAsesSum+'" id="inputAsesSum'+idAsesSum+'" rows="2" disabled>'+asesSum+'</textarea><button class="btn btn-danger" id="button-addon2-ases-sum'+idAsesSum+'"  type="button" data-asessum="'
			+idAsesSum+'" onclick="hapusAsesSum(this);">Hapus</button></div>');
		$('#ases-sum-input').val('');
	}
}

function hapusAsesSum(id){
		
		var total_inputs = $('.input-ases-sum').length;
		var no = $(id).data('asessum');
		console.log(no);
		$('#inputASESSUM'+no).remove();
		Cookies.remove('asesSum'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-ases-sum'+i).html(i-1);
			$('#inputAsesSum'+i).attr('name', 'ases-sum'+(i-1));
			$('#button-addon2-ases-sum'+i).attr('data-asessum',(i-1));
			$('#inputASESSUM'+i).attr('id','inputASESSUM'+(i-1));
			$('#addon-wrapping-ases-sum'+i).attr('id','addon-wrapping-ases-sum'+(i-1));
			$('#inputAsesSum'+i).attr('id','inputAsesSum'+(i-1));
			$('#button-addon2-ases-sum'+i).attr('id','button-addon2-ases-sum'+(i-1));
			Cookies.set('asesSum'+(i-1),Cookies.get('asesSum'+i));
		}
		idAsesSum = $('.input-ases-sum').length;
		Cookies.set('jmlAsesSum',idAsesSum);
		if(idAsesSum == 0){
			$('#inputs-ases-sum').append('<div class="list-kosong" id="list-kosong-ases-sum">Tidak ada Asesmen Sumatif</div>');
		}
}

var idPenmed = 0;
if(Cookies.get('jmlPenmed') !== undefined){
	idPenmed = parseInt(Cookies.get('jmlPenmed'));
}
function addPenmed(){
	var penmed = $('#penmed-input').val();
	if(!isEmpty(penmed)){	
		if(idPenmed==0){
			$('#list-kosong-penmed').remove();
		}
		idPenmed = idPenmed+1;
		Cookies.set('penmed'+idPenmed, penmed);
		Cookies.set('jmlPenmed',idPenmed);
		$('#inputs-penmed').append('<div class="input-group flex-nowrap mb-3 mt-3 input-penmed" id="inputPENMED'+idPenmed+
			'"><span class="input-group-text" id="addon-wrapping-penmed'+idPenmed+'">'+idPenmed+'</span><textarea class="form-control" name="ases-penmed'+idPenmed+'" id="inputPenmed'+idPenmed+'" rows="2" disabled>'+penmed+'</textarea><button class="btn btn-danger" id="button-addon2-penmed'+idPenmed+'"  type="button" data-penmed="'
			+idPenmed+'" onclick="hapusPenmed(this);">Hapus</button></div>');
		$('#penmed-input').val('');
	}
}

function hapusPenmed(id){
		
		var total_inputs = $('.input-penmed').length;
		var no = $(id).data('penmed');
		console.log(no);
		$('#inputPENMED'+no).remove();
		Cookies.remove('penmed'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-penmed'+i).html(i-1);
			$('#inputPenmed'+i).attr('name', 'penmed'+(i-1));
			$('#button-addon2-penmed'+i).attr('data-penmed',(i-1));
			$('#inputPENMED'+i).attr('id','inputPENMED'+(i-1));
			$('#addon-wrapping-penmed'+i).attr('id','addon-wrapping-penmed'+(i-1));
			$('#inputPenmed'+i).attr('id','inputPenmed'+(i-1));
			$('#button-addon2-penmed'+i).attr('id','button-addon2-penmed'+(i-1));
			Cookies.set('penmed'+(i-1),Cookies.get('penmed'+i));
		}
		idPenmed = $('.input-penmed').length;
		Cookies.set('jmlPenmed',idPenmed);
		if(idPenmed == 0){
			$('#inputs-penmed').append('<div class="list-kosong" id="list-kosong-penmed">Tidak ada Pengayaan dan Remedial</div>');
		}
}

var idRefleksi = 0;
if(Cookies.get('jmlRefleksi') !== undefined){
	idRefleksi = parseInt(Cookies.get('jmlRefleksi'));
}
function addRefleksi(){
	var refleksi = $('#refleksi-input').val();
	if(!isEmpty(refleksi)){	
		if(idRefleksi==0){
			$('#list-kosong-refleksi').remove();
		}
		idRefleksi = idRefleksi+1;
		Cookies.set('refleksi'+idRefleksi, refleksi);
		Cookies.set('jmlRefleksi',idRefleksi);
		$('#inputs-refleksi').append('<div class="input-group flex-nowrap mb-3 mt-3 input-refleksi" id="inputREFLEKSI'+idRefleksi+
			'"><span class="input-group-text" id="addon-wrapping-refleksi'+idRefleksi+'">'+idRefleksi+'</span><textarea class="form-control" name="ases-refleksi'+idRefleksi+'" id="inputRefleksi'+idRefleksi+'" rows="2" disabled>'+refleksi+'</textarea><button class="btn btn-danger" id="button-addon2-refleksi'+idRefleksi+'"  type="button" data-refleksi="'
			+idRefleksi+'" onclick="hapusRefleksi(this);">Hapus</button></div>');
		$('#refleksi-input').val('');
	}
}

function hapusRefleksi(id){
		
		var total_inputs = $('.input-refleksi').length;
		var no = $(id).data('refleksi');
		console.log(no);
		$('#inputREFLEKSI'+no).remove();
		Cookies.remove('refleksi'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-refleksi'+i).html(i-1);
			$('#inputRefleksi'+i).attr('name', 'refleksi'+(i-1));
			$('#button-addon2-refleksi'+i).attr('data-refleksi',(i-1));
			$('#inputREFLEKSI'+i).attr('id','inputREFLEKSI'+(i-1));
			$('#addon-wrapping-refleksi'+i).attr('id','addon-wrapping-refleksi'+(i-1));
			$('#inputRefleksi'+i).attr('id','inputRefleksi'+(i-1));
			$('#button-addon2-refleksi'+i).attr('id','button-addon2-refleksi'+(i-1));
			Cookies.set('refleksi'+(i-1),Cookies.get('refleksi'+i));
		}
		idRefleksi = $('.input-refleksi').length;
		Cookies.set('jmlRefleksi',idRefleksi);
		if(idRefleksi == 0){
			$('#inputs-refleksi').append('<div class="list-kosong" id="list-kosong-refleksi">Tidak ada Refleksi</div>');
		}
}

var bahan = 1;
if(Cookies.get('jmlBahan') !== undefined){
	bahan = parseInt(Cookies.get('jmlBahan'));
}
function keyUpBahan(e){
	id = $(e).attr('id');
	val = $(e).val();
	Cookies.set('jmlBahan',bahan);
	Cookies.set(id,val);
}
$('#addBAHAN').click(function(){
	bahan = bahan+1;
	$('#inputs-bahan').append('<div class="input-group flex-nowrap mb-3 mt-3 input-bahan" id="inputBAHAN'+bahan+
		'"><span class="input-group-text" id="addon-wrapping-bahan'+bahan+'">'+bahan+'</span><textarea class="form-control" name="bahan'+bahan+'" id="inputBahan'+bahan+'" rows="2" placeholder="Bahan Bacaan '+bahan+'" onkeyup="keyUpBahan(this)"></textarea><button class="btn btn-danger" id="button-addon2-bahan'+bahan+'"  type="button" data-bahan="'
		+bahan+'" onclick="hapusBAHAN(this);">Hapus</button></div>');
});

function hapusBAHAN(id){
	var total_inputs = $('.input-bahan').length;
	if(total_inputs==1){
		alert("Minimal 1 Bahan Bacaan");
	}else{
		var no = $(id).data('bahan');
		$('#inputBAHAN'+no).remove();
		Cookies.remove('inputBahan'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-bahan'+i).html(i-1);
			$('#inputBahan'+i).attr('placeholder', 'Bahan Bacaan '+(i-1));
			$('#inputBahan'+i).attr('name', 'bahan'+(i-1));
			$('#button-addon2-bahan'+i).attr('data-bahan',(i-1));
			$('#inputBAHAN'+i).attr('id','inputBAHAN'+(i-1));
			$('#addon-wrapping-bahan'+i).attr('id','addon-wrapping-bahan'+(i-1));
			$('#inputBahan'+i).attr('id','inputBahan'+(i-1));
			$('#button-addon2-bahan'+i).attr('id','button-addon2-bahan'+(i-1));
			Cookies.set('inputBahan'+(i-1),Cookies.get('inputBahan'+i));
		}
		bahan = $('.input-bahan').length;
		Cookies.set('jmlBahan',bahan);
	}	
}

var glos = 1;
if(Cookies.get('jmlGlos') !== undefined){
	glos = parseInt(Cookies.get('jmlGlos'));
}
function keyUpGlos(e){
	id = $(e).attr('id');
	val = $(e).val();
	Cookies.set('jmlGlos',glos);
	Cookies.set(id,val);
}
$('#addGLOS').click(function(){
	glos = glos+1;
	$('#inputs-glos').append('<div class="input-group flex-nowrap mb-3 mt-3 input-glos" id="inputGLOS'+glos+
		'"><span class="input-group-text" id="addon-wrapping-glos'+glos+'">'+glos+'</span><textarea class="form-control" id="inputGlos'+glos+'" rows="2" placeholder="Glosarium '+glos+'" onkeyup="keyUpGlos(this)"></textarea><button class="btn btn-danger" id="button-addon2-glos'+glos+'"  type="button" data-glos="'
		+glos+'" onclick="hapusGLOS(this);">Hapus</button></div>');
});

function hapusGLOS(id){
	var total_inputs = $('.input-glos').length;
	if(total_inputs==1){
		alert("Minimal 1 Glosarium");
	}else{
		var no = $(id).data('glos');
		$('#inputGLOS'+no).remove();
		Cookies.remove('inputGlos'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-glos'+i).html(i-1);
			$('#inputGlos'+i).attr('placeholder', 'Glosarium '+(i-1));
			$('#inputGLos'+i).attr('name', 'glos'+(i-1));
			$('#button-addon2-glos'+i).attr('data-glos',(i-1));
			$('#inputGLOS'+i).attr('id','inputGLOS'+(i-1));
			$('#addon-wrapping-glos'+i).attr('id','addon-wrapping-glos'+(i-1));
			$('#inputGlos'+i).attr('id','inputGlos'+(i-1));
			$('#button-addon2-glos'+i).attr('id','button-addon2-glos'+(i-1));
			Cookies.set('inputGlos'+(i-1),Cookies.get('inputGlos'+i));
		}
		glos = $('.input-glos').length;
		Cookies.set('jmlGlos',glos);
	}	
}

var dafpus = 1;
if(Cookies.get('jmlDafpus') !== undefined){
	dafpus = parseInt(Cookies.get('jmlDafpus'));
}
function keyUpDafpus(e){
	id = $(e).attr('id');
	val = $(e).val();
	Cookies.set('jmlDafpus',dafpus);
	Cookies.set(id,val);
}
$('#addDAFPUS').click(function(){
	dafpus = dafpus+1;
	$('#inputs-dafpus').append('<div class="input-group flex-nowrap mb-3 mt-3 input-dafpus" id="inputDAFPUS'+dafpus+
		'"><span class="input-group-text" id="addon-wrapping-dafpus'+dafpus+'">'+dafpus+'</span><textarea class="form-control"  id="inputDafpus'+dafpus+'" rows="2" placeholder="Daftar Pustaka '+dafpus+'" onkeyup="keyUpDafpus(this)"></textarea><button class="btn btn-danger" id="button-addon2-dafpus'+dafpus+'"  type="button" data-dafpus="'
		+dafpus+'" onclick="hapusDAFPUS(this);">Hapus</button></div>');
});

function hapusDAFPUS(id){
	var total_inputs = $('.input-dafpus').length;
	if(total_inputs==1){
		alert("Minimal 1 Daftar Pustaka");
	}else{
		var no = $(id).data('dafpus');
		$('#inputDAFPUS'+no).remove();
		Cookies.remove('inputDafpus'+no);
		for (var i = no+1; i <= total_inputs; i++) {
			$('#addon-wrapping-dafpus'+i).html(i-1);
			$('#inputDafpus'+i).attr('placeholder', 'Daftar Pustaka '+(i-1));
			$('#inputDafpus'+i).attr('name', 'dafpus'+(i-1));
			$('#button-addon2-dafpus'+i).attr('data-dafpus',(i-1));
			$('#inputDAFPUS'+i).attr('id','inputDAFPUS'+(i-1));
			$('#addon-wrapping-dafpus'+i).attr('id','addon-wrapping-dafpus'+(i-1));
			$('#inputDafpus'+i).attr('id','inputDafpus'+(i-1));
			$('#button-addon2-dafpus'+i).attr('id','button-addon2-dafpus'+(i-1));
			Cookies.set('inputDafpus'+(i-1),Cookies.get('inputDafpus'+i));
		}
		dafpus = $('.input-dafpus').length;
		Cookies.set('jmlDafpus',dafpus);
	}	
}