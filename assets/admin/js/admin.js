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


function showImgInfo() {
	if (imgcounter <= 0) {
		$('#imginfo').attr('style', 'display:none');
	} else if (imgcounter >= 1) {
		$('#imginfo').attr('style', 'display:block');
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


	tinyMCE.activeEditor.on('keyup', function () {
		var id = this.id;
		// $('#parsley-id-9').attr('style', 'display:none');        
		$('#' + id).parsley().reset(); // hide message error from parsley validator
	});

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
					// window.location.href = 'home';
					document.getElementById('rpModal').style.display = 'none';
					// console.log(e.toString());
					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}
		// bannerCreateUpdate(formData);
	});

	/* Edit data table */
	$('#dataTable tbody').on('click', '#bannerEdit', function () {
		$('#bannerModal').modal('show');
		$('#bannerForm').parsley().reset();
		document.getElementById("image_source_banner").required = false;
		$("#title_banner_modal").text("Edit banner");
		// var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
		var id = $(this).attr('data-value');
		// console.log('Record ID is', id);
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
				// console.log(data);
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
	$('#dataTable tbody').on('click', '#bannerDelete', function () {
		var id = $(this).attr('data-value');
		// console.log('Record ID is', id);     
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

		$("#title_product_modal").text("Edit Commission");
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
					$('#preview_image').attr('style', 'display:block');
					$('#productId').val(data.data.id);
					$('#product_title').val(data.data.alt);
					$('#product_meta_title').val(data.data.meta_title);
					$('#product_meta_desc').val(data.data.meta_description);
					$('#product_old_image').val(data.data.img_path);
					$('#preview_image').attr('src', base_url + '/assets/admin/upload/product/' + data.data.img_path);

					tinyMCE.activeEditor.setContent(data.data[0].description);
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

	// tinyMCE.activeEditor.on('keyup', function () {
	//     $('#parsley-id-9').attr('style', 'display:none');
	// });

	$('#about_usForm').parsley();
	$('#about_usForm').on('submit', function (e) {
		e.preventDefault();
		var url;
		var form = $(this);
		form.parsley().validate();
		var formData = new FormData(this);
		var id = $('#about_usId').val();
		// alert(id);
		if (id != '') {
			url = 'about_us/edit_about_us';
			// alert(url);
		} else {
			url = 'about_us/add_about_us';
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
					// window.location.href = 'home';
					document.getElementById('rpModal').style.display = 'none';
					// console.log(e.toString());
					swal.fire(
						'Error',
						'Oops, your data was not saved.', // had a missing comma
						'error'
					)
				}
			});
		}
		// about_usCreateUpdate(formData);
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
					$('#old_image').val(data.data.image);
					tinyMCE.activeEditor.setContent(data.data.description);

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
	
});
