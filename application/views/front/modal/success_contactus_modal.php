 <!-----------------------------------------LOADING AND MODAL ------------------------------------------->
 <div id="wrapper_loading">
    <div class="lds-dual-ring"></div>
  </div>
  <div id="open-modal" class="modal-window">
    <div>
      <div class="content_modal">Thank you for contact us, we will contact you as soon as possible</div>
      <br><br><br>
      <center>
        <div><button class="btn btn_ok_modal">OK</button></div>
      </center>
    </div>
  </div>
  
  <input type="hidden" name="type_halaman" id="type_halaman" class="type_halaman" value="<?php if ($is_home == true) {
                                                                                            echo "is_home";
                                                                                          } else {
                                                                                            echo "is_detail";
                                                                                          } ?>">