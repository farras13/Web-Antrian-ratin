<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antric extends CI_Controller {

    public function __construct(){
        //digunakan untuk menjalankan fungsi constrauct pada class parrent(ci_controller)
        parent::__construct();
        $this->load->model('m_antri');
    }
   
    public function index()
    {
        $data['title']='Sistem Antrian';
        $data['antrianc']=$this->m_antri->get_no_antric();
        $data['tanggal']=date('d-M-Y');
        $this->load->view('template/headerc',$data);
        $this->load->view('home/v_antric', $data);
        $this->load->view('template/footer');
    }

    public function reset_noc()
    {
        $this->m_antri->reset_noc();
        redirect('antric','refresh');
    }

}

/* End of file Home.php */


?>