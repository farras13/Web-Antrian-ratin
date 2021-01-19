<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_antri extends CI_Model {

    public function get_no_antri(){
        $huruf = "A";
        $cd = $this->db->query("SELECT MAX(RIGHT(no_antri,3)) AS kd_max FROM antrian WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $huruf."-".$kd;
    }

    public function simpan_no($no_antri){
        $hasil=$this->db->query("INSERT INTO antrian (no_antri) VALUES ('$no_antri')");
        return $hasil;
    }

    public function get_no_antrib(){
        $huruf = "B";
        $cd = $this->db->query("SELECT MAX(RIGHT(no_antrib,3)) AS kd_max FROM antrianb WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $huruf."-".$kd;
    }

    public function simpan_nob($no_antrib){
        $hasil=$this->db->query("INSERT INTO antrianb (no_antrib) VALUES ('$no_antrib')");
        return $hasil;
    }

    public function get_no_antric(){
        $huruf = "C";
        $cd = $this->db->query("SELECT MAX(RIGHT(no_antric,3)) AS kd_max FROM antrianc WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $huruf."-".$kd;
    }

    public function simpan_noc($no_antric){
        $hasil=$this->db->query("INSERT INTO antrianc (no_antric) VALUES ('$no_antric')");
        return $hasil;
    }

    public function get_no_antrid(){
        $huruf = "D";
        $cd = $this->db->query("SELECT MAX(RIGHT(no_antrid,3)) AS kd_max FROM antriand WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $huruf."-".$kd;
    }

    public function simpan_nod($no_antrid){
        $hasil=$this->db->query("INSERT INTO antriand (no_antrid) VALUES ('$no_antrid')");
        return $hasil;
    }

}

/* End of file antrian_model.php */
