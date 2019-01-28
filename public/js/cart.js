$(document).ready(function(){
	createData();
	function createData(){
		$('#formCart').submit(function(e){
			$.ajaxSetup({
				header: {
					'X-CRSF-TOKEN':$('meta[name="csrf-token"').attr('content')
				}
			});
			e.preventDefault();
			$.ajax({
				url :'/produk',
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

				if (json['success']) {
				     $.notify({
				     	message: json['success'],
				     	target: '_blank'
				     },{
				     	// settings
				     	element: 'body',
				     	position: null,
				     	type: "info",
				     	allow_dismiss: true,
				     	newest_on_top: false,
				     	placement: {
				     		from: "top",
				     		align: "center"
				     	},
				     	offset: 0,
				     	spacing: 10,
				     	z_index: 2031,
				     	delay: 5000,
				     	timer: 1000,
				     	url_target: '_blank',
				     	mouse_over: null,
				     	animate: {
				     		enter: 'animated fadeInDown'
				     		//exit: 'animated fadeOutUp'
				     	},
				     	onShow: null,
				     	onShown: null,
				     	onClose: null,
				     	onClosed: null,
				     	icon_type: 'class',
				     	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
				     		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +
				     		'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
				     		'<div class="progress" data-notify="progressbar">' +
				     			'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
				     		'</div>' +
				     		'<a href="{3}" target="{4}" data-notify="url"></a>' +
				     	'</div>' 
				     });

					// $('#cart > ul').load('partial.header');
					// 	$('#cart > button').html('<span id="cart-total">' + json['total'] + '</span>'+'<span id="cart-title">' + json['headingtitle'] + '</span>');
						
				}
			}
			});
		
		});
	}

	$(document).on('click','deleteCart', function(){
		var bebas = $(this).attr('id');
		$.ajax({
			url : '/deletecart',
			method: "get",
			data : {id:bebas},

		});
	});
});