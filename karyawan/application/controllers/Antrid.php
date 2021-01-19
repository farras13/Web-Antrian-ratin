<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrid extends CI_Controller {

    public function __construct(){
        //digunakan untuk menjalankan fungsi constrauct pada class parrent(ci_controller)
        parent::__construct();
        $this->load->model('m_antri');
    }
   
    public function index()
    {
        $data['title']='Sistem Antrian';
        $data['antriand']=$this->m_antri->get_no_antrid();
        $data['tanggal']=date('d-M-Y');
        $this->load->view('template/headerd',$data);
        $this->load->view('home/v_antrid', $data);
        $this->load->view('template/footer');
    }
    
    public function reset_nod()
    {
        $this->m_antri->reset_nod();
        redirect('antrid','refresh');
    }

}

/* End of file Home.php */


?>