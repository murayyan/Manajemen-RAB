$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
	// Kita sembunyikan dulu untuk loadingnya
	$("#anggaran").hide();
	// $("#proyek").change(function(){ 
	// 	$("#anggaran").show(); 
	
		// $.ajax({
		// 	type: "POST", 
		// 	url: "option_kota.php", 
		// 	data: {provinsi : $("#provinsi").val()}, 
		// 	dataType: "json",
		// 	beforeSend: function(e) {
		// 		if(e && e.overrideMimeType) {
		// 			e.overrideMimeType("application/json;charset=UTF-8");
		// 		}
		// 	},
		// 	success: function(response){ 
		// 		setTimeout(function(){
		// 			$("#loading").hide(); 

					
		// 			$("#kota").html(response.data_kota).show();
		// 		}, 3000);
		// 	},
		// 	error: function (xhr, ajaxOptions, thrownError) { 
		// 		alert(thrownError);
		// 	}
		// });
    });
});
