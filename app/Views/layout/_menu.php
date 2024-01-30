        <!-- Overlay For Sidebars -->

            <div class="overlay"></div>

                <!-- Left Sidebar -->

                    <aside id="leftsidebar" class="sidebar">

                        <div class="navbar-brand">

                            <a href="/home/user">
                                
                                <img src="<?php echo base_url('assets') ?>/dashboard/logo.jpg" width="125" alt="logo_sph">
                                <span class="m-l-10" style="font-size: 25px;">SPH</span>
                            
                            </a>

                        </div>

                        <div class="menu">

                            <ul class="list">

                                <li>

                                    <div class="user-info">
                                        
                                        <div class="image mr-2"><img src="/assets/images/yoimiya.png" alt="User"></div>

                                        <div class="detail">

                                            <h4><?php echo ucwords(session() -> username) ?></h4>

                                        </div>

                                    </div>

                                </li>

                                <?php if (in_array(session() -> get('level'), [1])) { ?>

                                    <!-- Struktur -->

                                    <!-- <li class="active"><a href="/home/struktur_sekolah"><i class="zmdi zmdi-image"></i><span>Perpustakaan</span></a></li>
                                    <li class="active"><a href="/home/struktur_kelas"><i class="zmdi zmdi-image"></i><span>Struktur Kelas</span></a></li> -->
                                    <li class="active"><a href="/home/user"><i class="zmdi zmdi-account-circle"></i><span>Data User</span></a></li>
                                    <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Buku</span></a></li>
                                    <!-- <li class="active"><a href="/home/jurusan"><i class="zmdi zmdi-seat"></i><span>Data Jurusan</span></a></li> -->
                                    <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-seat"></i><span>Kategori</span></a></li>
                                    <li class="active"><a href="/home/guru"><i class="zmdi zmdi-assignment"></i><span>Ulasan</span></a></li>
                                    <!-- <li class="active"><a href="/home/rombel"><i class="zmdi zmdi-seat"></i><span>Data Rombel</span></a></li> -->
                                    <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [2])) { ?>

                                    <!-- Struktur -->

                                        <li class="active"><a href="/home/struktur_sekolah"><i class="zmdi zmdi-image"></i><span>Struktur Sekolah</span></a></li>

                                        <li class="active"><a href="/home/struktur_kelas"><i class="zmdi zmdi-image"></i><span>Struktur Kelas</span></a></li>

                                    <li class="active"><a href="/home/guru"><i class="zmdi zmdi-assignment"></i><span>Data Guru</span></a></li>
                                    <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                    <li class="active"><a href="/home/jurusan"><i class="zmdi zmdi-seat"></i><span>Data Jurusan</span></a></li>
                                    <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-seat"></i><span>Data Kelas</span></a></li>
                                    <li class="active"><a href="/home/rombel"><i class="zmdi zmdi-seat"></i><span>Data Rombel</span></a></li>
                                    <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                            
                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [3])) { ?>

                                    <!-- Struktur -->

                                        <li class="active"><a href="/home/struktur_sekolah"><i class="zmdi zmdi-image"></i><span>Struktur Sekolah</span></a></li>
                                        <li class="active"><a href="/home/struktur_kelas"><i class="zmdi zmdi-image"></i><span>Struktur Kelas</span></a></li>
                                        <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                        <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-assignment"></i><span>Data Kelas</span></a></li>
                                        <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>

                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [4])) { ?>

                                    <!-- Struktur -->

                                        <li class="active"><a href="/home/struktur_sekolah"><i class="zmdi zmdi-image"></i><span>Struktur Sekolah</span></a></li>
                                        <li class="active"><a href="/home/struktur_kelas"><i class="zmdi zmdi-image"></i><span>Struktur Kelas</span></a></li>
                                        <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                        <li class="active"><a href="/home/kelas"><i class="zmdi zmdi-assignment"></i><span>Data Kelas</span></a></li>
                                        <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                                    
                            </ul>

                        </div>

                    </aside>

                                <?php } else if (in_array(session() -> get('level'), [5])) { ?>

                                    <!-- Struktur -->

                                        <li class="active"><a href="/home/struktur_sekolah"><i class="zmdi zmdi-image"></i><span>Struktur Sekolah</span></a></li>
                                        <li class="active"><a href="/home/struktur_kelas"><i class="zmdi zmdi-image"></i><span>Struktur Kelas</span></a></li>
                                        <li class="active"><a href="/home/murid"><i class="zmdi zmdi-assignment"></i><span>Data Murid</span></a></li>
                                        <li class="active"><a href="/home/logout"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                                    
                            </ul>

                        </div>

                    </aside>

                                <?php } ?>