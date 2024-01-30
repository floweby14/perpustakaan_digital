<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Models;
use CodeIgniter\Model;

class Home extends BaseController {

	// ================================================================================================================================ //

		public function index() {

			if (session() -> get('id')  == NULL) {

			    return view('login');

            } else if (session() -> get('id') > 0) {

                return redirect() -> to('/home/dashboard');

            }

		}

        public function dashboard() {

            if (session() -> get('id') > 0) {

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('dashboard');
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

	// ================================================================================================================================ //

		public function aksi_login() {

            $Schema = new Models();

            $username = $this -> request -> getPost('username');
            $password = $this -> request -> getPost('password');

            $data=array(
                'username' => $username,
                'password' => md5($password)
            );

            $cek = $Schema -> getWhere2('user', $data);

            if ($cek > 0) {

                session()->set('id', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);

                return redirect()->to('/home/user');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function reset_password($id) {

            if(in_array(session() -> get('level'), [1])) {

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

	// ================================================================================================================================ //

        public function user() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                $on = 'user.level = level.id_level';
                $_fetch['user'] = $Schema -> visual_join2('user', 'level', $on);

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_user', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

	// =================================================== [ Guru ] =================================================================== //
    
        public function kelas() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                $_fetch['kelas'] = $Schema -> visual('kelas');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('pages/data_kelas', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect() -> to('/home/');

            }

        }

        public function tambah_kelas() {

            if(in_array(session() -> get('level'), [1])) {
                
                $Schema = new Models();

                $_fetch['user'] = $Schema -> visual('level');

                echo view('layout/_heading');
                echo view('layout/_menu');
                echo view('forms/tambah_kelas', $_fetch);
                echo view('layout/_footer');

            } else {

                return redirect()->to('/home/');

            }

        }

        public function aksi_tambah_kelas() {
            
            if (in_array(session() -> get('level'), [1])) {

                $Schema = new Models();

                $nama_kelas = $this->request->getPost('nama_kelas');
                
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
                $_fetch['kelas'] = $Schema -> getWhere('kelas', $id_kelas);

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

                $nama_kelas = $this->request->getPost('nama_kelas');
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
		
	// =================================================== [ Murid ] =================================================================== //

        public function murid() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                $on = 'murid.walikelas = guru.id_guru';
                $on1 = 'murid.kelas = kelas.id_kelas';

                $_fetch['murid'] = $Schema -> visual_join3('murid', 'guru', 'kelas', $on, $on1);

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

                $_fetch['guru'] = $Schema -> visual('guru');
                $_fetch['kelas'] = $Schema -> visual('kelas');

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

                $_fetch['user'] = $Schema -> getWhere('user', $user);
                $_fetch['murid'] = $Schema -> getWhere('murid', $murid);
                $_fetch['guru'] = $Schema -> visual('guru');
                $_fetch['kelas'] = $Schema -> visual('kelas');

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

	// =================================================== [ Guru ] =================================================================== //

        public function guru() {

            if (session() -> get('id') > 0) {

                $Schema = new Models();

                $_fetch['guru'] = $Schema -> visual('guru');

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
                
                $Schema = new Models();

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

                $user = array(
                    'username'=> $username,
                    'password'=> md5($password),
                    'level'=> '3',
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

                $_fetch['user'] = $Schema -> getWhere('user', $user);
                $_fetch['guru'] = $Schema -> getWhere('guru', $guru);

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

                $where = array('id_user' => $id_user);

                $user = array(
                    'username'=> $username,
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
    

}