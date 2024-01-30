        <section class="content">

            <title>User</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>User</h2>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">
                    
                    <div class="row clear-fix">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            
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
                                            
                                                <?php $no = 1; foreach($userData as $data) { ?>

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

                </div>

            </div>
