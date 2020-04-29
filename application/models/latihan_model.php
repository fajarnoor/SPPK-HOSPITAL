<?php
    defined('BASEPATH') OR exit('no direct script access allowed');

    class latihan_model extends CI_Model{

	
	  public function cek_data_akun($id,$katasandi)
        {
            $query = $this->db->query("select * from akun where (id='$id' or email='$id') and katasandi=md5(md5(md5('$katasandi'))) limit 1");
            if ($query->num_rows() == 0) {
                return FALSE;
            } else {
                foreach ($query->result_array() as $data) {
                    $this->session->set_userdata('id', $data['id']);
                    $this->session->set_userdata('nama', $data['nama']);
                    $this->session->set_userdata('katasandi', $data['katasandi_asli']);
                    $this->session->set_userdata('level', $data['level']);
                }
                return TRUE;
            }
        }
        
        public function cek_data_akun_pasien($id)
        {
            $query = $this->db->query("select * from pasien where id='$id' limit 1");
            if ($query->num_rows() == 0) {
                return FALSE;
            } else {
                foreach ($query->result_array() as $data) {
                    $this->session->set_userdata('id', $data['id']);
                    $this->session->set_userdata('nama', $data['nama']);
                    $this->session->set_userdata('level', $data['level']);
                }
                return TRUE;
            }
        }
        
        public function cek_data_akun_admin($id, $katasandi)
        {
            $query = $this->db->query("select * from admin where (id='$id' or email='$id') and password=md5(md5(md5('$katasandi'))) limit 1");
            if ($query->num_rows() == 0) {
                return FALSE;
            } else {
                foreach ($query->result_array() as $data) {
                    $this->session->set_userdata('id', $data['id']);
                    $this->session->set_userdata('nama', $data['nama']);
                    $this->session->set_userdata('katasandi', $data['katasandi']);
                    $this->session->set_userdata('level', $data['level']);
                }
                return TRUE;
            }
        }

            public function buat_akun($id , $nama , $katasandi , $level, $asal, $nohp, $email)
        {
            $query = $this->db->query("INSERT INTO akun values('$id','$nama','$email','$asal','$nohp','$katasandi',md5(md5(md5('$katasandi'))),'$level')");
            return $query;
        }

    public function hitung($sel)
    {
        $query = $this->db->query("SELECT COUNT(id) as id FROM pasien where status='$sel'");
        return $query->row()->id;
    }

    public function tambahbarusharing($id, $nama, $nama_file, $tanggal, $pesan)
    {
        $query = $this->db->query("INSERT INTO `sharing` values('$id','$nama','$nama_file','$pesan','$tanggal')");
        return $query;
    }
	
	 public function tambahbaruuser($id, $nama, $katasandi, $asal, $nohp, $email)
    {
        $query = $this->db->query("INSERT INTO `akun` values('$id','$nama','$email','$asal','$nohp','$katasandi',md5(md5(md5('$katasandi'))),'user')");
        return $query;
    }
    public function edituser($id, $nama, $katasandi, $asal, $nohp, $email)
    {
        $query = $this->db->query("UPDATE `akun` set `nama` = '$nama', `asal` = '$asal', `katasandi_asli`= '$katasandi', `katasandi`= md5(md5(md5('$katasandi'))), `no_hp` = '$nohp', `email` = '$email' where id='$id'");
        return $query;
    }
    public function hapus_user($tab, $column, $id)
    {
        $query = $this->db->query("DELETE FROM $tab where $column ='$id'");
        return $query;
    }	
		
    public function editsharing($id, $nama, $nama_file, $tanggal, $pesan)
    {
        $query = $this->db->query("UPDATE `sharing` set `nama` = '$nama', `nama_file` = '$nama_file', `waktu`= '$tanggal', `pesan`='$pesan' where id='$id'");
        return $query;
    }
    public function hapus_sharing($tab, $column, $id)
    {
        $query = $this->db->query("DELETE FROM $tab where $column ='$id'");
        return $query;
        $query2 = $this->db->query("DELETE FROM `comment` where id ='$id'");
        return $query2;
    }

    public function tambahbarucomment($id, $nama, $tanggal, $comment)
    {
        $query = $this->db->query("INSERT INTO `comment` values('$id','$nama','$comment','$tanggal')");
        return $query;
    }
    public function hitungcoment($sel)
    {
        $query = $this->db->query("SELECT COUNT(id) as id FROM comment where id='$sel'");
        return $query->row()->id;
    }
    public function bukakomen($id)
    {
        $query = $this->db->query("select * from comment where id='$id'");
        return $query->result_array();
    }
}
?>
