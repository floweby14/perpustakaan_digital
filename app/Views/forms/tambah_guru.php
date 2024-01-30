        <section class="content">

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Tambah </h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/guru">
                                
                                <button class="btn btn-secondary btn-icon float-right" type="buttin"><i class="zmdi zmdi-chevron-left"></i></button>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row clearfix">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">

                                <div class="body">

                                    <form class="form-horizontal" action="<?= base_url('/home/aksi_tambah_guru')?>" method="POST">


                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="nama_lengkap_input">Buku <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="nama_lengkap" id="nama_lengkap_input" placeholder="buku" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="alamat_input">Ulasan</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="alamat" id="alamat_input" placeholder="ulasan" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>                                        

                                        <div class="row clearfix d-flex justify-content-center">

                                            <button type="submit" class="btn btn-md btn-round btn-success">Submit</button>
                                            
                                        </div>

                                    </form>

                                </div>

                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>
            
        </section>