const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

function isEmpty(str) {
    return (!str || str.length === 0 );
}
$(document).ready( function () {
    $('#tableModul').DataTable();
	$('#formModul').sayt({'autorecover':false});
	recoverCookies();
} );

// $(window).scroll(function(e){ 
// 	var $el = $('.free-premium-limit'); 
// 	var isPositionFixed = ($el.css('position') == 'fixed');
// 	if ($(this).scrollTop() > 200 && !isPositionFixed){ 
// 	  $el.css({'position': 'fixed', 'top': '0px'}); 
// 	}
// 	if ($(this).scrollTop() < 200 && isPositionFixed){
// 	  $el.css({'position': 'static', 'top': '0px'}); 
// 	} 
//   });

function recoverCookies(){
	if(Cookies.get('prokel') !== undefined){
		var prokel = Cookies.get('prokel');
		populateMapel(prokel);
	}
	if(Cookies.get('mapel') !== undefined){
		var mapel = Cookies.get('mapel');
		populateElemen(mapel);
	}
	if(Cookies.get('elemen') !== undefined){
		var elemen = Cookies.get('elemen');
		populateCP(elemen);
	}
	if(Cookies.get('fase') !== undefined){
		var fase = Cookies.get('fase');
		$('#fase').val(fase);
	}
	if(Cookies.get('jmlMateri') !== undefined){
		$('#list-kosong-materi').remove();
		var jml = parseInt(Cookies.get('jmlMateri'));
		for(var i=1;i<=jml;i++){
			$('#inputs-materi').append('<div class="input-group flex-nowrap mb-3 mt-3 input-materi" id="inputMATERI'+i+
			'"><span class="input-group-text" id="addon-wrapping-materi'+i+'">'+i+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="materi'+i+'" id="inputMateri'+i+'" value="'+Cookies.get('materi'+i)+'" disabled><button class="btn btn-danger" id="button-addon2-materi'+i+'"  type="button" data-materi="'
			+i+'" onclick="hapusMATERI(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlKa') !== undefined){
		var jml = parseInt(Cookies.get('jmlKa'));
		$('#inputKA1').remove();
		for(var i=1;i<=jml;i++){
			$('#inputs-ka').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ka" id="inputKA'+i+
		'"><span class="input-group-text" id="addon-wrapping-ka'+i+'">'+i+'</span><input type="text" class="form-control" placeholder="Kompetensi Awal '+i+
		'" aria-label="Username" aria-describedby="addon-wrapping"  id="inputKa'+i+'" value="'+Cookies.get('inputKa'+i)+'"><button class="btn btn-danger" id="button-addon2-ka'+i+'"  type="button" data-ka="'
		+i+'" onclick="hapusKA(this);">Hapus</button></div>');
		}
	}

	if(Cookies.get('jmlPp') !== undefined){
		$('#list-kosong-pp').remove();
		var jml = parseInt(Cookies.get('jmlPp'));
		for(var i=1;i<=jml;i++){
			$('#inputs-pp').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pp" id="inputPP'+i+
			'"><span class="input-group-text" id="addon-wrapping-pp'+i+'">'+i+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="pp'+i+'" id="inputPp'+i+'" value="'+Cookies.get('pp'+i)+'" disabled><button class="btn btn-danger" id="button-addon2-pp'+i+'"  type="button" data-pp="'
			+i+'" onclick="hapusPP(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlMedia') !== undefined){
		$('#list-kosong-media').remove();
		var jml = parseInt(Cookies.get('jmlMedia'));
		for(var i=1;i<=jml;i++){
			$('#inputs-media').append('<div class="input-group flex-nowrap mb-3 mt-3 input-media" id="inputMEDIA'+i+
			'"><span class="input-group-text" id="addon-wrapping-media'+i+'">'+i+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="media'+i+'" id="inputMedia'+i+'" value="'+Cookies.get('media'+i)+'" disabled><button class="btn btn-danger" id="button-addon2-media'+i+'"  type="button" data-media="'
			+i+'" onclick="hapusMEDIA(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlSumber') !== undefined){
		$('#list-kosong-sumber').remove();
		var jml = parseInt(Cookies.get('jmlSumber'));
		for(var i=1;i<=jml;i++){
			$('#inputs-sumber').append('<div class="input-group flex-nowrap mb-3 mt-3 input-sumber" id="inputSUMBER'+i+
			'"><span class="input-group-text" id="addon-wrapping-sumber'+i+'">'+i+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="sumber'+i+'" id="inputSumber'+i+'" value="'+Cookies.get('sumber'+i)+'" disabled><button class="btn btn-danger" id="button-addon2-sumber'+i+'"  type="button" data-sumber="'
			+i+'" onclick="hapusSUMBER(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlTp') !== undefined){
		$('#list-kosong-tp').remove();
		var jml = parseInt(Cookies.get('jmlTp'));
		for(var i=1;i<=jml;i++){
			$('#inputs-tp').append('<div class="input-group flex-nowrap mb-3 mt-3 input-tp" id="inputTP'+i+
			'"><span class="input-group-text" id="addon-wrapping-tp'+i+'">'+i+'</span><textarea class="form-control" name="tp'+i+'" id="inputTp'+i+'" rows="2" disabled>'+Cookies.get('tp'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-tp'+i+'"  type="button" data-tp="'
			+i+'" onclick="hapusTP(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlPb') !== undefined){
		var jml = parseInt(Cookies.get('jmlPb'));
		$('#inputPB1').remove();
		for(var i=1;i<=jml;i++){
			$('#inputs-pb').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pb" id="inputPB'+i+
		'"><span class="input-group-text" id="addon-wrapping-pb'+i+'">'+i+'</span><input type="text" class="form-control" placeholder="Pemahaman Bermakna '+i+
		'" aria-label="Username" aria-describedby="addon-wrapping" id="inputPb'+i+'" onkeyup="keyUpPB(this)" value="'+Cookies.get('inputPb'+i)+'"><button class="btn btn-danger" id="button-addon2-pb'+i+'"  type="button" data-pb="'
		+i+'" onclick="hapusPB(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlPerpem') !== undefined){
		var jml = parseInt(Cookies.get('jmlPerpem'));
		$('#inputPERPEM1').remove();
		for(var i=1;i<=jml;i++){
			$('#inputs-perpem').append('<div class="input-group flex-nowrap mb-3 mt-3 input-perpem" id="inputPERPEM'+i+
			'"><span class="input-group-text" id="addon-wrapping-perpem'+i+'">'+i+'</span><input type="text" class="form-control" placeholder="Pertanyaan Pemantik '+i+
			'" aria-label="Username" aria-describedby="addon-wrapping" id="inputPerpem'+i+'" onkeyup="keyUpPerpem(this)" value="'+Cookies.get('inputPerpem'+i)+'"><button class="btn btn-danger" id="button-addon2-perpem'+i+'"  type="button" data-perpem="'
			+i+'" onclick="hapusPERPEM(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlPerpemb') !== undefined){
		$('#list-kosong-perpemb').remove();
		var jml = parseInt(Cookies.get('jmlPerpemb'));
		for(var i=1;i<=jml;i++){
			$('#inputs-perpemb').append('<div class="input-group flex-nowrap mb-3 mt-3 input-perpemb" id="inputPERPEMB'+i+
			'"><span class="input-group-text" id="addon-wrapping-perpemb'+i+'">'+i+'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="perpemb'+i+'" id="inputPerpemb'+i+'" value="'+Cookies.get('perpemb'+i)+'" disabled><button class="btn btn-danger" id="button-addon2-perpemb'+i+'"  type="button" data-perpemb="'
			+i+'" onclick="hapusPERPEMB(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlPend') !== undefined){
		$('#list-kosong-pend').remove();
		var jml = parseInt(Cookies.get('jmlPend'));
		for(var i=1;i<=jml;i++){
			$('#inputs-pend').append('<div class="input-group flex-nowrap mb-3 mt-3 input-pend" id="inputPEND'+i+
			'"><span class="input-group-text" id="addon-wrapping-pend'+i+'">'+i+'</span><textarea class="form-control" name="pend'+i+'" id="inputPend'+i+'" rows="2" disabled>'+Cookies.get('pend'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-pend'+i+'"  type="button" data-pend="'
			+i+'" onclick="hapusPEND(this);">Hapus</button></div>');
		}
	}

	if(Cookies.get('jmlInti') !== undefined){
		$('#list-kosong-inti').remove();
		var jml = parseInt(Cookies.get('jmlInti'));
		for(var i=1;i<=jml;i++){
			$('#inputs-inti').append('<div class="input-group flex-nowrap mb-3 mt-3 input-inti" id="inputINTI'+i+
			'"><span class="input-group-text" id="addon-wrapping-inti'+i+'">'+i+'</span><textarea class="form-control" name="inti'+i+'" id="inputInti'+i+'" rows="2" disabled>'+Cookies.get('inti'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-inti'+i+'"  type="button" data-inti="'
			+i+'" onclick="hapusINTI(this);">Hapus</button></div>');
		}
	}	
	
	if(Cookies.get('jmlPenutup') !== undefined){
		$('#list-kosong-penutup').remove();
		var jml = parseInt(Cookies.get('jmlPenutup'));
		for(var i=1;i<=jml;i++){
			$('#inputs-penutup').append('<div class="input-group flex-nowrap mb-3 mt-3 input-penutup" id="inputPENUTUP'+i+
			'"><span class="input-group-text" id="addon-wrapping-penutup'+i+'">'+i+'</span><textarea class="form-control" name="penutup'+i+'" id="inputPenutup'+i+'" rows="2" disabled>'+Cookies.get('penutup'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-penutup'+i+'"  type="button" data-penutup="'
			+i+'" onclick="hapusPENUTUP(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlAsesNon') !== undefined){
		if(parseInt(Cookies.get('jmlAsesNon'))!=0){
			$('#list-kosong-ases-non').remove();
		}
		var jml = parseInt(Cookies.get('jmlAsesNon'));
		for(var i=1;i<=jml;i++){
			$('#inputs-ases-non').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-non" id="inputASESNON'+i+
			'"><span class="input-group-text" id="addon-wrapping-ases-non'+i+'">'+i+'</span><textarea class="form-control" name="ases-non'+i+'" id="inputAsesNon'+i+'" rows="2" disabled>'+Cookies.get('asesNon'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-ases-non'+i+'"  type="button" data-asesnon="'
			+i+'" onclick="hapusAsesNon(this);">Hapus</button></div>');
		}
	}	
	if(Cookies.get('jmlAsesKog') !== undefined){
		if(parseInt(Cookies.get('jmlAsesKog'))!=0){
			$('#list-kosong-ases-kog').remove();
		}
		var jml = parseInt(Cookies.get('jmlAsesKog'));
		for(var i=1;i<=jml;i++){
			$('#inputs-ases-kog').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-kog" id="inputASESKOG'+i+
			'"><span class="input-group-text" id="addon-wrapping-ases-kog'+i+'">'+i+'</span><textarea class="form-control" name="ases-kog'+i+'" id="inputAsesKog'+i+'" rows="2" disabled>'+Cookies.get('asesKog'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-ases-kog'+i+'"  type="button" data-aseskog="'
			+i+'" onclick="hapusAsesKog(this);">Hapus</button></div>');
		}
	}	
	if(Cookies.get('jmlAsesFor') !== undefined){
		if(parseInt(Cookies.get('jmlAsesFor'))!=0){
			$('#list-kosong-ases-for').remove();
		}
		var jml = parseInt(Cookies.get('jmlAsesFor'));
		for(var i=1;i<=jml;i++){
			$('#inputs-ases-for').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-for" id="inputASESFOR'+i+
			'"><span class="input-group-text" id="addon-wrapping-ases-for'+i+'">'+i+'</span><textarea class="form-control" name="ases-for'+i+'" id="inputAsesFor'+i+'" rows="2" disabled>'+Cookies.get('asesFor'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-ases-for'+i+'"  type="button" data-asesfor="'
			+i+'" onclick="hapusAsesFor(this);">Hapus</button></div>');
		}
	}	
	if(Cookies.get('jmlAsesSum') !== undefined){
		if(parseInt(Cookies.get('jmlAsesSum'))!=0){
			$('#list-kosong-ases-sum').remove();
		}
		var jml = parseInt(Cookies.get('jmlAsesSum'));
		for(var i=1;i<=jml;i++){
			$('#inputs-ases-sum').append('<div class="input-group flex-nowrap mb-3 mt-3 input-ases-sum" id="inputASESSUM'+i+
			'"><span class="input-group-text" id="addon-wrapping-ases-sum'+i+'">'+i+'</span><textarea class="form-control" name="ases-sum'+i+'" id="inputAsesSum'+i+'" rows="2" disabled>'+Cookies.get('asesSum'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-ases-sum'+i+'"  type="button" data-asessum="'
			+i+'" onclick="hapusAsesSum(this);">Hapus</button></div>');
		}
	}	
	if(Cookies.get('jmlPenmed') !== undefined){
		if(parseInt(Cookies.get('jmlPenmed'))!=0){
			$('#list-kosong-penmed').remove();
		}
		var jml = parseInt(Cookies.get('jmlPenmed'));
		for(var i=1;i<=jml;i++){
			$('#inputs-penmed').append('<div class="input-group flex-nowrap mb-3 mt-3 input-penmed" id="inputPENMED'+i+
			'"><span class="input-group-text" id="addon-wrapping-penmed'+i+'">'+i+'</span><textarea class="form-control" name="ases-penmed'+i+'" id="inputPenmed'+i+'" rows="2" disabled>'+Cookies.get('penmed'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-penmed'+i+'"  type="button" data-penmed="'
			+i+'" onclick="hapusPenmed(this);">Hapus</button></div>');
		}
	}	
	if(Cookies.get('jmlRefleksi') !== undefined){
		if(parseInt(Cookies.get('jmlRefleksi'))!=0){
			$('#list-kosong-refleksi').remove();
		}
		var jml = parseInt(Cookies.get('jmlRefleksi'));
		for(var i=1;i<=jml;i++){
			$('#inputs-refleksi').append('<div class="input-group flex-nowrap mb-3 mt-3 input-refleksi" id="inputREFLEKSI'+i+
			'"><span class="input-group-text" id="addon-wrapping-refleksi'+i+'">'+i+'</span><textarea class="form-control" name="ases-refleksi'+i+'" id="inputRefleksi'+i+'" rows="2" disabled>'+Cookies.get('refleksi'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-refleksi'+i+'"  type="button" data-refleksi="'
			+i+'" onclick="hapusRefleksi(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlBahan') !== undefined){
		var jml = parseInt(Cookies.get('jmlBahan'));
		$('#inputBAHAN1').remove();
		for(var i=1;i<=jml;i++){
			$('#inputs-bahan').append('<div class="input-group flex-nowrap mb-3 mt-3 input-bahan" id="inputBAHAN'+i+
		'"><span class="input-group-text" id="addon-wrapping-bahan'+i+'">'+i+'</span><textarea class="form-control" name="bahan'+i+'" id="inputBahan'+i+'" rows="2" placeholder="Bahan Bacaan '+i+'" onkeyup="keyUpBahan(this)">'+Cookies.get('inputBahan'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-bahan'+i+'"  type="button" data-bahan="'
		+i+'" onclick="hapusBAHAN(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlGlos') !== undefined){
		var jml = parseInt(Cookies.get('jmlGlos'));
		$('#inputGLOS1').remove();
		for(var i=1;i<=jml;i++){
			$('#inputs-glos').append('<div class="input-group flex-nowrap mb-3 mt-3 input-glos" id="inputGLOS'+i+
		'"><span class="input-group-text" id="addon-wrapping-glos'+i+'">'+i+'</span><textarea class="form-control" id="inputGlos'+i+'" rows="2" placeholder="Glosarium '+i+'" onkeyup="keyUpGlos(this)">'+Cookies.get('inputGlos'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-glos'+i+'"  type="button" data-glos="'
		+i+'" onclick="hapusGLOS(this);">Hapus</button></div>');
		}
	}
	if(Cookies.get('jmlDafpus') !== undefined){
		var jml = parseInt(Cookies.get('jmlDafpus'));
		$('#inputDAFPUS1').remove();
		for(var i=1;i<=jml;i++){
			$('#inputs-dafpus').append('<div class="input-group flex-nowrap mb-3 mt-3 input-dafpus" id="inputDAFPUS'+i+
		'"><span class="input-group-text" id="addon-wrapping-dafpus'+i+'">'+i+'</span><textarea class="form-control"  id="inputDafpus'+i+'" rows="2" placeholder="Daftar Pustaka '+i+'" onkeyup="keyUpDafpus(this)">'+Cookies.get('inputDafpus'+i)+'</textarea><button class="btn btn-danger" id="button-addon2-dafpus'+i+'"  type="button" data-dafpus="'
		+i+'" onclick="hapusDAFPUS(this);">Hapus</button></div>');
		}
	}
	$('#formModul').sayt({'recover':true});
}

function deleteAllCookies(){
	const cookies = document.cookie.split(";");

    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const sCookie = cookie.split("=");
		if(sCookie[0]!="PHPSESSID"){
			var name = String(sCookie[0]);
			Cookies.remove(name.replace(/\s/g, ""));
		}
    }
	$('#formModul').sayt({'erase': true});
}
$('#logout').click(function(){
	window.location.href = "../backend/logout/logout.php";
});

$('#profile-pic').click(function(){
	const email = $('#profile-pic').data('email');
	window.location.href = "../edit-profile/edit.php?email="+email;
});


$('#programKeahlian').on('change',function(){
	var prokel = $(this).val();
	Cookies.set('prokel',prokel);
	populateMapel(prokel);
});

$('#mapel').on('change',function(){
	var mapel = $(this).val();
	Cookies.set('mapel',mapel);
	populateElemen(mapel);
})

$('#kelas').on('change',function(){
	var kelas = $(this).val();
	if(kelas==="x"){
		$('#fase').val('E');
	}else{
		$('#fase').val('F');
	}
	var fase = $('#fase').val();
	Cookies.set('fase',fase);
});

$('#elemen').on('change',function(){
	var elemen = $(this).val();
	Cookies.set('elemen',elemen);
	populateCP(elemen);
	
});

function populateMapel(prokel){
	$.ajax({
		url: "../backend/create-modul-ajar/get_mapel.php",
		type: "POST",
		data: {
			prokel: prokel			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.rows.length);
			if(dataResult.statusCode==201){
				$('.option-mapel').remove();
				for(i=0;i<dataResult.rows.length;i++){
					$('#mapel').append('<option value="'+dataResult.rows[i].id+'" class="option-mapel">'+dataResult.rows[i].mata_pelajaran+'</option>');
				}
				if(Cookies.get('mapel') !== 'undefined'){
					var mapel = Cookies.get('mapel');
					$('#mapel').val(mapel);
				}
			}
			else if(dataResult.statusCode==202){
				console.log('gagal');
			}
		}
	});
}

function populateElemen(mapel){
	$.ajax({
		url: "../backend/create-modul-ajar/get_data_from_mapel.php",
		type: "POST",
		data: {
			mapel: mapel			
		},
		cache: false,
		success: function(dataResult){
			console.log(dataResult);
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult);
			if(dataResult.statusCode==201){
				$('.option-elemen').remove();
				$('.option-materi').remove();
				for(i=0;i<dataResult.elemen.length;i++){
					$('#elemen').append('<option value="'+dataResult.elemen[i].id+'" class="option-elemen">'+dataResult.elemen[i].elemen+'</option>');
				}
				for(i=0;i<dataResult.materi.length;i++){
					$('#materi-options').append('<option value="'+dataResult.materi[i].materi+'" class="option-materi">'+dataResult.materi[i].materi+'</option>');
				}

				if(Cookies.get('elemen') !== 'undefined'){
					var elemen = Cookies.get('elemen');
					$('#elemen').val(elemen);
				}
				
			}
			else if(dataResult.statusCode==202){
				console.log('gagal');
			}
		}
	});
}

function populateCP(elemen){
	$.ajax({
		url: "../backend/create-modul-ajar/get_data_from_elemen.php",
		type: "POST",
		data: {
			elemen: elemen			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult);
			if(dataResult.statusCode==201){
				$('.option-tp').remove();
				$('textarea#cp').val(dataResult.cp[0].capaian_pembelajaran);
				for(var i=0;i<dataResult.tp.length;i++){
					$('#tp-options').append('<option value="'+dataResult.tp[i].tp+'" class="option-tp">'+dataResult.tp[i].tp+'</option>');
				}
			}
			else if(dataResult.statusCode==202){
				console.log('gagal');
			}
		}
	});
}
$('#buatModulAjar').click(function(){
	if(validatePage3()){
		$('#spinner').css('display','inline-block');

		var modul_ajar = new Object();
		modul_ajar.nama = $('#namaPenyusun').val();
		modul_ajar.satuanPend = $('#satuanPend').val();
		modul_ajar.tahunAjar = $('#tahunAjar').val();
		modul_ajar.programKeahlian = $('#programKeahlian').find(":selected").text();
		modul_ajar.mapel = $('#mapel').find(":selected").text();
		modul_ajar.kelas = $('#kelas').find(":selected").text();
		modul_ajar.semester = $('#semester').find(":selected").text();
		modul_ajar.fase = $('#fase').val();
		modul_ajar.mapel = $('#mapel').find(":selected").text();
		modul_ajar.elemen = $('#elemen').find(":selected").text();
		modul_ajar.cp = $('#cp').val();
		modul_ajar.alokasiW = $('#alokasiW').val();


		var materi = [];
		var materiLen = $('.input-materi').length;
		for(var i=0;i<materiLen;i++){
			materi[i] = $('#inputMateri'+(i+1)).val();
		}
		modul_ajar.materi = materi;


		var ka = [];
		var kaLen = $('.input-ka').length;
		for(var i=0;i<kaLen;i++){
			ka[i] = $('#inputKa'+(i+1)).val();
		}

		modul_ajar.ka = ka;

		var pp = [];
		var ppLen = $('.input-pp').length;
		for(var i=0;i<ppLen;i++){
			pp[i] = $('#inputPp'+(i+1)).val();
		}

		modul_ajar.pp = pp;

		var media = [];
		var mediaLen = $('.input-media').length;
		for(var i=0;i<mediaLen;i++){
			media[i] = $('#inputMedia'+(i+1)).val();
		}

		modul_ajar.media = media;


		var sumber = [];
		var sumberLen = $('.input-sumber').length;
		for(var i=0;i<sumberLen;i++){
			sumber[i] = $('#inputSumber'+(i+1)).val();
		}

		modul_ajar.sumber = sumber;

		modul_ajar.target = $('#target').val();
		modul_ajar.model = $('#model').find(":selected").text();

		var tp = [];
		var tpLen = $('.input-tp').length;
		for(var i=0;i<tpLen;i++){
			tp[i] = $('#inputTp'+(i+1)).val();
		}

		modul_ajar.tp = tp;

		var pb = [];
		var pbLen = $('.input-pb').length;
		for(var i=0;i<pbLen;i++){
			pb[i] = $('#inputPb'+(i+1)).val();
		}

		modul_ajar.pb = pb;

		var perpem = [];
		var perpemLen = $('.input-perpem').length;
		for(var i=0;i<perpemLen;i++){
			perpem[i] = $('#inputPerpem'+(i+1)).val();
		}

		modul_ajar.perpem = perpem;

		var perpemb = [];
		var perpembLen = $('.input-perpemb').length;
		for(var i=0;i<perpembLen;i++){
			perpemb[i] = $('#inputPerpemb'+(i+1)).val();
		}

		modul_ajar.perpemb = perpemb;

		var pend = [];
		var pendLen = $('.input-pend').length;
		for(var i=0;i<pendLen;i++){
			pend[i] = $('#inputPend'+(i+1)).val();
		}

		modul_ajar.pend = pend;

		var inti = [];
		var intiLen = $('.input-inti').length;
		for(var i=0;i<intiLen;i++){
			inti[i] = $('#inputInti'+(i+1)).val();
		}

		modul_ajar.inti = inti;

		var penutup = [];
		var penutupLen = $('.input-penutup').length;
		for(var i=0;i<penutupLen;i++){
			penutup[i] = $('#inputPenutup'+(i+1)).val();
		}

		modul_ajar.penutup = penutup;

		var asesNon = [];
		var asesNonLen = $('.input-ases-non').length;
		for(var i=0;i<asesNonLen;i++){
			asesNon[i] = $('#inputAsesNon'+(i+1)).val();
		}

		modul_ajar.asesNon = asesNon;

		var asesKog = [];
		var asesKogLen = $('.input-ases-kog').length;
		for(var i=0;i<asesKogLen;i++){
			asesKog[i] = $('#inputAsesKog'+(i+1)).val();
		}

		modul_ajar.asesKog = asesKog;

		var asesFor = [];
		var asesForLen = $('.input-ases-for').length;
		for(var i=0;i<asesForLen;i++){
			asesFor[i] = $('#inputAsesFor'+(i+1)).val();
		}

		modul_ajar.asesFor = asesFor;

		var asesSum = [];
		var asesSumLen = $('.input-ases-sum').length;
		for(var i=0;i<asesSumLen;i++){
			asesSum[i] = $('#inputAsesSum'+(i+1)).val();
		}

		modul_ajar.asesSum = asesSum;


		var penmed = [];
		var penmedLen = $('.input-penmed').length;
		for(var i=0;i<penmedLen;i++){
			penmed[i] = $('#inputPenmed'+(i+1)).val();
		}

		modul_ajar.penmed = penmed;

		var refleksi = [];
		var refleksiLen = $('.input-refleksi').length;
		for(var i=0;i<refleksiLen;i++){
			refleksi[i] = $('#inputRefleksi'+(i+1)).val();
		}

		modul_ajar.refleksi = refleksi;

		var bahanBaca = [];
		var bahanBacaLen = $('.input-bahan').length;
		for(var i=0;i<bahanBacaLen;i++){
			bahanBaca[i] = $('#inputBahan'+(i+1)).val();
		}

		modul_ajar.bahanBaca = bahanBaca;

		var glos = [];
		var glosLen = $('.input-glos').length;
		for(var i=0;i<glosLen;i++){
			glos[i] = $('#inputGlos'+(i+1)).val();
		}

		modul_ajar.glos = glos;

		var dafpus = [];
		var dafpusLen = $('.input-dafpus').length;
		for(var i=0;i<dafpusLen;i++){
			dafpus[i] = $('#inputDafpus'+(i+1)).val();
		}

		modul_ajar.dafpus = dafpus;


		var modulAjar = JSON.stringify(modul_ajar);
		console.log(modulAjar);

		$.ajax({
			url: "../backend/create-modul-ajar/create_modul.php",
			type: "POST",
			data: {
				modulAjar: modulAjar
			},
			cache: false,
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
				if(dataResult.statusCode==201){
					uploadLkpd(dataResult.last_id);
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
	
});


function uploadLkpd(id){
	var fd = new FormData();
    var files = $('#lkpd')[0].files[0];
    fd.append('file', files);
    var last_id = id;

	$.ajax({
        url: '../backend/create-modul-ajar/upload_file.php',
        type: 'POST',
        data: fd,
        contentType: false,
       	processData: false,
        success: function(dataResult){
        	var dataResult = JSON.parse(dataResult);
			console.log(dataResult);
            if(dataResult.statusCode==201){
            	var fileName = dataResult.fileName;
                uploadToDB(last_id,fileName);
            }
            else{
                Swal.fire({
					title: 'Error!',
					text: 'There is something wrong with uploading lkpd',
					icon: 'error',
					confirmButtonText: 'Ok',
					confirmButtonColor: "#d63630"
				})
            }
        },
   });
}

function uploadToDB(id,fileName){
	var last_id = id;
	var fileName = fileName;
	console.log(last_id+" "+fileName);
	$.ajax({
		url: '../backend/create-modul-ajar/upload_nama_file.php',
        type: 'POST',
        data: {
			last_id: last_id,
			fileName: fileName
		},
        success: function(dataResult){
        	
        	var dataResult = JSON.parse(dataResult);
			console.log(dataResult);
            if(dataResult.statusCode==201){
                createModulDocx(last_id);
            }
            else{
                Swal.fire({
					title: 'Error!',
					text: 'There is something wrong with uploading lkpd',
					icon: 'error',
					confirmButtonText: 'Ok',
					confirmButtonColor: "#d63630"
				})
            }
        }
      });

}

function createModulDocx(id){
	var id_identitas = id;
	$.ajax({
		url: "../backend/modul/create.php",
		type: "POST",
		data: {
			id: id_identitas		
		},
		cache: false,
		success: function(dataResult){
			createPreviewModulDocx(id_identitas);
		}
	});
}

function createPreviewModulDocx(id){
	var id_identitas = id;
	$.ajax({
		url: "../backend/modul/create-preview.php",
		type: "POST",
		data: {
			id: id_identitas		
		},
		cache: false,
		success: function(dataResult){
			createModulPdf(id_identitas);
		}
	});
}

function createModulPdf(id){
	var id_identitas = id;
	$.ajax({
		url: "../backend/modul/create-pdf.php",
		type: "POST",
		data: {
			id: id_identitas,	
		},
		cache: false,
		success: function(dataResult){
			$('#spinner').css('display','none');
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.statusCode);
			deleteAllCookies();
			Swal.fire({
					title: 'Success!',
					text: 'Data berhasil ditambahkan',
					icon: 'success',
					confirmButtonText: 'Ok',
					confirmButtonColor: "#d63630"
				}).then((result) =>{
					if(result.isConfirmed){
						location.reload();
					}
			});
		}
	});
}



function subscribe(id){
	var id_identitas = $(id).data('id');
	var downloads_free = $(id).data('downloads');
	var limit_free = $(id).data('limit');
	console.log(id_identitas);
	console.log(downloads_free);
	console.log(limit_free);

	if(downloads_free<limit_free){
		$('#subscribePdf').attr('href','./download-modul.php?id='+id_identitas+'&ext=pdf');
		$('#subscribeDocx').attr('href','./download-modul.php?id='+id_identitas+'&ext=docx');
	}else{
		$('#subscribePdf').attr('href','../pricing');
		$('#subscribeDocx').attr('href','../pricing');
	}
	
	$('#previewPdf').attr('href','./download-prev-modul.php?id='+id_identitas+'&ext=pdf');
	$('#previewDocx').attr('href','./download-prev-modul.php?id='+id_identitas+'&ext=docx');

	var ext = $(id).data('ext');

	if(ext == 'docx'){
		$('.btn-docx').css('display','block');
		$('.btn-pdf').css('display','none');
	}else{
		$('.btn-docx').css('display','none');
		$('.btn-pdf').css('display','block');
	}

	$.ajax({
			url: "../backend/modul/get-preview-modul.php",
			type: "POST",
			data: {
				id: id_identitas		
			},
			cache: false,
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
				if(dataResult.statusCode==201){
					$('#embedPDF').attr('src','../preview-modul/'+dataResult.nama_file+'.pdf');
				}
			}
		});
}


function hapusModul(id){
	var id_identitas = $(id).data('id');
	var paket = $(id).data('paket');
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
			url: "../backend/hapus-modul/hapus_modul.php",
			type: "POST",
			data: {
				id: id_identitas,
				paket: paket		
			},
			cache: false,
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				console.log(dataResult.statusCode);
				if(dataResult.statusCode==202){
					createModul(id_identitas);
				}
				else if(dataResult.statusCode==201){
					Swal.fire({
						title: 'Success!',
						text: 'Data berhasil dihapus',
						icon: 'success',
						confirmButtonText: 'Ok',
						confirmButtonColor: "#d63630"
					}).then((result) =>{
						if(result.isConfirmed){
							location.reload();
						}
					});
				}
			}
		});
	  }
	})
	
}

function editModul(id){
	var id_identitas = $(id).data('id');
	window.location.href = '../edit-modul-ajar/edit.php?id_identitas='+id_identitas;
}

function validatePage1(){
	var msg = "";
	if(isEmpty($('#tahunAjar').val())){
		msg = "Tahun Ajar";
	}else if($('#programKeahlian').find(":selected").text() == "Choose..."){
		msg = "Program Keahlian";
	}else if($('#mapel').find(":selected").text() == "Choose..."){
		msg = "Mata Pelajaran";
	}else if($('#kelas').find(":selected").text() == "Choose..."){
		msg = "Kelas";
	}else if($('#semester').find(":selected").text() == "Choose..."){
		msg = "Semester";
	}else if($('#elemen').find(":selected").text() == "Choose..."){
		msg = "Elemen";
	}else if($('.input-materi').length == 0){
		msg = "Materi";
	}else if(isEmpty($('#alokasiW').val())){
		msg = "Alokasi Waktu";
	}
	var kaLen = $('.input-ka').length;
	for(var i=0;i<kaLen;i++){
		if(isEmpty($('#inputKa'+(i+1)).val()) && isEmpty(msg)){
			msg = "Kompetensi Awal "+(i+1);
			break;
		}
	}

	if($('.input-pp').length == 0 && isEmpty(msg)){
		msg = "Profil Pancasila";
	}else if($('.input-media').length == 0 && isEmpty(msg)){
		msg = "Media Pembelajaran";
	}else if($('.input-sumber').length == 0 && isEmpty(msg)){
		msg = "Sumber Belajar";
	}else if(isEmpty($('#target').val()) && isEmpty(msg)){
		msg = "Target Peserta Didik";
	}else if($('#model').find(":selected").text() == "Choose..." && isEmpty(msg)){
		msg = "Model Pembelajaran";
	}
		console.log(msg);
	if(isEmpty(msg)){
		$('#carouselExampleControls').carousel('next');
		window.location.href = "./#formBuatModul";

	}else{
		msg = "Input "+ msg + " belum diisi. Mohon diisi terlebih dahulu";
		$('#msg-toast').html(msg);
		showToast(msg);
	}
}

function validatePage2(){
	var msg = "";

	if($('.input-tp').length == 0){
		msg = "Tujuan Pembelajaran";
	}

	var pbLen = $('.input-pb').length;
	for(var i=0;i<pbLen;i++){
		if(isEmpty($('#inputPb'+(i+1)).val()) && isEmpty(msg)){
			msg = "Pemahaman Bermakna "+(i+1);
			break;
		}
	}

	var perpemLen = $('.input-perpem').length;
	for(var i=0;i<perpemLen;i++){
		if(isEmpty($('#inputPerpem'+(i+1)).val()) && isEmpty(msg)){
			msg = "Pertanyaan Pemantik "+(i+1);
			break;
		}
	}

	if( $('.input-perpemb').length == 0 && isEmpty(msg)){
		msg = "Persiapan Pembelajaran";
	}else if($('.input-pend').length == 0){
		msg = "Pendahuluan";
	}else if($('.input-inti').length == 0){
		msg = "Inti";
	}else if($('.input-penutup').length == 0){
		msg = "Penutup";
	}else if($('.input-ases-non').length == 0){
		msg = "Asesmen Non Kognitif";
	}else if($('.input-ases-kog').length == 0){
		msg = "Asesmen Kognitif";
	}else if($('.input-ases-for').length == 0){
		msg = "Asesmen Fomatif";
	}else if($('.input-ases-sum').length == 0){
		msg = "Asesmen Sumatif";
	}else if($('.input-penmed').length == 0){
		msg = "Pengayaan dan Remedial";
	}else if($('.input-refleksi').length == 0){
		msg = "Refleksi";
	}

	console.log(msg);

	if(isEmpty(msg)){
		$('#carouselExampleControls').carousel('next');
	}else{
		msg = "Input "+ msg + " belum diisi. Mohon diisi terlebih dahulu";
		$('#msg-toast').html(msg);
		showToast(msg);
	}
}


function validatePage3(){
	var res = false;
	var msg = "";

	if($('#lkpd').get(0).files.length === 0){
		msg = "LKPD";
	}

	var bahanBaca = [];
	var bahanBacaLen = $('.input-bahan').length;
	for(var i=0;i<bahanBacaLen;i++){
		if(isEmpty($('#inputBahan'+(i+1)).val()) && isEmpty(msg)){
			msg = "Bahan Bacaan "+(i+1);
			break;
		}
	}

	var glosLen = $('.input-glos').length;
	for(var i=0;i<glosLen;i++){
		if(isEmpty($('#inputGlos'+(i+1)).val()) && isEmpty(msg)){
			msg = "Glosarium "+(i+1);
			break;
		}
	}

	var dafpusLen = $('.input-dafpus').length;
	for(var i=0;i<dafpusLen;i++){
		if(isEmpty($('#inputDafpus'+(i+1)).val()) && isEmpty(msg)){
			msg = "Daftar Pustaka "+(i+1);
			break;
		}
	}

	console.log(msg);

	if(isEmpty(msg)){
		res = true;
	}else{
		msg = "Input "+ msg + " belum diisi. Mohon diisi terlebih dahulu";
		$('#msg-toast').html(msg);
		showToast(msg);
	}

	return res;
}

function showToast(msg){
	const toastLiveExample = document.getElementById('showMsg');
	const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
}

function downloadsFree(){
	$.ajax({
		url: "../backend/update/downloads_free.php",
		type: "POST",
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.statusCode);
			if(dataResult.statusCode==201){
				$('#downloadFree').css('width',((dataResult.downloads_free/dataResult.limit_free)*100)+'%');
				$('#downloadFree').html(dataResult.downloads_free+' / '+dataResult.limit_free);
				getMotivasi();
				$('#downloadDocs').data('downloads',dataResult.downloads_free);
				$('#downloadPdf').data('downloads',dataResult.downloads_free);
				$('#exampleModal').modal('hide');
			}
			else{
				Swal.fire({
					title: 'Error!',
					text: 'There is something wrong',
					icon: 'error',
					confirmButtonText: 'Ok',
					confirmButtonColor: "#d63630"
				});
			}
		}
	});
}

function getMotivasi(){
	$.getJSON("../js/motivasi.json", function(motivasi) {
		const rand = Math.floor(Math.random() * 5);
		msg = motivasi.motivasi[rand].quote + " - " + motivasi.motivasi[rand].dari;
		$('#msg-motiv-toast').html(msg);
		const toastLiveExample = document.getElementById('motivationToast');
		const toast = new bootstrap.Toast(toastLiveExample);

		toast.show();
		console.log(motivasi.motivasi[rand].quote);
	});
	return false;
}

function downloadBasic(id){
	var ext = $(id).data('ext');
	var id = $(id).data('id');
	$.ajax({
		url: "../backend/subscribe/download_modul_basic.php",
		type: "POST",
		cache: false,
		data: {
			ext:ext,
			id:id,		
		},
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.statusCode);
			if(dataResult.statusCode==201){
				if(ext==="docx"){
					if(dataResult.file_exist==1){
						$('#downloadDocxBasic').css('width',((dataResult.download/dataResult.limit)*100)+'%');
						$('#contentPBDocx').html(dataResult.download+" / "+dataResult.limit);
					}
					console.log(dataResult);
					if(dataResult.is_reached==1){
						window.open('../pricing','_blank');
					}else{
						if(dataResult.is_download==1){
							window.open('./download-modul.php?id='+id+'&ext=docx','_blank');
						}
						if(dataResult.update==1){
							location.reload();
						}
					}
					
				}else{
					if(dataResult.file_exist==1){
						$('#downloadPDFBasic').css('width',((dataResult.download/dataResult.limit)*100)+'%');
						$('#contentPBPdf').html(dataResult.download+" / "+dataResult.limit);
					}
					if(dataResult.is_reached==1){
						window.open('../pricing','_blank');
					}else{
						if(dataResult.is_download==1){
							window.open('./download-modul.php?id='+id+'&ext=pdf','_blank');
						}
						if(dataResult.update==1){
							location.reload();
						}
					}
				}
			}
			else{
				console.log("There's something wrong");
			}
		}
	});
}


