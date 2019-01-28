$(document).ready(function(){
	createData();
	function createData(){
		$('#formKomentar').submit(function(e){
			$.ajaxSetup({
				header: {
					'X-CRSF-TOKEN':$('meta[name="csrf-token"').attr('content')
				}
			});
			e.preventDefault();
			$.ajax({
				url :'/komentar',
				type : 'post',
				data : new FormData(this),
				chace : true,
				contentType: false,
				processData: false,
				async: false,
				dataType: 'json',
				success: function(json) {
				if (json['redirect']) {
					location = json['redirect'];
				}
			}
			});
		
		});
	}
});