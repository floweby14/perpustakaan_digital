        <!-- Overlay For Sidebars -->

            <div class="overlay"></div>

                <!-- Left Sidebar -->

                    <aside id="leftsidebar" class="sidebar">

                        <div class="navbar-brand">

                            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>

                            <a href="<?= base_url('/home/user') ?>">
                                
                                <img src="<?php echo base_url('assets') ?>/dashboard/logo.jpg" width="50" alt="logo_sph"><span class="m-l-10">SPH</span>
                            
                            </a>

                        </div>

                        <div class="menu">

                            <ul class="list">

                                <li>

                                    <div class="user-info">

                                        <div class="detail">

                                            <h4><?php echo session() -> get('username') ?></h4>

                                        </div>

                                    </div>

                                </li>

                                <?php if (in_array(session() -> get('level'), [1])) { ?>

                                    <li class="active"><a href="/home/dashboard"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
                                    <li class="active"><a href="/home/user"><i class="zmdi zmdi-archive"></i><span>Data User</span></a></li>
                                    <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-assignment"></i><span>Data Kelas</span></a></li>
                                    <li class="active"><a href="/home/guru"><i class="zmdi zmdi-assignment"></i><span>Data Guru</span></a></li>
                                    <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                    <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [2])) { ?>

                                    <li class="active"><a href="/home/dashboard"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
                                    <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-assignment"></i><span>Data Kelas</span></a></li>
                                    <li class="active"><a href="/home/guru"><i class="zmdi zmdi-assignment"></i><span>Data Guru</span></a></li>
                                    <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                    <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                            
                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [3])) { ?>
                            
                                    <li class="active"><a href="/home/dashboard"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
                                    <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-assignment"></i><span>Data Kelas</span></a></li>
                                    <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                    <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>

                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [4])) { ?>

                                    <li class="active"><a href="/home/dashboard"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
                                    <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-assignment"></i><span>Data Kelas</span></a></li>
                                    <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                    <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                                    
                            </ul>

                        </div>

                    </aside>

                                <?php } ?>