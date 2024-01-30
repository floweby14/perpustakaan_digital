        <section class="content">

            <title>User</title>
 
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

                            <h4 class="card-title">Data User</h4>

                        </div>

                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-striped" id="table1">
                                    
                                    <thead>

                                        <tr style="text-align: center;">

                                            <th>No</th>
                                            <!-- <th>Foto</th> -->
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>

                                            <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                <th width="10%">Action</th>
                                                
                                            <?php } ?>

                                        </tr>

                                    </thead>
                                    <tbody> 
                                    
                                        <?php $no = 1; foreach($user as $data) { ?>

                                            <tr align="center">

                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data -> username ?></td>
                                                <td><?php echo $data -> password ?></td>
                                                <td><?php echo $data -> nama_level ?></td>

                                                <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                    <td>

                                                        <a href="<?= base_url('/home/reset_password/'.$data -> id_user) ?>">

                                                            <button type="button" class="btn btn-danger"><i class="zmdi zmdi-refresh"></i></button>

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