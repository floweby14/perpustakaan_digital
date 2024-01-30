<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Models;

class Home extends BaseController {

	// ================================================================================================================================ //

		public function index() {

			if (session() -> get('id') == NULL) {

			    return view('login');

            } else if (session() -> get('id') > 0) {

                return redirect() -> to('/home/struktur_sekolah');

            }

		}

        public function user() {

            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $on = 'user.level = level.id_level';
                    $_fetch['userData'] = $Schema -> visual_join2('user', 'level', $on);

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_user', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

	// ================================================================================================================================ // - Login System

		public function aksi_login() {

            $Schema = new Models();

                $username = $this -> request -> getPost('username');
                $password = $this -> request -> getPost('password');

            $data = array(
                'username' => $username,
                'password' => md5($password)
            );

                $session = $Schema -> getWhere2('user', $data);

            if ($session > 0) {

                session() -> set('id', $session['id_user']);
                session() -> set('username', $session['username']);
                session() -> set('level', $session['level']);

                return redirect()->to('/home/struktur_sekolah');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function reset_password($id) {

            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $where = array('id_user' => $id);
                    $new_password = array('password' => md5('jilian'));
                    
                    $Schema -> edit_data('user', $new_password, $where);

                return redirect()->to('/home/user');

            } else {
                
                return redirect()->to('/home/');

            }

        }

        public function logout() {

            session() -> destroy();

            return redirect() -> to('/home/');

        }

    // ================================================================================================================================ // - Guru Management

        public function guru() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                    $_fetch['guruData'] = $Schema -> visual('guru');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_guru', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function tambah_guru() {

            if(in_array(session() -> get('level'), [1])) {

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/tambah_guru');
                echo view('layout/_footer');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function aksi_tambah_guru() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('password');

                    $nik = $this->request->getPost('nik');
                    $nama_lengkap = $this->request->getPost('nama_lengkap');
                    $jenis_kelamin = $this->request->getPost('jenis_kelamin');
                    $agama = $this->request->getPost('agama');
                    $tempat_lahir = $this->request->getPost('tempat_lahir');
                    $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                    $alamat = $this->request->getPost('alamat');
                    $no_handphone = $this->request->getPost('no_handphone');
                    
                    $level = $this->request->getPost('level');

                $user = array(
                    'username'=> $username,
                    'password'=> md5($password),
                    'level'=> $level,
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('user', $user);

                    } else {

                        return redirect() -> to('/home/user');

                    }

                    $where = array('username' => $username);
                    $_fetch = $Schema -> getWhere2('user', $where);

                    $_id = $_fetch['id_user'];

                $guru = array(
                    'nik' => $nik,
                    'nama_lengkap_guru' => $nama_lengkap,
                    'jenis_kelamin_guru' => $jenis_kelamin,
                    'agama_guru' => $agama,
                    'tempat_lahir_guru' => $tempat_lahir,
                    'tanggal_lahir_guru' => $tanggal_lahir,
                    'alamat_guru' => $alamat,
                    'no_handphone_guru' => '+62 ' . $no_handphone,
                    'userGuru' => $_id,
                );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('guru', $guru);

                    } else {

                        return redirect() -> to('/home/guru');

                    }

                return redirect()->to('/home/guru');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function edit_guru($id) {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Models();

                    $user = array('id_user' => $id);
                    $guru = array('userGuru' => $id);

                    $_fetch['userData'] = $Schema -> getWhere('user', $user);
                    $_fetch['guruData'] = $Schema -> getWhere('guru', $guru);

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_guru', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function aksi_edit_guru() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $username = $this->request->getPost('username');
                    $id_user = $this->request->getPost('id_user');

                    $nik = $this->request->getPost('nik');
                    $nama_lengkap = $this->request->getPost('nama_lengkap');
                    $jenis_kelamin = $this->request->getPost('jenis_kelamin');
                    $agama = $this->request->getPost('agama');
                    $tempat_lahir = $this->request->getPost('tempat_lahir');
                    $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                    $alamat = $this->request->getPost('alamat');
                    $no_handphone = $this->request->getPost('no_handphone');
                    $id_guru = $this->request->getPost('id_guru');

                    $level = $this->request->getPost('level');

                    $where = array('id_user' => $id_user);

                $user = array(
                    'username'=> $username,
                    'level' => $level,
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('user', $user, $where);

                    } else {

                        return redirect() -> to('/home/user');

                    }

                    $where2 = array('userGuru' => $id_guru);

                $guru = array(
                    'nik' => $nik,
                    'nama_lengkap_guru' => $nama_lengkap,
                    'jenis_kelamin_guru' => $jenis_kelamin,
                    'agama_guru' => $agama,
                    'tempat_lahir_guru' => $tempat_lahir,
                    'tanggal_lahir_guru' => $tanggal_lahir,
                    'alamat_guru' => $alamat,
                    'no_handphone_guru' => '+62 ' . $no_handphone,
                );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('guru', $guru, $where2);

                    } else {

                        return redirect() -> to('/home/guru');

                    }

                return redirect()->to('/home/guru');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function hapus_guru($id) {

            $Schema = new Models();

                $user = array('id_user' => $id);
                $guru = array('userGuru' => $id);

                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> delete_data('user', $user);
                    $Schema -> delete_data('guru', $guru);

                } else {

                    return redirect() -> to('/home/guru');

                }

            return redirect() -> to('/home/guru');

        }

		
	// ================================================================================================================================ // - Murid Management

        public function murid() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                    $on = 'murid.walikelas = guru.id_guru';
                    $on1 = 'murid.kelas = rombel.id_rombel';

                    $_fetch['muridData'] = $Schema -> visual_join3('murid', 'guru', 'rombel', $on, $on1);

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_murid', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function tambah_murid() {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Models();

                    $_fetch['guruData'] = $Schema -> visual('guru');
                    $_fetch['rombelData'] = $Schema -> visual('rombel');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/tambah_murid', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function aksi_tambah_murid() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('password');

                    $nis = $this->request->getPost('nis');
                    $nama_lengkap = $this->request->getPost('nama_lengkap');
                    $jenis_kelamin = $this->request->getPost('jenis_kelamin');
                    $agama = $this->request->getPost('agama');
                    $tempat_lahir = $this->request->getPost('tempat_lahir');
                    $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                    $alamat = $this->request->getPost('alamat');
                    $no_handphone = $this->request->getPost('no_handphone');
                    $walikelas = $this->request->getPost('walikelas');
                    $kelas = $this->request->getPost('kelas');

                $user = array(
                    'username'=> $username,
                    'password'=> md5($password),
                    'level'=> '5',
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('user', $user);

                    } else {

                        return redirect() -> to('/home/user');

                    }

                    $where = array('username' => $username);
                    $_fetch = $Schema -> getWhere2('user', $where);

                    $_id = $_fetch['id_user'];

                $murid = array(
                    'nis' => $nis,
                    'nama_lengkap_murid' => $nama_lengkap,
                    'jenis_kelamin_murid' => $jenis_kelamin,
                    'agama_murid' => $agama,
                    'tempat_lahir_murid' => $tempat_lahir,
                    'tanggal_lahir_murid' => $tanggal_lahir,
                    'alamat_murid' => $alamat,
                    'no_handphone_murid' => '+62 ' . $no_handphone,
                    'walikelas' => $walikelas,
                    'kelas' => $kelas,
                    'userMurid' => $_id,
                );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('murid', $murid);

                    } else {

                        return redirect() -> to('/home/murid');

                    }

                return redirect()->to('/home/murid');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function edit_murid($id) {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Models();

                    $user = array('id_user' => $id);
                    $murid = array('userMurid' => $id);

                    $_fetch['userData'] = $Schema -> getWhere('user', $user);
                    $_fetch['muridData'] = $Schema -> getWhere('murid', $murid);
                    $_fetch['guruData'] = $Schema -> visual('guru');
                    $_fetch['rombelData'] = $Schema -> visual('rombel');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_murid', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_edit_murid() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $username = $this->request->getPost('username');
                    $id_user = $this->request->getPost('id_user');

                    $nis = $this->request->getPost('nis');
                    $nama_lengkap = $this->request->getPost('nama_lengkap');
                    $jenis_kelamin = $this->request->getPost('jenis_kelamin');
                    $agama = $this->request->getPost('agama');
                    $tempat_lahir = $this->request->getPost('tempat_lahir');
                    $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                    $alamat = $this->request->getPost('alamat');
                    $no_handphone = $this->request->getPost('no_handphone');
                    $walikelas = $this->request->getPost('walikelas');
                    $kelas = $this->request->getPost('kelas');
                    $id_murid = $this->request->getPost('id_murid');

                    $where = array('id_user' => $id_user);

                $user = array(
                    'username'=> $username,
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('user', $user, $where);

                    } else {

                        return redirect() -> to('/home/user');

                    }

                    $where2 = array('userMurid' => $id_murid);

                $murid = array(
                    'nis' => $nis,
                    'nama_lengkap_murid' => $nama_lengkap,
                    'jenis_kelamin_murid' => $jenis_kelamin,
                    'agama_murid' => $agama,
                    'tempat_lahir_murid' => $tempat_lahir,
                    'tanggal_lahir_murid' => $tanggal_lahir,
                    'alamat_murid' => $alamat,
                    'no_handphone_murid' => '+62 ' . $no_handphone,
                    'walikelas' => $walikelas,
                    'kelas' => $kelas,
                );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('murid', $murid, $where2);

                    } else {

                        return redirect() -> to('/home/murid');

                    }

                return redirect()->to('/home/murid');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function hapus_murid($id) {

            $Schema = new Models();

                $user = array('id_user' => $id);
                $murid = array('userMurid' => $id);

                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> delete_data('user', $user);
                    $Schema -> delete_data('murid', $murid);

                } else {

                    return redirect() -> to('/home/murid');

                }

            return redirect() -> to('/home/murid');

        }

    // ================================================================================================================================ // - Jurusan Management

        public function jurusan() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                    $_fetch['jurusanData'] = $Schema -> visual('jurusan');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_jurusan', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_tambah_jurusan() {

            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $nama_jurusan = $this->request->getPost('jurusan');
                    
                    $jurusan = array(
                        'jurusan' => $nama_jurusan
                    );

                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('jurusan', $jurusan);

                    } else {

                        return redirect() -> to('/home/jurusan');
                        
                    }

                return redirect() -> to('/home/jurusan');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function hapus_jurusan($id) {

            $Schema = new Models();

                $id_jurusan = array('id_jurusan' => $id);

                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> delete_data('jurusan', $id_jurusan);

                } else {

                    return redirect() -> to('/home/jurusan');

                }

            return redirect() -> to('/home/jurusan');

        }

    // ================================================================================================================================ // - Kelas Management
    
        public function kelas() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                    $_fetch['kelasData'] = $Schema -> visual('kelas');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_kelas', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_tambah_kelas() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $nama_kelas = $this->request->getPost('kelas');
                
                $kelas = array(
                    'kelas' => $nama_kelas,
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('kelas', $kelas);

                    } else {

                        return redirect() -> to('/home/kelas');

                    }

                return redirect()->to('/home/kelas');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function edit_kelas($id) {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Models();

                    $id_kelas = array('id_kelas' => $id);
                    $_fetch['kelasData'] = $Schema -> getWhere('kelas', $id_kelas);

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_kelas', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function aksi_edit_kelas() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $nama_kelas = $this->request->getPost('kelas');
                    $id_kelas = $this->request->getPost('id_kelas');
                    
                    $where = array('id_kelas' => $id_kelas);

                $kelas = array(
                    'kelas' => $nama_kelas,
                );
                
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> edit_data('kelas', $kelas, $where);

                    } else {

                        return redirect() -> to('/home/kelas');

                    }

                return redirect()->to('/home/kelas');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function hapus_kelas($id) {

            $Schema = new Models();

                $id_kelas = array('id_kelas' => $id);

                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> delete_data('kelas', $id_kelas);

                } else {

                    return redirect() -> to('/home/kelas');

                }

            return redirect() -> to('/home/kelas');

        }
	
    // ================================================================================================================================ // - Rombel Management
    
        public function rombel() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                    $on = 'rombel.walikelas = guru.id_guru';
                    $on1 = 'rombel.ketua_kelas = murid.id_murid';

                    $_fetch['rombelData'] = $Schema -> visual_join3('rombel', 'guru', 'murid', $on, $on1);

                    $_fetch['jurusanData'] = $Schema -> visual('jurusan');
                    $_fetch['kelasData'] = $Schema -> visual('kelas');
                    $_fetch['guruData'] = $Schema -> visual('guru');
                    $_fetch['muridData'] = $Schema -> visual('murid');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_rombel', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_tambah_rombel() {

            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $nama_jurusan = $this -> request -> getPost('jurusan');
                    $nama_kelas = $this -> request -> getPost('kelas');
                    $ruangan_kelas = $this -> request -> getPost('ruang_kelas');
                    $walikelas = $this -> request -> getPost('walikelas');
                    $ketua_kelas = $this -> request -> getPost('ketua_kelas');
                    
                $rombel = array(
                    'jurusan_rombel' => $nama_jurusan . ' ' . $nama_kelas . ' ' . $ruangan_kelas,
                    'walikelas' => $walikelas,
                    'ketua_kelas' => $ketua_kelas,  
                );
            
                    if (in_array(session() -> get('level'), [1])) {

                        $Schema -> add_data('rombel', $rombel);

                    } else {

                        return redirect() -> to('/home/');

                    }

                return redirect() -> to('/home/rombel');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function edit_rombel($_id) {

            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                    $_userData = array('id_rombel' => $_id);

                    $_fetch['rombelData'] = $Schema -> getWhere('rombel', $_userData);
                    $_fetch['jurusanData'] = $Schema -> visual('jurusan');
                    $_fetch['kelasData'] = $Schema -> visual('kelas');
                    $_fetch['guruData'] = $Schema -> visual('guru');
                    $_fetch['muridData'] = $Schema -> visual('murid');
                    
                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_rombel', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_edit_rombel() {

            $Schema = new Models();

                $nama_jurusan = $this -> request -> getPost('jurusan');
                $nama_kelas = $this -> request -> getPost('kelas');
                $ruangan_kelas = $this -> request -> getPost('ruang_kelas');
                $walikelas = $this -> request -> getPost('walikelas');
                $ketua_kelas = $this -> request -> getPost('ketua_kelas');
                $_idRombel = $this -> request -> getPost('id_rombel');

                $_where = array('id_rombel' => $_idRombel);
                
            $rombel = array(
                'jurusan_rombel' => $nama_jurusan . ' ' . $nama_kelas . ' ' . $ruangan_kelas,
                'walikelas' => $walikelas,
                'ketua_kelas' => $ketua_kelas,  
            );
            
                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> edit_data('rombel', $rombel, $_where);

                } else {

                    return redirect() -> to('/home/');

                }

            return redirect() -> to('/home/rombel');

        }

        public function hapus_rombel($_id) {

            $Schema = new Models();

                $_rombelData = array('id_rombel' => $_id);

                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> delete_data('rombel', $_rombelData);

                } else {

                    return redirect() -> to('/home/');

                }

            return redirect() -> to('/home/rombel');

        }

    // ================================================================================================================================ // - Struktur View

        public function struktur_sekolah() {

            $Schema = new Models();

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('pages/struktur/m_struktur_sekolah');
            echo view('layout/_footer');

        }
        
        public function struktur_kelas() {

            $Schema = new Models();

                $on = 'struktur_kelas.sk_kelas = rombel.id_rombel';
                $_fetch['strukturData'] = $Schema -> visual_join2('struktur_kelas', 'rombel', $on);

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('pages/struktur/m_struktur_kelas', $_fetch);
            echo view('layout/_footer');

        }

        public function view_struktur_kelas($_id) {

            $Schema = new Models();

                $_strukturData = array('sk_kelas' => $_id);
                $_rombelData = array('id_rombel' => $_id);

                $_fetch['strukturData'] = $Schema -> getWhere('struktur_kelas', $_strukturData);
                $_fetch['rombelData'] = $Schema -> getWhere('rombel', $_rombelData);

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('pages/struktur/v_struktur_kelas', $_fetch);
            echo view('layout/_footer');

        }

    // ================================================================================================================================ // - Struktur Kelas Management

        public function edit_struktur_kelas($_id) {

            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                $_strukturData = array('sk_kelas' => $_id);

                $_fetch['strukturData'] = $Schema -> getWhere('struktur_kelas', $_strukturData);

                $_fetch['rombelsData'] = $Schema -> visual('rombel');
                $_fetch['guruData'] = $Schema -> visual('guru');
                $_fetch['rombelsData'] = $Schema -> visual('rombel');
                $_fetch['muridData'] = $Schema -> visual('murid');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/edit_struktur_kelas', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function aksi_edit_struktur_kelas() {

            $Schema = new Models();

                $kelas =  $this->request->getPost('nama_kelas');
                $walikelas = $this->request->getPost('walikelas');
                $ketua_kelas = $this->request->getPost('ketua_kelas');
                $wakil_ketua_kelas = $this->request->getPost('wakilketua_kelas');
                $sekretaris = $this->request->getPost('sekretaris');
                $bendahara = $this->request->getPost('bendahara');
                $skeamanan = $this->request->getPost('skebersihan');
                $skebersihan = $this->request->getPost('skeamanan');

                $idSK = $this->request->getPost('sk_id');

                $_where = array('sk_kelas' => $idSK);
                
            $struktur_kelas = array(
                'sk_kelas' => $kelas,
                'sk_walikelas' => $walikelas,
                'sk_ketua_kelas' => $ketua_kelas,
                'sk_wakil_ketua_kelas' => $wakil_ketua_kelas,
                'sk_sekretaris' => $sekretaris,
                'sk_bendahara' => $bendahara,
                'sk_skeamanan' => $skeamanan,
                'sk_skebersihan' => $skebersihan
            );
            
                if (in_array(session() -> get('level'), [1])) {

                    $Schema -> edit_data('struktur_kelas', $struktur_kelas, $_where);

                } else {

                    return redirect() -> to('/home/');

                }

            return redirect() -> to('/home/struktur_kelas');

        }

}