        <section class="content">

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Tambah Buku</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/murid">
                                
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

                                    <form class="form-horizontal" action="<?= base_url('/home/aksi_tambah_murid')?>" method="POST">

                                    <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="kelas_input">Kategori </label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <select class="form-control" name="kelas" id="kelas_input" required>

                                                        <option disabled selected>-- Pilih Kategori --</option>

                                                        <?php foreach ($rombelData as $data) { ?>

                                                            <option value="<?php echo $data -> id_rombel ?>"><?php echo strtoupper($data -> jurusan_rombel) ?></option>

                                                        <?php } ?>

                                                    </select>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <!-- <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="password_input">Penulis <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="password" name="password" id="password_input" placeholder="penulis" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div> -->


                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="nama_lengkap_input">Judul </label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="nama_lengkap" id="nama_lengkap_input" placeholder="judul" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="jenis_kelamin_input">Penulis</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                <input type="text" name="jenis_kelamin" id="jenis_kelamin_input" placeholder="penulis" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>


                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="tempat_lahir_input">Penerbit</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="tempat_lahir" id="tempat_lahir_input" placeholder=" penerbit" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>


                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="alamat_input">Tahun Terbit</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" name="alamat" id="alamat_input" placeholder="tahun terbit" class="form-control">
                                                    
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