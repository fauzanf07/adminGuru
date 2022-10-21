$(document).ready( function () {
    $('#tableModul').DataTable();
} );

$('#logout').click(function(){
	window.location.href = "../backend/logout/logout.php";
});


$('#programKeahlian').on('change',function(){
	var prokel = $(this).val();
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
			}
			else if(dataResult.statusCode==202){
				console.log('gagal');
			}
		}
	});
});

$('#mapel').on('change',function(){
	var mapel = $(this).val();
	$.ajax({
		url: "../backend/create-modul-ajar/get_data_from_mapel.php",
		type: "POST",
		data: {
			mapel: mapel			
		},
		cache: false,
		success: function(dataResult){
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
				
			}
			else if(dataResult.statusCode==202){
				console.log('gagal');
			}
		}
	});
})

$('#kelas').on('change',function(){
	var kelas = $(this).val();
	if(kelas==="x"){
		$('#fase').val('E');
	}else{
		$('#fase').val('F');
	}
});

$('#elemen').on('change',function(){
	var elemen = $(this).val();
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
});


$('#buatModulAjar').click(function(){
	$('#spinner').css('display','inline-block');

	var modul_ajar = new Object();
	modul_ajar.nama = $('#namaPenyusun').val();
	modul_ajar.satuanPend = $('#satuanPend').val();
	modul_ajar.kepala_sekolah = $('#kepala_sekolah').val();
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
			createModulPdf(id_identitas);
		}
	});
}

function createModulPdf(id){
	var id_identitas = id;
	$('#spinner').css('display','none');
	$.ajax({
		url: "../backend/modul/create-pdf.php",
		type: "POST",
		data: {
			id: id_identitas		
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.statusCode);
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

function downloadDocs(id){
	var id_identitas = $(id).data('id');
	$('#spinnerDownload'+id_identitas).css('display','inline-block');
	$.ajax({
		url: "../backend/create-modul-ajar/is_modul_created.php",
		type: "POST",
		data: {
			id: id_identitas		
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.statusCode);
			if(dataResult.statusCode==202){
				createModulDocx(id_identitas);
			}
			else if(dataResult.statusCode==201){
				window.open('./download-modul.php?id='+id_identitas+'&ext=docx', '_blank');
				$('#spinnerDownload').css('display','none');
			}
		}
	});
}

function downloadPdf(id){
	var id_identitas = $(id).data('id');
	$('#spinnerDownload'+id_identitas).css('display','inline-block');
	$.ajax({
		url: "../backend/create-modul-ajar/is_modul_created.php",
		type: "POST",
		data: {
			id: id_identitas		
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult.statusCode);
			if(dataResult.statusCode==202){
				createModulPdf(id_identitas);
			}
			else if(dataResult.statusCode==201){
				window.open('./download-modul.php?id='+id_identitas+'&ext=pdf', '_blank');
				$('#spinnerDownload').css('display','none');
			}
		}
	});
}


function hapusModul(id){
	var id_identitas = $(id).data('id');
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
				id: id_identitas		
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


