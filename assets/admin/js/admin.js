var imgcounter = 0;
var imagearray = [];
$(document).on('focusin', function(e) { // for modal insert/edit link in tinyMCE
    if ($(e.target).closest(".tox-textfield").length)
        e.stopImmediatePropagation();
});
function galleryPreviewImage() {
    document.getElementById('preview_image').style.display = 'block';
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById('image_source_gallery').files[0]);

    oFReader.onload = function(oFREvent) {
        document.getElementById('preview_image').src = oFREvent.target.result;
    };
};

function servicePreviewImage() {
    document.getElementById('preview_image').style.display = 'block';
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById('image_source_news').files[0]);

    oFReader.onload = function(oFREvent) {
        document.getElementById('preview_image').src = oFREvent.target.result;
    };
};

function comissionsPreviewImage(squence) {
    var size = $('#image_source_comissions'+squence)[0].files[0].size; // get file size
    // console.log(size);
    var ext = $('#image_source_comissions'+squence).val().split('.').pop().toLowerCase(); // get file extension
    if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
        // alert('invalid extension!');
        swal.fire(                
            'Invalid Extension. Only .png, .jpg, .jpeg, format is allowed' // had a missing comma
        )
    }else if(size > 10485760){ // 10485760 => 10MB
        swal.fire(                
            'Maximal Size 10MB' // had a missing comma
        )
    }else{
        document.getElementById('preview_image'+squence).style.display = 'inline-block';    
        document.getElementById('remove_img_preview'+squence).style.display = 'inline-block';
        document.getElementById('previewselect'+squence).style.display = 'inline-block';
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById('image_source_comissions'+squence).files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById('preview_image'+squence).src = oFREvent.target.result;
        };
        imgcounter = imgcounter + 1; // count img. max img 5
        // console.log('cek img c ' + imgcounter);
        // console.log('cek img array ' + imagearray);
        
        var selectedimg = $('#selected_image').val();  
        $("input[name=selected_image]").parsley().reset(); 
        if (imgcounter == 1 || selectedimg == '') { // auto select image 1
            // $('#parsley-id-7').attr('style', 'display:none');
            $('#previewselect'+squence).addClass('select_img_preview');
            $('#preview_image'+squence).addClass('selected');
            $('#selected_image').val('image_source_comissions'+squence);
            $('#unselect').val(squence);
        }
        imagearray.push(squence); // push squence to img array for index
        showImgInfo();
    }    
};

function comissionsDeleteImage(squence){
    // console.log(squence);
    var select = $('#selected_image').val();
    $('#imagepeview'+squence).remove();
    imagearray.splice($.inArray(squence, imagearray), 1); // remove squence from imagearray
    // console.log('cek img arr del ' + imagearray);
    if ('image_source_comissions'+squence == select) {
        if (imagearray != '') {
            $('#selected_image').val('image_source_comissions'+imagearray[0]);        
            $('#unselect').val(imagearray[0]);
            $('#previewselect'+imagearray[0]).addClass('select_img_preview');
            $('#preview_image'+imagearray[0]).addClass('selected');  
        }else {
            $('#selected_image').val(null);        
            $('#unselect').val(null);
        }
    }
    imgcounter = imgcounter - 1;
    // console.log('cek img c ' + imgcounter);
    showImgInfo();
}

function comissionsDeleteEditImage(squence){
    // console.log(squence);
    $('#comissionsForm').parsley().reset();
    var select = $('#selected_image').val();
    $('#imagepeview'+squence).remove();
    $('#image_fdelete'+squence).val('1');    
    imagearray.splice($.inArray(squence, imagearray), 1); // remove squence from imagearray
    // console.log('cek img arr del ' + imagearray);
    // alert(select);
    if ('image_source_comissions_old'+squence == select || 'image_source_comissions'+squence == select) {
        if (imagearray != '') {
            $('#selected_image').val('image_source_comissions'+imagearray[0]);       
            $('#unselect').val(imagearray[0]);         
            $('#previewselect'+imagearray[0]).addClass('select_img_preview');
            $('#preview_image'+imagearray[0]).addClass('selected');  
        }else {
            $('#selected_image').val('');       
            $('#unselect').val('');
        }
    }
    imgcounter = imgcounter - 1;
    // console.log('cek img c ' + imgcounter);
    showImgInfo();
}

function comissionsSelectImage(squence){
    var unselect = $('#unselect').val();
    // console.log("cekk unselect " + unselect);
    $('#imagepeview'+squence).on('click', 'img', function() {
        $(this).addClass('selected');
        if (unselect != squence) {            
            $('#preview_image'+squence).addClass('selected');  
            $('#previewselect'+squence).addClass('select_img_preview');
            $('#preview_image'+unselect).removeClass('selected');  
            $('#previewselect'+unselect).removeClass('select_img_preview'); 
        }      
        $('#selected_image').val('image_source_comissions'+squence);
        $('#unselect').val(squence);
    });
}

function showImgInfo(){
    if (imgcounter <= 0) {        
        $('#imginfo').attr('style', 'display:none');
    }else if(imgcounter >= 1){
        $('#imginfo').attr('style', 'display:block');
    }
}

function comissionsAddImage(){
    var sequence_image = $('#sequence_image').val();
    var resultSequence = parseInt(sequence_image) + 1;    

    if (imgcounter >=5 ) {
        swal.fire(                
            'Maximal 5 images' // had a missing comma
        )
    } else {
        var html =  
                "<div id='imagepeview"+resultSequence+"' style='display:inline-block'>"+  
                "<input type='file' name='image_source_comissions"+resultSequence+"' class='image_source_comissions"+resultSequence+"' id='image_source_comissions"+resultSequence+"' style='display: none;' onchange='comissionsPreviewImage("+resultSequence+")' accept='image/jpg,image/png,image/jpeg'> " +
                "<span style='position:relative'>"+
                "<img src='' id='preview_image"+resultSequence+"' style='display: none;' class='preview_image"+resultSequence+" thumb' onclick='comissionsSelectImage("+resultSequence+")'>"+
                "<span  id='remove_img_preview"+resultSequence+"' class='remove_img_preview' style='display:none;' onclick='comissionsDeleteImage("+resultSequence+")'></span><span id='previewselect"+resultSequence+"' style='display:none;'></span>" +
                "</span></div>"           
        // console.log(resultSequence);   
        $('#comissions_preview_image').append(html);
        $('#sequence_image').val(resultSequence);
        var file_banner_assets = document.getElementById('image_source_comissions'+resultSequence);
        file_banner_assets.click();    
    }    
}

$(document).ready(function (){

    /* FUnction Gallery JS */

    $('#galleryAdd').on('click', function (e) {
        $('#galleryModal').modal('show');
        $('#galleryForm').parsley().reset();
        $("#title_gallery_modal").text("Add Gallery");    
        // var id = $('#galleryId').val();
        $('#preview_image').attr('style', 'display:none');
        $('#galleryId').val(null);
        $('#gallery_title').val(null);
        tinyMCE.activeEditor.setContent('');
        $('#preview_image').attr('src', '');
        document.getElementById('image_source_gallery').required = true;
    });

   
    tinyMCE.activeEditor.on('keyup', function () {
        var id = this.id;
        // $('#parsley-id-9').attr('style', 'display:none');        
        $('#'+id).parsley().reset(); // hide message error from parsley validator
    });
   
    $('#galleryForm').parsley();
    $('#galleryForm').on('submit', function(e){
        e.preventDefault();
        var url;
        var form = $(this);
        form.parsley().validate();
        var formData = new FormData(this);
        var id = $('#galleryId').val();
        // alert(id);
        if (id != '') {
            url = base_url+'admin/gallery/edit_gallery';
            // alert(url);
        }else{
            url = base_url+'admin/gallery/add_gallery';
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
                        }).then((timer)=>{
                            window.location.href = 'gallery';
                        });
                    }else{
    
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
        // galleryCreateUpdate(formData);
    });

    /* Edit data table */
    $('#dataTable tbody').on('click', '#galleryEdit', function (){
        $('#galleryModal').modal('show');
        $('#galleryForm').parsley().reset();
        document.getElementById("image_source_gallery").required = false;
        $("#title_gallery_modal").text("Edit Gallery");    
        // var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);
        event.preventDefault(); // prevent form submit
        $.ajax({
            url: 'gallery/get_gallery/'+ id,
            type: 'POST',
            beforeSend: function () {
                document.getElementById('rpModal').style.display = 'block';
            },
            success: function(data){
                document.getElementById('rpModal').style.display = 'none';
                var data = JSON.parse(data);
                // console.log(data);
                if (data.status != null) {
                    $('#preview_image').attr('style', 'display:block');
                    $('#galleryId').val(data.data.id);
                    $('#gallery_title').val(data.data.title);
                    $('#gallery_old_image').val(data.data.image);
                    $('#preview_image').attr('src', base_url + '/assets/admin/upload/gallery/' + data.data.image);
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
    $('#dataTable tbody').on('click', '#galleryDelete', function (){
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);     
        event.preventDefault(); // prevent form submit
        Swal.fire({
            title: 'Delete',
            text: 'Are you sure want to delete this Gallery?',
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
                    url: 'gallery/delete_gallery/'+ id,
                    type: 'POST',
                    beforeSend: function () {
                        document.getElementById('rpModal').style.display = 'block';
                    },
                    success: function(e){
                        document.getElementById('rpModal').style.display = 'none';
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Data has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((timer)=>{
                            window.location.href = 'gallery';
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

     /* Function News JS */

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
    $('#serviceForm').on('submit', function(e){
        e.preventDefault();
        var url;
        var form = $(this);
        form.parsley().validate();
        var formData = new FormData(this);
        var id = $('#newsId').val();
        // alert(id);
        if (id != '') {
            url = 'service/edit_service';
            // alert(url);
        }else{
            url = 'service/add_service';
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
                        }).then((timer)=>{
                            window.location.href = 'news';
                        });
                    }else{
    
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
        // newsCreateUpdate(formData);
    });

    /* Edit data table */
    $('#dataTable tbody').on('click', '#newsEdit', function (){
        $('#newsModal').modal('show');
        $('#newsForm').parsley().reset();
        $("#title_news_modal").text("Edit News");    
        document.getElementById("image_source_news").required = false;
        // var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);
        event.preventDefault(); // prevent form submit
        $.ajax({
            url: 'news/get_news/'+ id,
            type: 'POST',
            beforeSend: function () {
                document.getElementById('rpModal').style.display = 'block';
            },
            success: function(data){
                document.getElementById('rpModal').style.display = 'none';
                var data = JSON.parse(data);
                // console.log(data);
                if (data.status != null) {
                    $('#preview_image').attr('style', 'display:block');
                    $('#newsId').val(data.data.id);
                    $('#news_title').val(data.data.title);
                    $('#news_old_image').val(data.data.image);
                    $('#preview_image').attr('src', base_url + '/assets/admin/upload/news/' + data.data.image);
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
    $('#dataTable tbody').on('click', '#newsDelete', function (){
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
                    url: 'news/delete_news/'+ id,
                    type: 'POST',
                    beforeSend: function () {
                        document.getElementById('rpModal').style.display = 'block';
                    },
                    success: function(e){
                        document.getElementById('rpModal').style.display = 'none';
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Data has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((timer)=>{
                            window.location.href = 'news';
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

     /* Function comissions JS */

    $('#comissionsAdd').on('click', function (e) {
        e.preventDefault();
        $('#comissionsModal').modal('show');
        $('#comissionsForm').parsley().reset();
        showImgInfo();
        imagearray = [];
        // console.log('cek img arr ' + imagearray);
        $("#title_comissions_modal").text("Add Commission");    
        // var id = $('#comissionsId').val();
        $('#preview_image').attr('style', 'display:none');
        $('#comissionsId').val(null);
        $('#comissions_title').val(null);
        tinyMCE.activeEditor.setContent('');
        $('#preview_image').attr('src', '');
        document.getElementById('selected_image').required = true;
    });
    
    $('#comissionsModal').on('hidden.bs.modal', function () { 
        $(this).find("input,textarea,select").val('').end();
        $('#comissions_preview_image').empty();
    });

    $('#comissionsViewModal').on('hidden.bs.modal', function () {
        $('#label_title').remove();
        $('#label_desc').remove();
        $('#div_view').remove();
    });

    // tinyMCE.activeEditor.on('keyup', function () {
    //     $('#parsley-id-9').attr('style', 'display:none');
    // });

    $('#comissionsForm').parsley();
    $('#comissionsForm').on('submit', function(e){
        e.preventDefault();
        var url;
        var form = $(this);
        form.parsley().validate();
        var formData = new FormData(this);
        var selectimg = $('#selected_image').val();

        var id = $('#comissionsId').val();
        // alert(id);
        if (id != '') {
            url = 'comissions/edit_comissions';
            // alert(url);
        }else{
            url = 'comissions/add_comissions';
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
                        }).then((timer)=>{
                            window.location.href = 'comissions';
                        });
                    }else{        
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
        // comissionsCreateUpdate(formData);
    });

    $('#dataTable tbody').on('click', '#comissionsView', function (){
        $('#comissionsViewModal').modal('show');
        // var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);
        $.ajax({
            url: 'comissions/view_comissions/'+ id,
            type: 'POST',
            beforeSend: function () {
                document.getElementById('rpModal').style.display = 'block';
            },
            success: function(data){                
                var data = JSON.parse(data);
                // console.log(data.status);                
                // console.log(data.data[0].title);
                if (data.status == '1') {
                    $('#view_title').append('<label id="label_title" class="label_view">' + data.data[0].title + '</label>');
                    $('#view_desc').append('<label id="label_desc" class="label_view" style="text-align:justify;">' + data.data[0].description + '</label>');
                    $('#view_image').append('<div id="div_view" class="view">' + '</div>');

                    for(var i = 0; i < data.data[0].image.length; i++){
                        var html = "<div id='imagepeview"+i+"' style='display:inline-block'>"+                            
                        "<span style='position:relative'>"+
                        "<img src='"+base_url+"/assets/admin/upload/comissions/"+data.data[0].image[i].image+"' id='preview_image"+i+"' class='preview_image"+i+" thumb' style='margin:5px;cursor:unset;pointer-events: none;'>"+
                        "<span id='previewselect"+i+"' style='margin-left:5px;cursor:unset;'></span>" +
                        "</span></div>"
                        $('#div_view').append(html);
                        if (data.data[0].image[i].status == '1') {                 
                            $('#unselect').val(i);               
                            $('#selected_image').val('image_source_comissions_old'+i);
                            $('#previewselect'+i).addClass('select_img_preview');
                            $('#preview_image'+i).addClass('selected');
                        }
                    }
                }
                document.getElementById('rpModal').style.display = 'none';
            },
            error: function (e) {
                // console.log(e.toString());  
                document.getElementById('rpModal').style.display = 'none';   
                swal.fire(
                    'Error',
                    'Oops, your data was not display.', // had a missing comma
                    'error'
                );                   
            }
        });         
     });

    /* Edit data table */
    $('#dataTable tbody').on('click', '#comissionsEdit', function (){
        $('#comissionsModal').modal('show');
        $('#comissionsForm').parsley().reset();
        imagearray = [];
        // document.getElementById("image_source_comissions").required = false;
        // var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
        $("#title_comissions_modal").text("Edit Commission");        
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);
        event.preventDefault(); // prevent form submit
        $.ajax({
            url: 'comissions/view_comissions/'+ id,
            type: 'POST',
            beforeSend: function () {
                document.getElementById('rpModal').style.display = 'block';
            },
            success: function(data){
                var data = JSON.parse(data);
                // console.log(data);
                if (data.status == '1') {
                    $('#preview_image').attr('style', 'display:block');
                    $('#comissionsId').val(data.data[0].id);
                    $('#comissions_title').val(data.data[0].title);
                    $('#sequence_image').val(data.data[0].image.length);
                    // $('#old_image').val(data.data.image);
                    // $('#preview_image').attr('src', base_url + '/assets/admin/upload/comissions/' + data.data.image);
                    tinyMCE.activeEditor.setContent(data.data[0].description);
                    for(var i = 0; i < data.data[0].image.length; i++){                        
                        var html =  
                            "<input type='hidden' name='image_id"+i+"' class='image_id"+i+"' id='image_id"+i+"' value='"+data.data[0].image[i].id+"'>"+
                            "<input type='hidden' name='image_name"+i+"' class='image_name"+i+"' id='image_name"+i+"' value='"+data.data[0].image[i].image+"'>"+
                            "<input type='hidden' name='image_fdelete"+i+"' class='image_fdelete"+i+"' id='image_fdelete"+i+"' value='"+data.data[0].image[i].fdelete+"'>"+
                            "<input type='file' name='image_source_comissions_old"+i+"' class='image_source_comissions_old"+i+"' id='image_source_comissions_old"+i+"' style='display: none;' onchange='comissionsPreviewImage("+i+")'> " +
                            "<div id='imagepeview"+i+"' style='display:inline-block'>"+                            
                            "<span style='position:relative'>"+
                            "<img src='"+base_url+"/assets/admin/upload/comissions/"+data.data[0].image[i].image+"' id='preview_image"+i+"' class='preview_image"+i+" thumb' onclick='comissionsSelectImage("+i+")'>"+
                            "<span  id='remove_img_preview"+i+"' class='remove_img_preview' onclick='comissionsDeleteEditImage("+i+")'></span><span id='previewselect"+i+"'></span>" +
                            "</span></div>"   
                            
                        $('#comissions_preview_image').append(html);
                        if (data.data[0].image[i].status == '1') {                 
                            $('#unselect').val(i);               
                            $('#selected_image').val('image_source_comissions'+i);
                            $('#previewselect'+i).addClass('select_img_preview');
                            $('#preview_image'+i).addClass('selected');
                        }
                        imagearray.push(i);
                    }
                    imgcounter = data.data[0].image.length;
                    // console.log('cek img c ' + imgcounter);
                    showImgInfo();
                    
                }          
                document.getElementById('rpModal').style.display = 'none';
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
    $('#dataTable tbody').on('click', '#comissionsDelete', function (){
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);     
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
                    url: 'comissions/delete_comissions/'+ id,
                    type: 'POST',
                    beforeSend: function () {
                        document.getElementById('rpModal').style.display = 'block';
                    },
                    success: function(e){
                        document.getElementById('rpModal').style.display = 'none';
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Data has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((timer)=>{
                            window.location.href = 'comissions';
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

     /* Function about JS */

    $('#aboutAdd').on('click', function (e) {
        $('#aboutModal').modal('show');
        $('#aboutForm').parsley().reset();
        $("#title_about_modal").text("Add About");    
        // var id = $('#aboutId').val();
        $('#preview_image').attr('style', 'display:none');
        $('#aboutId').val(null);
        $('#about_title').val(null);
        tinyMCE.activeEditor.setContent('');
    });

    // tinyMCE.activeEditor.on('keyup', function () {
    //     $('#parsley-id-9').attr('style', 'display:none');
    // });

    $('#aboutForm').parsley();
    $('#aboutForm').on('submit', function(e){
        e.preventDefault();
        var url;
        var form = $(this);
        form.parsley().validate();
        var formData = new FormData(this);
        var id = $('#aboutId').val();
        // alert(id);
        if (id != '') {
            url = 'about/edit_about';
            // alert(url);
        }else{
            url = 'about/add_about';
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
                        }).then((timer)=>{
                            window.location.href = 'about';
                        });
                    }else{
    
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
        // aboutCreateUpdate(formData);
    });

    /* Edit data table */
    $('#dataTable tbody').on('click', '#aboutEdit', function (){
        $('#aboutModal').modal('show');
        $('#aboutForm').parsley().reset();
        $("#title_about_modal").text("Edit About");    
        // var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1];
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);
        event.preventDefault(); // prevent form submit
        $.ajax({
            url: 'about/get_about/'+ id,
            type: 'POST',
            beforeSend: function () {
                document.getElementById('rpModal').style.display = 'block';
            },
            success: function(data){
                document.getElementById('rpModal').style.display = 'none';
                var data = JSON.parse(data);
                // console.log(data);
                if (data.status != null) {
                    $('#preview_image').attr('style', 'display:block');
                    $('#aboutId').val(data.data.id);
                    $('#about_title').val(data.data.title);
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
    $('#dataTable tbody').on('click', '#aboutDelete', function (){
        var id = $(this).attr('data-value');
        // console.log('Record ID is', id);     
        event.preventDefault(); // prevent form submit
        Swal.fire({
            title: 'Delete',
            text: 'Are you sure want to delete this About?',
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
                    url: 'about/delete_about/'+ id,
                    type: 'POST',
                    beforeSend: function () {
                        document.getElementById('rpModal').style.display = 'block';
                    },
                    success: function(e){
                        document.getElementById('rpModal').style.display = 'none';
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Data has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((timer)=>{
                            window.location.href = 'about';
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