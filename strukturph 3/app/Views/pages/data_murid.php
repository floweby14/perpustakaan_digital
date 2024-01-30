        <section class="content">

            <title>Murid</title>
 
            <div id="main">

                <header class="mb-3">

                    <a href="#" class="burger-btn d-block d-xl-none">

                        <i class="bi bi-justify fs-3"></i>

                    </a>

                </header>

                <div class="page-heading">

                    <div class="page-title">

                        <div class="row">
                        
                            <div class="col-12 col-md-6 order-md-2 order-first">

                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                            </nav>

                        </div>

                    </div>
                    
                </div>

                <section class="section">

                    <div class="row" id="table-hover-row">

                        <div class="col-12">

                            <div class="card">

                                <div class="card-header">

                                    <h4 class="card-title">Data Murid</h4>
                                    <a href="<?=base_url('/home/tambah_murid/')?>" style="position: absolute; top: 40px; right: 10px;">

                                        <button class="btn btn-primary">Tambah Murid</button>

                                    </a>

                                </div>

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-striped" id="table1">
                                            
                                            <thead>

                                                <tr style="text-align: center;">

                                                    <th>No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>NIS</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th>Tempat & Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>No Handphone</th>
                                                    <th>Wali Kelas</th>
                                                    <th>Kelas</th>

                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <th width="15%">Action</th>
                                                        
                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody> 
                                            
                                                <?php $no = 1; foreach($murid as $data) { $tanggal_lahir_murid = new DateTime($data -> tanggal_lahir_murid); ?>

                                                    <tr align="center">

                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $data -> nis ?></td>
                                                        <td><?php echo ucwords($data -> nama_lengkap_murid) ?></td>
                                                        <td><?php echo ucwords($data -> jenis_kelamin_murid) ?></td>
                                                        <td><?php echo ucwords($data -> agama_murid) ?></td>
                                                        <td><?php echo ucwords($data -> tempat_lahir_murid) . ', ' . $tanggal_lahir_murid -> format('d F Y') ?></td>
                                                        <td><?php echo ucwords($data -> alamat_murid) ?></td>
                                                        <td><?php echo $data -> no_handphone_murid ?></td>
                                                        <td><?php echo ucwords($data -> nama_lengkap_guru) ?></td>
                                                        <td><?php echo strtoupper($data -> kelas) ?></td>

                                                        <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                            <td>

                                                                <a href="<?= base_url('/home/edit_murid/'.$data -> userMurid) ?>">

                                                                    <button type="button" class="btn btn-info"><i class="zmdi zmdi-edit"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/hapus_murid/'.$data -> userMurid) ?>">

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

                </section>