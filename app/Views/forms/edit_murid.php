        <section class="content">

            <title>Edit Murid</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Edit Data Pengguna</h2>

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

                                    <form class="form-horizontal" action="<?= base_url('/home/aksi_edit_murid')?>" method="POST">

                                        <input type="hidden" name="id_user" value="<?php echo $userData -> id_user ?>">
                                        <input type="hidden" name="id_murid" value="<?php echo $muridData -> userMurid ?>">

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="username_input">Username <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $userData -> username ?>" name="username" id="username_input" placeholder="username" class="form-control" required>

                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-12 col-md-10 col-sm-8">

                                                <div class="form-group"></div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="nis_input">NIS <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $muridData -> nis ?>" name="nis" id="nis_input" placeholder="nis" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="nama_lengkap_input">Nama Lengkap <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $muridData -> nama_lengkap_murid ?>" name="nama_lengkap" id="nama_lengkap_input" placeholder="nama" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="jenis_kelamin_input">Jenis Kelamin <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin_input" required>

                                                        <option disabled selected>-- Pilih Jenis Kelamin --</option>
                                                        <option value="laki-laki" <?php echo ($muridData -> jenis_kelamin_murid == 'laki-laki') ? 'selected' : '' ?>>Laki - Laki</option>
                                                        <option value="perempuan" <?php echo ($muridData -> jenis_kelamin_murid == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>

                                                    </select>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="agama_input">Agama</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <select class="form-control" name="agama" id="agama_input">

                                                        <option disabled selected>-- Pilih Agama --</option>
                                                        <option value="kristen" <?php echo ($muridData -> agama_murid== 'kristen') ? 'selected' : '' ?>>Kristen</option>
                                                        <option value="islam" <?php echo ($muridData -> agama_murid == 'islam') ? 'selected' : '' ?>>Islam</option>
                                                        <option value="katolik" <?php echo ($muridData -> agama_murid == 'katolik') ? 'selected' : '' ?>>Katolik</option>
                                                        <option value="hindu" <?php echo ($muridData -> agama_murid == 'hindu') ? 'selected' : '' ?>>Hindu</option>
                                                        <option value="budha" <?php echo ($muridData -> agama_murid == 'budha') ? 'selected' : '' ?>>Budha</option>
                                                        <option value="konghucu" <?php echo ($muridData -> agama_murid == 'konghucu') ? 'selected' : '' ?>>Konghucu</option>

                                                    </select>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="tempat_lahir_input">Tempat Lahir</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $muridData -> tempat_lahir_murid ?>" name="tempat_lahir" id="tempat_lahir_input" placeholder="tempat lahir" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="tanggal_lahir_input">Tanggal Lahir</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="date" value="<?php echo $muridData -> tanggal_lahir_murid ?>" name="tanggal_lahir" id="tanggal_lahir_input" placeholder="tanggal_lahir" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="alamat_input">Alamat</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo $muridData -> alamat_murid ?>" name="alamat" id="alamat_input" placeholder="alamat" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="no_handphone_input">Nomor Handphone</label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <input type="text" value="<?php echo substr($muridData -> no_handphone_murid, 4) ?>" name="no_handphone" id="no_handphone_input" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="16" class="form-control">
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="walikelas_input">Wali Kelas <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <select class="form-control" name="walikelas" id="walikelas_input" required>

                                                        <option disabled selected>-- Pilih Wali Kelas --</option>

                                                        <?php foreach ($guruData as $data) { ?>

                                                            <option value="<?php echo $data -> id_guru ?>" <?php echo ($muridData -> walikelas == $data -> id_guru) ? 'selected' : '' ?>><?php echo ucwords($data -> nama_lengkap_guru) ?></option>

                                                        <?php } ?>

                                                    </select>
                                                    
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                                <label for="kelas_input">Kelas <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10 col-md-10 col-sm-8">

                                                <div class="form-group">

                                                    <select class="form-control" name="kelas" id="kelas_input" required>

                                                        <option disabled selected>-- Pilih Kelas --</option>

                                                        <?php foreach ($rombelData as $data) { ?>

                                                            <option value="<?php echo $data -> id_rombel ?>" <?php echo ($muridData -> kelas == $data -> id_rombel) ? 'selected' : '' ?>><?php echo strtoupper($data -> jurusan_rombel) ?></option>

                                                        <?php } ?>

                                                    </select>
                                                    
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