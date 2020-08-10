var base_url = $('#baseurl').val();
var imgcounter = 0;
var imagearray = [];
$(document).on('focusin', function (e) { // for modal insert/edit link in tinyMCE
	if ($(e.target).closest(".tox-textfield").length)
		e.stopImmediatePropagation();
});

function bannerPreviewImage() {
	document.getElementById('preview_image').style.display = 'block';
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById('image_source_banner').files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById('preview_image').src = oFREvent.target.result;
	};
};

function servicePreviewImage() {
	document.getElementById('preview_image').style.display = 'block';
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById('image_source_service').files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById('preview_image').src = oFREvent.target.result;
	};
};



function productPreviewImage() {

	document.getElementById('preview_image').style.display = 'block';
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById('image_source_product').files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById('preview_image').src = oFREvent.target.result;
	};
};

function productLogoImage() {

	document.getElementById('previewlogo_image').style.display = 'block';
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById('image_source_productlogo').files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById('previewlogo_image').src = oFREvent.target.result;
	};
};

function showImgInfo() {
	if (imgcounter <= 0) {
		$('#imginfo').attr('style', 'display:none');
	} else if (imgcounter >= 1) {
		$('#imginfo').attr('style', 'display:block');
	}
}

function checkContactUs() {
	$.ajax({
		url: base_url + 'admin/contact_us/show_contactus',

		type: 'POST',
		datatype: 'JSON',
		async: false,
		processData: false,
		contentType: false,
		beforeSend: function () {
			document.getElementById('rpModal').style.display = 'block';
		},
		success: function (data) {
			var data = JSON.parse(data);

			document.getElementById('rpModal').style.display = 'none';
			if (data.status == 1) {
				$('.viewContactUs').show();
				$('.editContactUs').hide();

				$('#contacusId').val(data.data.id);
				$('#contactusTitle').text(data.data.title);
				$('#contactUsBody').html(data.data.description);
				$('#telpcontactus').html(data.data.telp);
				$('#whatsappcontactus').html(data.data.whatsapp);
				$('#emailcontactus').html(data.data.email);
			} else {
				$('.viewContactUs').hide();
				$('.editContactUs').show();
			}


		},
		error: function (e) {

			document.getElementById('rpModal').style.display = 'none';


		}
	});
}

// function usermanagement
function viewowner() {
	$('#ownerdata').dataTable({
		"sPaginationType": "full_numbers",

		"iDisplayLength": 30,
		"bDestroy": true,
		"bLengthChange": false,
		"aaSorting": [],
		"bAutoWidth": false,
		"bSortable": false,
		"bSortClasses": true,
		"responsive": true,
		"sAjaxSource": '<?php echo base_url(); ?>index.php/usermanegement', //ambil jsonnya di controler usermanagement
		"dom": 'Bfrtip',
		"buttons": [{
			"text": 'Add User',
			action: function (e, dt, node, config) {

				$('#addModal').modal('show');

			}
		}]
	});
}

function doviewrole() {
	var roleid = $('#role').val();
	getviewrole(roleid);

}

function changerole() {
	var roleid = $('#role').val();
	getviewrole(roleid);

}

function getviewrole(roleid) {

	$('#roledata').dataTable({
		"sPaginationType": "full_numbers",

		"iDisplayLength": 30,
		"bDestroy": true,
		"bLengthChange": false,
		"aaSorting": [],
		"bAutoWidth": false,
		"bSortable": false,
		"bSortClasses": true,
		"responsive": true,
		"sAjaxSource": '<?php echo base_url(); ?>index.php/usermanegement/getrole', //ambil jsonnya di controler usermanagement
		"fnServerParams": function (aoData) {
			aoData.push({
				'name': 'roleid',
				'value': roleid
			});
		}
	});
}

function editUser(id) {

	$.ajax({
		type: 'post',
		url: '<?php echo base_url(); ?>index.php/usermanegement/oneuser/' + id,

		success: function (msg) {
			var data = JSON.parse(msg)
			$('#uname').val(data.uname);
			$('#roleid').val(data.roleid);
			$('#userid').val(data.userid);
			$('#addModal').modal('show');
		}

	});
}

function validasi() {
	var uname = $('#uname').val();
	var roleid = $('#roleid').val();
	if (uname == '') {
		alert('Username Required');
		$('#uname').focus();
	} else if (roleid == '-') {
		alert('Roleid Required');
		$('#roleid').focus();
	}
	$('.loader').show();
	return true;
}

function savedata() {
	var uname = $('#uname').val();
	var id = $('#userid').val();
	var roleid = $('#roleid').val();
	$.ajax({
		type: 'post',
		url: '<?php echo base_url(); ?>index.php/usermanegement/saveUser/',
		data: 'userid=' + id + '&uname=' + uname + '&roleid=' + roleid,

		beforeSend: validasi,
		success: function (msg) {
			$('.loader').hide();

			var data = JSON.parse(msg);

			if (data.status == 1) {

				alert(data.msg);
				location.reload();

			} else {
				alert(data.msg);
			}

		}
	});
}

function closemodal() {
	$('#addModal').modal('hide');
	$('#umanagementform').resetForm();
	$('#roleid').val('');
	$('#userid').val('');
}

function deleteUser(id) {

	$("#dialog-delete").find('p').html('<p>Are you sure delete this user?</p>');
	$("#dialog-delete").dialog({
		autoOpen: false,
		height: 200,
		width: 350,
		title: 'Delete User',
		modal: true,
		buttons: {
			OK: function () {
				$.ajax({
					type: 'post',
					url: '<?php echo base_url(); ?>index.php/usermanegement/deleteUser/' + id,
					beforeSend: function () {
						$('.loader').show();
					},
					success: function (msg) {
						$('.loader').hide();
						var data = JSON.parse(msg);

						if (data.status == 1) {

							alert(data.msg);
							location.reload();

						} else {
							alert(data.msg);
						}
					}

				});
			},
			NO: function () {
				$(this).dialog("close");

			}
		}
	});


	$("#dialog-delete").dialog("open");

	$(".ui-dialog-titlebar-close").css('visibility', 'hidden');
	$("#dialog-delete").css('overflow', 'hidden');

}

function actionrole(permission, action) {
	var roleid = $('#role').val();
	$.ajax({
		type: 'post',
		url: '<?php echo base_url(); ?>index.php/usermanegement/changeroleaction/',
		data: 'permission=' + permission + '&roleid=' + roleid + '&action=' + action,
		//                                            datatype : "JSON",
		beforeSend: function () {
			$('.loader').show();
		},
		success: function (msg) {
			$('.loader').hide();
			var data = JSON.parse(msg);

			if (data.status == 1) {

				$('#alert').text(data.msg);
				$('#alert').prop('class', 'alert alert-success');
				$('#divadd').prop('style', 'top:218px;text-align:left;margin-bottom: 10px;');
				$('#alert').show();
				setTimeout(function () {
					$('#alert').fadeOut(500);
				}, 5000);
				getviewrole(roleid);

			} else {

				$('#alert').text(data.msg);
				$('#alert').prop('class', 'alert alert-danger');
				$('#divadd').prop('style', 'top:218px;text-align:left;margin-bottom: 10px;');
				$('#alert').show();
				setTimeout(function () {
					$('#alert').fadeOut(500);
				}, 5000);
			}

		}
	});
}

function chekusername() {
	var keys = $('#uname').val();
	$.ajax({
		type: 'post',
		url: '<?php echo base_url(); ?>index.php/usermanegement/checkusername/' + keys,
		success: function (msg) {
			var data = JSON.parse(msg);
			if (data.status == 0) {

				$('#uname').focus();

				$('#error').show();
				$('#error').prop('title', data.msg);
				$('#error').prop('class', "glyphicon glyphicon-remove").css('color', 'red');

			} else {
				$('#error').hide();
				$('#error').prop('title', data.msg);
				$('#error').prop('class', "glyphicon glyphicon-ok").css('color', 'green');
			}
		}

	});
}

function numberic(object) {
	var value = object.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
	var intRegex = /^[+-]?[0-9]{1,9}(?:\.[0-9]{1,2})?$/;
	if (!intRegex.test(value)) {
		return false;
	}
}
var options = {
	beforeSubmit: showRequest,
	success: showResponse,
	dataType: 'json'
};


function showRequest(formData, jqForm, options) {
	var uname = $('#uname').val();
	var roleid = $('#roleid').val();
	var pass = $('#passwd').val();
	var passkonfirm = $('#konfirmpasswd').val();
	if (pass != passkonfirm) {
		alert('Confirm Password not match');
		$('#konfirmpasswd').fokus();
	}
	if (uname == '') {
		alert('Username Required');

		$('#uname').focus();
	}
	if (roleid == '-') {
		alert('Roleid Required');
		$('#roleid').focus();
	}
	$('.loader').show();
	return true;
}

function showResponse(data) {

	$('.loader').hide();
	if (data.status == 1) {
		$('#umanagementform').resetForm();
		$('#addModal').modal('hide')
		alert(data.msg);
		location.reload();
	} else {
		alert(data.msg);
	}


}

function showpassword() {
	var role = $('#roleid').val();
	if (role == 7) {
		$('.divpassword').show();
	} else {
		$('.divpassword').hide();
	}
}

$(document).ready(function () {

	/* FUnction banner JS */

	$('#bannerAdd').on('click', function (e) {
		$('#bannerModal').modal('show');
		$('#bannerForm').parsley().reset();
		$("#title_banner_modal").text("Add banner");
		// var id = $('#bannerId').val();
		$('#preview_image').attr('style', 'display:none');
		$('#bannerId').val(null);
		$('#banner_title').val(null);
		tinyMCE.activeEditor.setContent('');
		$('#preview_image').attr('src', '');
		document.getElementById('image_source_banner').required = true;
	});

	checkContactUs();
	tinyMCE.activeEditor.on('keyup', function () {
		var id = this.id;
		// $('#parsley-id-9').attr('style', 'display:none');        
		$('#' + id).parsley().reset(); // hide message error from parsley validator
	});
	getcountproduct();
	$('#bannerForm').parsley();
	$('#bannerForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#bannerId').val();
		// alert(id);
		if (id != '') {
			url = base_url + 'admin/banner/edit_banner';
			// alert(url);
		} else {
			url = base_url + 'admin/banner/add_banner';
			// alert(url);
		}

		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);
					// console.log(data.status);
					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'banner';
						});
					} else {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}


				},
				error: function (e) {

					document.getElementById('rpModal').style.display = 'none';

					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}

	});

	/* Edit data table */
	$('#dataTable tbody').on('click', '#bannerEdit', function () {
		$('#bannerModal').modal('show');
		$('#bannerForm').parsley().reset();
		document.getElementById("image_source_banner").required = false;
		$("#title_banner_modal").text("Edit banner");

		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: 'banner/get_banner/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {
				document.getElementById('rpModal').style.display = 'none';
				var data = JSON.parse(data);

				if (data.status != null) {
					$('#preview_image').attr('style', 'display:block');
					$('#bannerId').val(data.data.id);
					$('#orderby').val(data.data.orderby);
					$('#banner_old_image').val(data.data.img_path);
					$('#preview_image').attr('src', base_url + '/assets/admin/upload/banner/' + data.data.img_path);
					tinyMCE.activeEditor.setContent(data.data.description);

				}
			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

	/* Delete data table */
	$('#dataTable tbody').on('click', '#bannerDelete', function () {
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		Swal.fire({
			title: 'Delete',
			text: 'Are you sure want to delete this banner?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			reverseButtons: true,
			cancelButtonText: 'No'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: 'banner/delete_banner/' + id,
					type: 'POST',
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (e) {
						document.getElementById('rpModal').style.display = 'none';
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'banner';
						});
					},
					error: function (e) {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not deleted.', // had a missing comma
							'error'
						);
					}
				});
			}
		});
	});
	/* Function Client JS */

	$('#clientAdd').on('click', function (e) {
		$('#clientModal').modal('show');
		$("#title_client_modal").text("Add client");
		$('#clientForm').parsley().reset();
		$('#client_title').val(null);
		$('#client_meta_title').val(null);
		$('#client_meta_desc').val(null);
		$('#client_order').val(null);

		$('#client_old_image').val(null);
		$('#preview_image').hide();

		$('#clientId').val(null);
		$('#client_title').val(null);
		tinyMCE.activeEditor.setContent('');

	});



	$('#clientForm').parsley();
	$('#clientForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#clientId').val();
		var logo = $('#image_source_client').val();
		var imgwarning = $('#logoimgclientwarning').val();
		if (id != '') {
			url = 'client/edit_client';

		} else {
			url = 'client/add_client';

		}
		if (imgwarning == '1') {
			swal.fire(
				'Error',
				'logo image tidak sesuai ketentuan', // had a missing comma
				'error'
			)
		} else {
			if (form.parsley().isValid()) {
				$.ajax({
					url: url,
					data: formData,
					type: 'POST',
					datatype: 'JSON',
					async: false,
					processData: false,
					contentType: false,
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (data) {
						var data = JSON.parse(data);

						document.getElementById('rpModal').style.display = 'none';
						if (data.status == 1) {
							Swal.fire({
								position: 'center',
								type: 'success',
								title: 'Data has been saved',
								showConfirmButton: false,
								timer: 1500
							}).then((timer) => {
								window.location.href = 'client';
							});
						} else {

							document.getElementById('rpModal').style.display = 'none';
							swal.fire(
								'Error',
								'Oops, your data was not saved.', // had a missing comma
								'error'
							)
						}


					},
					error: function (e) {

						document.getElementById('rpModal').style.display = 'none';

						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}
				});
			}
		}


	});

	/* Edit data table */
	$('#dataTable tbody').on('click', '#clientEdit', function () {
		$('#clientModal').modal('show');
		$('#clientForm').parsley().reset();
		$("#title_client_modal").text("Edit client");
		document.getElementById("image_source_client").required = false;

		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: 'client/get_client/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (msg) {
				document.getElementById('rpModal').style.display = 'none';
				var data = JSON.parse(msg);
				console.log(data);
				if (data.status != null) {
					$('#preview_image').attr('style', 'display:block');
					$('#clientId').val(data.data.id);
					$('#client_title').val(data.data.title);
					$('#client_meta_title').val(data.data.alt);
					$('#client_meta_desc').val(data.data.meta_description);
					$('#client_order').val(data.data.order_by);

					$('#client_old_image').val(data.data.logo_path);
					$('#preview_image').attr('src', base_url + '/assets/admin/upload/client/' + data.data.logo_path);
					tinyMCE.activeEditor.setContent(data.data.description);

				}
			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

	/* Delete data table */
	$('#dataTable tbody').on('click', '#clientDelete', function () {
		var id = $(this).attr('data-value');
		// console.log('Record ID is', id);     
		event.preventDefault(); // prevent form submit
		Swal.fire({
			title: 'Delete',
			text: 'Are you sure want to delete this News?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			reverseButtons: true,
			cancelButtonText: 'No'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: 'client/delete_client/' + id,
					type: 'POST',
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (e) {
						document.getElementById('rpModal').style.display = 'none';
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'client';
						});
					},
					error: function (e) {
						// console.log(e.toString());
						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not deleted.', // had a missing comma
							'error'
						);
					}
				});
			}
		});
	});

	$('#image_source_client').change(function (e) {
		$('.alertimgclient').hide()
		var file, img;
		var _URL = window.URL || window.webkitURL;
		if ((file = this.files[0])) {
			img = new Image();
			var objectUrl = _URL.createObjectURL(file);
			var minwidth = 225;
			var minheight = 225;
			console.log('sini');
			img.onload = function () {
				console.log('tum');
				if (this.width == this.height) {
					if (minwidth < this.width && minheight < this.height) {
						console.log('ok')
						document.getElementById('preview_image').style.display = 'block';
						var oFReader = new FileReader();
						oFReader.readAsDataURL(file);

						oFReader.onload = function (oFREvent) {
							document.getElementById('preview_image').src = oFREvent.target.result;
						};
						$('#logoimgclientwarning').val('0');
						_URL.revokeObjectURL(objectUrl);
					} else {
						console.log('aa');
						$('#logoimgclientwarning').val('1');
						$('.alertimgclient').show().text('lebar dan panjang logo minimal 225');
					}
				} else {
					console.log('bb')
					$('#logoimgclientwarning').val('1');
					$('.alertimgclient').show().text('panjang dan lebar logo harus sama');
				}
				// alert(this.width + " " + this.height);

			};
			img.src = objectUrl;
		}

	});


	/* ================================================================================================================= */
	/* Function Service JS */

	$('#serviceAdd').on('click', function (e) {
		$('#serviceModal').modal('show');
		$("#title_service_modal").text("Add Service");
		$('#serviceForm').parsley().reset();
		// var id = $('#newsId').val();

		$('#serviceId').val(null);
		$('#service_title').val(null);
		tinyMCE.activeEditor.setContent('');

	});

	// tinyMCE.activeEditor.on('keyup', function () {
	//     $('#parsley-id-9').attr('style', 'display:none');
	// });

	$('#serviceForm').parsley();
	$('#serviceForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#serviceId').val();

		if (id != '') {
			url = 'service/edit_service';

		} else {
			url = 'service/add_service';

		}

		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);

					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'service';
						});
					} else {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}


				},
				error: function (e) {

					document.getElementById('rpModal').style.display = 'none';

					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}
		// newsCreateUpdate(formData);
	});

	/* Edit data table */
	$('#dataTable tbody').on('click', '#serviceEdit', function () {
		$('#serviceModal').modal('show');
		$('#serviceForm').parsley().reset();
		$("#title_service_modal").text("Edit Service");
		document.getElementById("image_source_service").required = false;

		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: 'service/get_service/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (msg) {
				document.getElementById('rpModal').style.display = 'none';
				var data = JSON.parse(msg);
				console.log(data);
				if (data.status != null) {
					$('#preview_image').attr('style', 'display:block');
					$('#serviceId').val(data.data.id);
					$('#service_title').val(data.data.title);
					$('#service_meta_title').val(data.data.meta_title);
					$('#service_meta_desc').val(data.data.meta_description);


					$('#service_old_image').val(data.data.img_path);
					$('#preview_image').attr('src', base_url + '/assets/admin/upload/service/' + data.data.img_path);
					tinyMCE.activeEditor.setContent(data.data.description);

				}
			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

	/* Delete data table */
	$('#dataTable tbody').on('click', '#serviceDelete', function () {
		var id = $(this).attr('data-value');
		// console.log('Record ID is', id);     
		event.preventDefault(); // prevent form submit
		Swal.fire({
			title: 'Delete',
			text: 'Are you sure want to delete this News?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			reverseButtons: true,
			cancelButtonText: 'No'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: 'service/delete_service/' + id,
					type: 'POST',
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (e) {
						document.getElementById('rpModal').style.display = 'none';
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'service';
						});
					},
					error: function (e) {
						// console.log(e.toString());
						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not deleted.', // had a missing comma
							'error'
						);
					}
				});
			}
		});
	});



	/* ================================================================================================================= */

	/* Function contact us JS */

	$('#editbtnContactus').on('click', function (e) {
		$.ajax({
			url: base_url + 'admin/contact_us/show_contactus',

			type: 'POST',
			datatype: 'JSON',
			async: false,
			processData: false,
			contentType: false,
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {
				var data = JSON.parse(data);
				tinyMCE.activeEditor.setContent('');
				document.getElementById('rpModal').style.display = 'none';
				if (data.status == 1) {
					$('.viewContactUs').hide();
					$('.editContactUs').show();

					$('#contacusId').val(data.data.id);
					$('#contactus_title').val(data.data.title);
					console.log(data.data.description);
					tinyMCE.activeEditor.setContent(data.data.description);
					$('#telp').val(data.data.telp);
					$('#whatsapp').val(data.data.whatsapp);
					$('#email').val(data.data.email);
				} else {

					$('.viewContactUs').show();
					$('.editContactUs').hide();
				}


			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';


			}
		});

	});
	$('#cancelcontact').on('click', function () {
		checkContactUs();
	})

	$('#contactForm').parsley();
	$('#contactForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#contacusId').val();


		url = 'contact_us/save_contactus';
		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);

					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							checkContactUs();
						});

					} else {
						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}
				},
				error: function (e) {
					document.getElementById('rpModal').style.display = 'none';
					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}
		// newsCreateUpdate(formData);
	});


	// ========================================================================

	/* Function product JS */

	$('#productAdd').on('click', function (e) {
		e.preventDefault();
		$('#productModal').modal('show');
		$('#productForm').parsley().reset();

		$("#title_product_modal").text("Add Product");
		// var id = $('#productId').val();
		$('#preview_image').attr('style', 'display:none');
		$('#productId').val(null);
		$('#product_title').val(null);
		$('#product_old_image').val(null);
		$('#product_meta_title').val(null);
		$('#product_meta_desc').val(null);
		tinyMCE.activeEditor.setContent('');
		$('#preview_image').attr('src', '');

	});



	// tinyMCE.activeEditor.on('keyup', function () {
	//     $('#parsley-id-9').attr('style', 'display:none');
	// });

	$('#productForm').parsley();
	$('#productForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var selectimg = $('#selected_image').val();

		var id = $('#productId').val();

		if (id != '') {
			url = 'product/edit_product';

		} else {
			url = 'product/add_product';

		}

		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);

					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'product';
						});
					} else {
						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}

				},
				error: function (e) {

					document.getElementById('rpModal').style.display = 'none';

					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}

	});



	/* Edit data table */
	$('#dataTable tbody').on('click', '#productEdit', function () {
		$('#productModal').modal('show');
		$('#productForm').parsley().reset();
		imagearray = [];

		$("#title_product_modal").text("Edit Product");
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: 'product/get_product/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {
				var data = JSON.parse(data);

				if (data.status == '1') {

					$('#productId').val(data.data.id);
					$('#product_title').val(data.data.title);
					$('#product_meta_title').val(data.data.alt);
					$('#product_meta_desc').val(data.data.meta_description);
					$('#product_old_image').val(data.data.img_path);
					if (data.data.img_path) {
						$('#preview_image').attr('style', 'display:block');
						$('#preview_image').attr('src', base_url + '/assets/admin/upload/product/' + data.data.img_path);
					}


					tinyMCE.activeEditor.setContent(data.data.description);
				}
				document.getElementById('rpModal').style.display = 'none';
			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

	/* Delete data table */
	$('#dataTable tbody').on('click', '#productDelete', function () {
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		Swal.fire({
			title: 'Delete',
			text: 'Are you sure want to delete this Commission?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			reverseButtons: true,
			cancelButtonText: 'No'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: 'product/delete_product/' + id,
					type: 'POST',
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (e) {
						document.getElementById('rpModal').style.display = 'none';
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'product';
						});
					},
					error: function (e) {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not deleted.', // had a missing comma
							'error'
						);
					}
				});
			}
		});
	});
	getlistproductdetail();
	$('#dataTable tbody').on('click', '#productList', function () {

		var id = $(this).attr('data-value');
		location.replace(base_url + "admin/product/listprodukdetailview/" + id);

	});

	$('#productDetailForm').parsley();
	$('#productDetailForm').on('submit', function (e) {
		e.preventDefault();
		console.log('dada')
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var selectimg = $('#selected_image').val();

		var id = $('#productDetailId').val();

		if (id != '') {
			url = base_url + 'admin/product/edit_productdetail';

		} else {
			url = base_url + 'admin/product/add_productdetail';

		}

		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);

					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							$('#productDetailModal').modal('hide');
							getlistproductdetail();
						});
					} else {
						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}

				},
				error: function (e) {

					document.getElementById('rpModal').style.display = 'none';

					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}

	})
	$('#dataTabledetailproduct tbody').on('click', '#productDetailEdit', function () {
		$('#productDetailModal').modal('show');
		$('#productDetailForm').parsley().reset();
		imagearray = [];
	
		$("#title_productdetail_modal").text("Edit Product Detail");
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: base_url + 'admin/product/getprodukdetaildata/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {
				var data = JSON.parse(data);

				if (data.status == '1') {

					$('#productId').val(data.data.product_id);
					$('#productDetailId').val(data.data.id);
					$('#productDetail_title').val(data.data.title);
					$('#product_meta_title').val(data.data.meta_title);
					$('#sorting').val(data.data.orderby);
					$('#productlogo_old_image').val(data.data.path_logo);
					if (data.data.path_logo != '') {
						$('#previewlogo_image').attr('style', 'display:block');
						$('#previewlogo_image').attr('src', base_url + '/assets/admin/upload/product/' + data.data.path_logo);
					} else {
						$('#preview_image').attr('style', 'display:none');
					}
					$('#product_old_image').val(data.data.path_img);
					if (data.data.path_img != '') {
						$('#preview_image').attr('style', 'display:block');
						$('#preview_image').attr('src', base_url + '/assets/admin/upload/product/' + data.data.path_img);
					} else {
						$('#preview_image').attr('style', 'display:none');
					}
				
					if (data.data.parent != '0') {
						$('#ischild').prop('checked', true);
						$('.divIsParent').show();
						var productid = $('#productId').val();
						var id = $('#productDetailId').val();
						if (id == '') {
							id = 0
						}
						$.ajax({
							url: base_url + 'admin/product/getallproductdetail/' + productid + "/" + id,
							type: 'POST',
							beforeSend: function () {
								document.getElementById('rpModal').style.display = 'block';
							},
							success: function (dt) {
								document.getElementById('rpModal').style.display = 'none';
								$('#parent_id').html(dt);

	$('#parent_id').val(data.data.parent);

							},
							error: function (e) {

								document.getElementById('rpModal').style.display = 'none';
							}
						});
					
					}

					tinyMCE.activeEditor.setContent(data.data.description);
				}
				document.getElementById('rpModal').style.display = 'none';
			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

	$('#dataTabledetailproduct tbody').on('click', '#productDetailDelete', function () {
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		Swal.fire({
			title: 'Delete',
			text: 'Are you sure want to delete this product detail?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			reverseButtons: true,
			cancelButtonText: 'No'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: base_url + 'admin/product/deleteproductdetail/' + id,
					type: 'POST',
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (e) {
						document.getElementById('rpModal').style.display = 'none';
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							getlistproductdetail();
						});
					},
					error: function (e) {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not deleted.', // had a missing comma
							'error'
						);
					}
				});
			}
		});
	});

	$('#dataTabledetailproduct tbody').on('click', '#productspecdetailgenset', function () {

		imagearray = [];

		$("#title_productdetail_modal").text("Edit Product Detail");
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: base_url + 'admin/product/productdetailgenset/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {

				$('.divmodalspecdetail').html(data);
				document.getElementById('rpModal').style.display = 'none';
				$('#productDetailSpecModal').modal('show')
				$('#dataTabledetailproductspec').dataTable({
					// 'responsive':true
				});


			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});
	// getallproductdetail();
	$('#ischild').change(function () {

		if (this.checked) {
			$('.divIsParent').show();
		} else {
			$('.divIsParent').hide();
		}
	})

	$('#dataTabledetailproduct tbody').on('click', '#productspecdetailportable', function () {

		imagearray = [];

		// $("#title_productdetail_modal").text("Edit Product Detail");
		var id = $(this).attr('data-value');

		event.preventDefault(); // prevent form submit
		$.ajax({
			url: base_url + 'admin/product/productdetaillauntop/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {

				document.getElementById('rpModal').style.display = 'none';
				$('#productDetailSpecModal').modal('show')
				// $('#dataTabledetailproductspec').dataTable({
				// 	// 'responsive':true
				// });


			},
			error: function (e) {

				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					// $('.divmodalspecdetail').html(data);
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});
	/* ================================================================================================================= */

	/* Function about_us JS */

	$('#about_usAdd').on('click', function (e) {
		$('#about_usModal').modal('show');
		$('#about_usForm').parsley().reset();
		$("#title_about_us_modal").text("Add about_us");
		// var id = $('#about_usId').val();
		$('#preview_image').attr('style', 'display:none');
		$('#about_usId').val(null);
		$('#about_us_title').val(null);
		tinyMCE.activeEditor.setContent('');
	});

	$('#about_usForm').parsley();
	$('#about_usForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#about_usId').val();

		if (id != '') {
			url = 'about_us/edit_about_us';

		} else {
			url = 'about_us/add_about_us';

		}

		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);

					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'about_us';
						});
					} else {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not saved.', // had a missing comma
							'error'
						)
					}


				},
				error: function (e) {

					document.getElementById('rpModal').style.display = 'none';

					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}

	});

	/* Edit data table */
	$('#dataTable tbody').on('click', '#about_usEdit', function () {
		$('#about_usModal').modal('show');
		$('#about_usForm').parsley().reset();
		$("#title_about_us_modal").text("Edit about_us");
		// var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
		var id = $(this).attr('data-value');
		// console.log('Record ID is', id);
		event.preventDefault(); // prevent form submit
		$.ajax({
			url: 'about_us/get_about_us/' + id,
			type: 'POST',
			beforeSend: function () {
				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {
				document.getElementById('rpModal').style.display = 'none';
				var data = JSON.parse(data);
				// console.log(data);
				if (data.status != null) {
					$('#preview_image').attr('style', 'display:block');
					$('#about_usId').val(data.data.id);
					$('#about_us_title').val(data.data.title);
					$('#meta_title').val(data.data.meta_title);
					$('#meta_desc').val(data.data.meta_description);
					$('#old_image').val(data.data.image);

					tinyMCE.get('vision_mission').setContent(data.data.vision_mission);
					tinyMCE.get('about_us_desc').setContent(data.data.description);
					//tinyMCE.activeEditor.setContent(data.data.description);

				}
			},
			error: function (e) {
				// console.log(e.toString());  
				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

	/* Delete data table */
	$('#dataTable tbody').on('click', '#about_usDelete', function () {
		var id = $(this).attr('data-value');
		// console.log('Record ID is', id);     
		event.preventDefault(); // prevent form submit
		Swal.fire({
			title: 'Delete',
			text: 'Are you sure want to delete this about_us?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			reverseButtons: true,
			cancelButtonText: 'No'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: 'about_us/delete_about_us/' + id,
					type: 'POST',
					beforeSend: function () {
						document.getElementById('rpModal').style.display = 'block';
					},
					success: function (e) {
						document.getElementById('rpModal').style.display = 'none';
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'about_us';
						});
					},
					error: function (e) {
						// console.log(e.toString());
						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							'Oops, your data was not deleted.', // had a missing comma
							'error'
						);
					}
				});
			}
		});
	});


	// function users
	$('#userAdd').on('click', function (e) {
		$('#userModal').modal('show');
		$('#userForm').parsley().reset();
		$("#title_user_modal").text("Add User");

		$('#userId').val(null);
		$('#username').val(null);
		$('#currentpasswords').val(null);
		$('#passwords').val(null);
		$('#confirmpasswords').val(null);
		$('.divusername').show();
		$('.divpassword').show();
		$('.divcurrentpassword').hide();


	});

	$('#userForm').parsley();
	$('#userForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#userId').val();
		var types = $('#typeedit').val();

		if (id != '') {
			if (types == "password") {
				url = 'user/edit_password';
			} else {
				url = 'user/edit_user';
			}
		} else {
			url = 'user/add_user';

		}

		if (form.parsley().isValid()) {
			$.ajax({
				url: url,
				data: formData,
				type: 'POST',
				datatype: 'JSON',
				async: false,
				processData: false,
				contentType: false,
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (data) {
					var data = JSON.parse(data);

					document.getElementById('rpModal').style.display = 'none';
					if (data.status == 1) {
						Swal.fire({
							position: 'center',
							type: 'success',
							title: 'Data has been saved',
							showConfirmButton: false,
							timer: 1500
						}).then((timer) => {
							window.location.href = 'user';
						});
					} else {

						document.getElementById('rpModal').style.display = 'none';
						swal.fire(
							'Error',
							data.messages, // had a missing comma
							'error'
						)
					}
				},
				error: function (e) {
					document.getElementById('rpModal').style.display = 'none';

					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}

	});

	/* Edit data table */
	$('#dataTable tbody').on('click', '#changePassword', function () {
		$('#userModal').modal('show');
		$('#userForm').parsley().reset();
		$("#title_user_modal").text("Edit Password");
		$("#typeedit").val('password');
		var id = $(this).attr('data-value');
		$("#username").prop('required', false);
		$("#currentpasswords").prop('required', true);
		$('#userId').val(id);
		$('.divpassword').show();
		$('.divcurrentpassword').show();
		$('.divusername').hide();
	});
	$('#dataTable tbody').on('click', '#userEdit', function () {
		$('#userModal').modal('show');
		$('#userForm').parsley().reset();
		$("#title_user_modal").text("Edit Username");
		$("#typeedit").val('user');
		var id = $(this).attr('data-value');
		event.preventDefault(); // prevent form submit
		$.ajax({
			url: 'user/get_user/' + id,
			type: 'POST',
			beforeSend: function () {



				document.getElementById('rpModal').style.display = 'block';
			},
			success: function (data) {
				document.getElementById('rpModal').style.display = 'none';
				var data = JSON.parse(data);

				$('.divpassword').hide();
				$('.divcurrentpassword').hide();
				$('.divusername').show();
				if (data.status != null) {
					$('#userId').val(data.data.id);
					$('#username').val(data.data.username);
					$("#currentpasswords").prop('required', false);
					$("#passwords").prop('required', false);
					$("#confirmpasswords").prop('required', false);

				}
			},
			error: function (e) {
				// console.log(e.toString());  
				document.getElementById('rpModal').style.display = 'none';
				swal.fire(
					'Error',
					'Oops, your data was not updated.', // had a missing comma
					'error'
				);
			}
		});
	});

});

/* Delete data table */
$('#dataTable tbody').on('click', '#userDelete', function () {
	var id = $(this).attr('data-value');
	// console.log('Record ID is', id);     
	event.preventDefault(); // prevent form submit
	Swal.fire({
		title: 'Delete',
		text: 'Are you sure want to delete this user?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes',
		reverseButtons: true,
		cancelButtonText: 'No'
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url: 'user/delete_user/' + id,
				type: 'POST',
				beforeSend: function () {
					document.getElementById('rpModal').style.display = 'block';
				},
				success: function (e) {
					document.getElementById('rpModal').style.display = 'none';
					Swal.fire({
						position: 'center',
						type: 'success',
						title: 'Data has been saved',
						showConfirmButton: false,
						timer: 1500
					}).then((timer) => {
						window.location.href = 'user';
					});
				},
				error: function (e) {
					// console.log(e.toString());
					document.getElementById('rpModal').style.display = 'none';
					swal.fire(
						'Error',
						'Oops, your data was not deleted.', // had a missing comma
						'error'
					);
				}
			});
		}
	});

});

function clickproductdetailadd() {

	$('#productDetailModal').modal('show');
	$('#productDetailForm').parsley().reset();

	$("#title_productDetail_modal").text("Add Product Detail");
	// var id = $('#productId').val();
	$('#preview_image').attr('style', 'display:none');
	$('#previewlogo_image').attr('style', 'display:none');
	$('#productDetailId').val(null);
	$('#productDetail_title').val(null);
	$('#product_old_image').val(null);
	$('#product_meta_title').val(null);
	$('#product_meta_desc').val(null);
	$('#sorting').val(null);
	tinyMCE.activeEditor.setContent('');
	$('#preview_image').attr('src', '');
	getallproductdetail();
}

function getlistproductdetail() {
	var produkid = $('#product_id').val();
	$('#dataTabledetailproduct').dataTable({
		"sPaginationType": "full_numbers",

		"iDisplayLength": 30,
		"bDestroy": true,
		"bLengthChange": false,
		"aaSorting": [],
		"bAutoWidth": false,
		"bSortable": false,
		"bSortClasses": true,
		"responsive": true,
		"sAjaxSource": base_url + 'admin/product/listprodukdetaildata/' + produkid, //ambil jsonnya di controler usermanagement
		// "fnServerParams": function (aoData) {
		// 	aoData.push({
		// 		'name': 'produk_id',
		// 		'value': produkid
		// 	});
		// }
	});
}

function getcountproduct() {
	$.ajax({
		url: base_url + "admin/product/getcountproductdetail",

		type: 'POST',
		datatype: 'JSON',
		async: false,
		processData: false,
		contentType: false,
		beforeSend: function () {
			document.getElementById('rpModal').style.display = 'block';
		},
		success: function (data) {

			document.getElementById('rpModal').style.display = 'none';
			if (data == 2) {
				$('#productAdd').hide();
			} else {
				$('#productAdd').show();
			}

		},
		error: function (e) {
			document.getElementById('rpModal').style.display = 'none';
		}
	});

}

function getallproductdetail() {
	var productid = $('#productId').val();
	var id = $('#productDetailId').val();
	if(id==''){
		id=0
	}
	$.ajax({
		url: base_url + 'admin/product/getallproductdetail/' + productid + "/" + id,
		type: 'POST',
		beforeSend: function () {
			document.getElementById('rpModal').style.display = 'block';
		},
		success: function (data) {
			document.getElementById('rpModal').style.display = 'none';
			$('#parent_id').html(data);



		},
		error: function (e) {

			document.getElementById('rpModal').style.display = 'none';
		}
	});
}
