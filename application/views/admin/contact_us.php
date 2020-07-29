        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row editContactUs">
                        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                            <div class="tab-content">
                                <form role="form" class="form-horizontal" id="contactForm" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" id="contacusId" name="contactusId" value="">
                                        <div class="form-group">
                                            <label class="control-label col-sm-12" for="contactus_title">Title :</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="contactus_title" value="" name="contactus_title" required="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="control-label col-sm-12" for="contactus_desc">Description :</label>
                                        <div class="col-sm-12">
                                            <textarea id="contactus_desc" class="form-control" name="contactus_desc" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-sm-12" for="contactus_title">Telp(Di bawah menu halaman home)</label>
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" id="telp" value="" name="telp" >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-sm-12" for="contactus_title">Whatsapp(Di bawah menu halaman home)</label>
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" id="whatsapp" value="" name="whatsapp">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <button class="btn btn-danger float-right" type="button" id="cancelcontact">Cancel</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary" id="contuctusSubmit">Save</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row viewContactUs">
                        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 id="contactusTitle"></h3>

                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-primary btn-sm float-right" id="editbtnContactus">
                                    <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" id="contactUsBody">

                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12" id="telpBody">
                            Telp(dibawah menu): <span id="telpcontactus"></span><br>
                            Whatsapp(dibawah menu): <span id="whatsappcontactus"></span><br>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.container-fluid -->