        <section class="content">

            <title>Guru</title>
 
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

                                    <h4 class="card-title">Data Guru</h4>
                                    <a href="<?=base_url('/home/tambah_guru/')?>" style="position: absolute; top: 40px; right: 10px;">

                                        <button class="btn btn-primary">Tambah Guru</button>

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
                                                    <th>NIK</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th>Tempat & Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>No Handphone</th>
                                                    
                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <th width="15%">Action</th>
                                                        
                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody> 
                                            
                                                <?php $no = 1; foreach($guru as $data) { $tanggal_lahir_guru = new DateTime($data -> tanggal_lahir_guru); ?>

                                                    <tr align="center">

                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $data -> nik ?></td>
                                                        <td><?php echo ucwords($data -> nama_lengkap_guru) ?></td>
                                                        <td><?php echo ucwords($data -> jenis_kelamin_guru) ?></td>
                                                        <td><?php echo ucwords($data -> agama_guru) ?></td>
                                                        <td><?php echo ucwords($data -> tempat_lahir_guru) . ', ' . $tanggal_lahir_guru -> format('d F Y') ?></td>
                                                        <td><?php echo ucwords($data -> alamat_guru) ?></td>
                                                        <td><?php echo $data -> no_handphone_guru ?></td>

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

                </section>