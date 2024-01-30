        <section class="content">

            <title>Struktur Kelas</title>

            <div class="body_scroll">

                <div class="block-header div row">

                    <div class="col-lg-7 col-md-6 col-sm-12">

                        <h2>Struktur Kelas</h2>

                    </div>

                </div>

            </div>

        </section>

        <section class="content">

            <div class="body_scroll">

                <div class="container-fluid">
                    
                    <div class="row clear-fix">

                        <?php foreach ($strukturData as $_data) { ?>

                            <div class="col-md-4">

                                <div class="card">

                                    <div class="body">

                                        <div class="card-inside-title d-flex text-center">

                                            <h5><?php echo strtoupper($_data -> jurusan_rombel) ?></h5>

                                        </div>

                                        <div class="button d-flex justify-content-center">

                                            <a href="<?= base_url('/home/edit_struktur_kelas/'.$_data -> sk_kelas) ?>">

                                                <button type="button" class="btn btn-danger"><i class="mr-2 zmdi zmdi-edit"></i>Edit</button>
                                            
                                            </a>

                                            <a href="<?= base_url('/home/view_struktur_kelas/'.$_data -> sk_kelas) ?>">

                                                <button type="button" class="btn btn-primary">View more</button>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>