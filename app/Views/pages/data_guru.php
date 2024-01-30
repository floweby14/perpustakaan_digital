        <section class="content">

            <title>Kelas</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Ulasan</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/tambah_guru" style="position: absolute; right: 10px;">
                            
                                <button class="btn btn-md btn-primary"><i class="zmdi zmdi-plus mr-3"></i>Tambah Ulasan</button>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row clear-fix">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-striped" id="table1">
                                            
                                            <thead>

                                                <tr style="text-align: center;">

                                                    <th>No</th>
                                                    <th>Buku</th>
                                                    <th>Ulasan</th>
                                                    
                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <th width="15%">Action</th>
                                                        
                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody> 
                                            
                                                <?php $no = 1; foreach($guruData as $data) { $tanggal_lahir_guru = new DateTime($data -> tanggal_lahir_guru); ?>

                                                    <tr align="center">

                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo ucwords($data -> nama_lengkap_guru) ?></td>
                                                        <td><?php echo ucwords($data -> alamat_guru) ?></td>

                                                        <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                            <td>

                                                                <a href="<?= base_url('/home/edit_guru/'.$data -> userGuru) ?>">

                                                                    <button type="button" class="btn btn-info"><i class="zmdi zmdi-edit"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/hapus_guru/'.$data -> userGuru) ?>">

                                                                    <button type="button" class="btn btn-danger"><i class="zmdi zmdi-block"></i></button>

                                                                </a>
                                                            
                                                            </td>

                                                        <?php } ?>

                                                    </tr>

                                                <?php } ?>
                                            
                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>