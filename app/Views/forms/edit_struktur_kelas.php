        <section class="content">

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Edit Struktur Kelas</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/struktur_kelas">
                                
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

                                    <form class="form-horizontal" action="<?= base_url('/home/aksi_edit_struktur_kelas') ?>" method="POST">

                                        <input type="hidden" name="sk_id" value="<?php echo $strukturData -> sk_kelas ?>">

                                        <div class="row clearfix">

                                            <div class="col-lg-2 form-control-label">

                                                <label for="nama_kelas_input">Kelas <span style="color: #ff0000;">*</span></label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="nama_kelas" id="nama_kelas_input" required>
                                                        
                                                        <option disabled selected>-- Pilih Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($rombelsData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> id_rombel ?>" <?php echo ($_data -> id_rombel == $strukturData -> sk_kelas) ? 'selected' : '' ?>><?php echo ucwords($_data -> jurusan_rombel) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-lg-2 form-control-label">

                                                <label for="walikelas_input">Wali Kelas</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="walikelas" id="walikelas_input">
                                                        
                                                        <option disabled selected>-- Pilih Wali Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($guruData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_guru ?>" <?php echo ($_data -> nama_lengkap_guru == $strukturData -> sk_walikelas) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_guru) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-lg-2 form-control-label">

                                                <label for="ketua_kelas_input">Ketua Kelas</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="ketua_kelas" id="ketua_kelas_input">
                                                        
                                                        <option disabled selected>-- Pilih Ketua Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_murid ?>" <?php echo ($_data -> nama_lengkap_murid == $strukturData -> sk_ketua_kelas) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-2 form-control-label">

                                                <label for="wakilketua_kelas_input">Wakil Ketua Kelas</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="wakilketua_kelas" id="wakilketua_kelas_input">
                                                        
                                                        <option disabled selected>-- Pilih Wakil Ketua Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_murid ?>" <?php echo ($_data -> nama_lengkap_murid == $strukturData -> sk_wakil_ketua_kelas) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-2 form-control-label">

                                                <label for="sekretaris_input">Sekretaris</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="sekretaris" id="sekretaris_input">
                                                        
                                                        <option disabled selected>-- Pilih Sekretaris --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_murid ?>" <?php echo ($_data -> nama_lengkap_murid == $strukturData -> sk_sekretaris) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-2 form-control-label">

                                                <label for="bendahara_input">Bendahara</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="bendahara" id="bendahara_input">
                                                        
                                                        <option disabled selected>-- Pilih Bendahara --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_murid ?>" <?php echo ($_data -> nama_lengkap_murid == $strukturData -> sk_bendahara) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-2 form-control-label">

                                                <label for="skebersihan_input">S. Kebersihan</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="skebersihan" id="skebersihan_input">
                                                        
                                                        <option disabled selected>-- Pilih S. Kebersihan --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_murid ?>" <?php echo ($_data -> nama_lengkap_murid == $strukturData -> sk_skebersihan) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-2 form-control-label">

                                                <label for="skeamanan_input">S. Keamanan</label>

                                            </div>

                                            <div class="col-lg-10">

                                                <div class="form-group">

                                                    <select class="form-control" name="skeamanan" id="skeamanan_input">
                                                        
                                                        <option disabled selected>-- Pilih S. Keamanan --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> nama_lengkap_murid ?>" <?php echo ($_data -> nama_lengkap_murid == $strukturData -> sk_skeamanan) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

                                                        <?php

                                                            }

                                                        ?>

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
            
        </section>