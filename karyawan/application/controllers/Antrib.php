<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrib extends CI_Controller {

    public function __construct(){
        //digunakan untuk menjalankan fungsi constrauct pada class parrent(ci_controller)
        parent::__construct();
        $this->load->model('m_antri');
    }
   
    public function index()
    {
        $data['title']='Sistem Antrian';
        $data['antrianb']=$this->m_antri->get_no_antrib();
        $data['tanggal']=date('d-M-Y');
        $this->load->view('template/headerb',$data);
        $this->load->view('home/v_antrib', $data);
        $this->load->view('template/footer');
    }
    
    public function reset_nob()
    {
        $this->m_antri->reset_nob();
        redirect('antrib','refresh');
    }

}

/* End of file Home.php */


?>