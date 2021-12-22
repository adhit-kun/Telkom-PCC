<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model('Dbs');
        $this->load->helper('url');
    }    

    public function index(){
        $this->load->view('index.php');
    }

    public function halaman_pegawai(){
        $t_obat['t_obat'] = $this->Dbs->get_data_obat();
        // var_dump($data);die;
        $this->load->view('halaman_pegawai.php',$t_obat);
    }
    
    public function halaman_admin(){
        $t_obat = $this->Dbs->get_data_obat();
        $farmasi = $this->Dbs->get_data_farmasi();
        $dataaa = array(
            't_obat' => $t_obat,
            'farmasi' => $farmasi,
        );
        $this->load->view('halaman_admin.php',$dataaa);
    }

    public function tambah_obat_admin(){
        $this->load->view('tambah_obat_admin');
    }

    public function tambah_farmasi_admin(){
        $this->load->view('tambah_farmasi_admin');
    }

    public function tambah_obat_act(){
        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'kategori' => $this->input->post('kategori'),
            'nama_obat' => $this->input->post('nama_obat'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'farmasi' => $this->input->post('farmasi')
        );
        $insert = $this->Dbs->insert($data,'t_obat');
        if ($insert){
            echo "<script type='text/javascript'>alert('Berhasil Menambahkan Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal Menambahkan Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";

        }
    }

    public function tambah_farmasi_admin_act(){
        $data = array(
            'id_farmasi' => $this->input->post('id_farmasi'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'telepon' => $this->input->post('telepon')
        );
        $insert = $this->Dbs->insert($data,'farmasi');
        if ($insert){
            echo "<script type='text/javascript'>alert('Berhasil Menambahkan Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal Menambahkan Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";

        }
    }

    public function edit_farmasi_admin($id){
        $get = $this->Dbs->get_farmasiById($id);
        $data = array(
            'id_farmasi' => $get->id_farmasi,
            'nama' => $get->nama,
            'alamat' => $get->alamat,
            'kota' => $get->kota,
            'telepon' => $get->telepon
        );
        $this->load->view('edit_farmasi_admin',$data);
    }

    public function edit_farmasi_admin_act(){
        $data = array(
            'id_farmasi' => $this->input->post('id_farmasi'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'telepon' => $this->input->post('telepon')
        );

        $id = $this->input->post('id_farmasi');
        $update=$this->Dbs->update($data,'farmasi','id_farmasi',$id);

        if ($update) {
            echo "<script type='text/javascript'>alert('Berhasil Mengubah Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal Mengubah Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
        }
        
    }

    public function edit_obat_admin($id){
        $get = $this->Dbs->get_obatById($id);
        $data = array(
            'id_obat' => $get->id_obat,
            'kategori' => $get->kategori,
            'nama_obat' => $get->nama_obat,
            'harga' => $get->harga,
            'stok' => $get->stok,
            'farmasi' => $get->farmasi
        );
        $this->load->view('edit_obat_admin',$data);
    }

    public function edit_obat_admin_act(){
        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'kategori' => $this->input->post('kategori'),
            'nama_obat' => $this->input->post('nama_obat'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'farmasi' => $this->input->post('farmasi')
        );

        $id = $this->input->post('id_obat');
        //var_dump($data,$id);die;
        $update=$this->Dbs->update($data,'t_obat','id_obat',$id);

        if ($update) {
            echo "<script type='text/javascript'>alert('Berhasil Mengubah Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal Mengubah Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
        }
        
    }

    public function edit_obat_pegawai($id){
        $get = $this->Dbs->get_obatById($id);
        $data = array(
            'id_obat' => $get->id_obat,
            'stok' => $get->stok
        );
        $this->load->view('edit_obat_pegawai',$data);
    }

    public function edit_obat_pegawai_act(){
        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'stok' => $this->input->post('stok')
        );

        $id = $this->input->post('id_obat');
        //var_dump($data,$id);die;
        $update=$this->Dbs->update($data,'t_obat','id_obat',$id);

        if ($update) {
            echo "<script type='text/javascript'>alert('Berhasil Mengubah Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_pegawai' </script>";
        }else{
            echo "<script type='text/javascript'>alert('Gagal Mengubah Data Pengarang'); document.location='http://localhost/apotekmart/front/halaman_pegawai' </script>";
        }
        
    }

    public function search_obat_pegawai(){
        $keyword = $this->input->post('keyword');
        $data['obat'] = $this->Dbs->get_nama_obat_keyword($keyword);
        $this->load->view('search',$data);
    }



    public function hapus_obat_admin($id){
        $where = array('id_obat' => $id);
        $this->Dbs->delete($where,'t_obat');
        echo "<script type='text/javascript'>alert('Berhasil Dihapus'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
    }

    public function hapus_farmasi_admin($id){
        $where = array('id_farmasi' => $id);
        $this->Dbs->delete($where,'farmasi');
        echo "<script type='text/javascript'>alert('Berhasil Dihapus'); document.location='http://localhost/apotekmart/front/halaman_admin' </script>";
    }



}