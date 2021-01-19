<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antri extends CI_Controller {

    public function __construct(){
        //digunakan untuk menjalankan fungsi constrauct pada class parrent(ci_controller)
        parent::__construct();
        $this->load->model('m_antri');
    }
   
    public function index()
    {
        $data['title']='Sistem Antrian';
        // $data['antrian']=$this->m_antri->get_no_antri();
        $data['tanggal']=date('d-M-Y');
        $this->load->view('template/header',$data);
        $this->load->view('home/v_antri');
        $this->load->view('template/footer');
	}
	
	public function get_antriA()
	{
		$data = $this->m_antri->get_no_antri();
		echo json_encode($data);
	}
    
    public function reset_no()
    {
        $this->m_antri->reset_no();
        redirect('antri','refresh');
    }

}

/* End of file Home.php */


?>
