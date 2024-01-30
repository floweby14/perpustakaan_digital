        <section class="content">

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Edit Data Rombel</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/rombel">
                                
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

                                    <form class="form-horizontal" action="<?= base_url('/home/aksi_edit_rombel')?>" method="POST">

                                        <input type="hidden" name="id_rombel" value="<?php echo $rombelData -> id_rombel ?>">

                                        <div class="row clearfix">

                                            <div class="col-lg-12">

                                                <div class="form-group">

                                                    <select class="form-control" name="jurusan">
                                                        
                                                        <option disabled selected>-- Pilih Jurusan --</option>
                                                        
                                                        <?php

                                                            foreach ($jurusanData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> jurusan ?>" <?php echo ($_data -> jurusan == $_data -> jurusan) ? 'selected' : '' ?>><?php echo ucwords($_data -> jurusan) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-12">

                                                <div class="form-group">

                                                    <select class="form-control" name="kelas">
                                                        
                                                        <option disabled selected>-- Pilih Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($kelasData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> kelas ?>" <?php echo ($_data -> kelas == $_data -> kelas) ? 'selected' : '' ?>><?php echo strtoupper($_data -> kelas) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>
                                            
                                            <div class="col-lg-12">

                                                <div class="form-group">

                                                    <select class="form-control" name="ruang_kelas">
                                                        
                                                        <option value="" selected>-- Pilih Ruang Kelas --</option>
                                                        
                                                        <option value="a">A</option>
                                                        <option value="b">B</option>
                                                        <option value="c">C</option>
                                                        <option value="d">D</option>
                                                        <option value="e">E</option>
                                                        <option value="f">F</option>
                                                        <option value="g">G</option>
                                                        <option value="h">H</option>
                                                        <option value="i">I</option>
                                                        <option value="j">J</option>
                                                        <option value="k">K</option>
                                                        <option value="l">L</option>
                                                        <option value="m">M</option>
                                                        <option value="n">N</option>
                                                        <option value="o">O</option>
                                                        <option value="p">P</option>
                                                        <option value="q">Q</option>
                                                        <option value="r">R</option>
                                                        <option value="s">S</option>
                                                        <option value="t">T</option>
                                                        <option value="u">U</option>
                                                        <option value="v">V</option>
                                                        <option value="w">W</option>
                                                        <option value="x">X</option>
                                                        <option value="y">Y</option>
                                                        <option value="z">Z</option>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-12">

                                                <div class="form-group">

                                                    <select class="form-control" name="walikelas">
                                                        
                                                        <option disabled selected>-- Pilih Wali Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($guruData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> id_guru ?>" <?php echo ($rombelData -> walikelas == $_data -> id_guru) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_guru) ?></option>

                                                        <?php

                                                            }

                                                        ?>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-lg-12">

                                                <div class="form-group">

                                                    <select class="form-control" name="ketua_kelas">
                                                        
                                                        <option disabled selected>-- Pilih Ketua Kelas --</option>
                                                        
                                                        <?php

                                                            foreach ($muridData as $_data) {

                                                        ?>

                                                            <option value="<?php echo $_data -> id_murid ?>" <?php echo ($rombelData -> ketua_kelas == $_data -> id_murid) ? 'selected' : '' ?>><?php echo ucwords($_data -> nama_lengkap_murid) ?></option>

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