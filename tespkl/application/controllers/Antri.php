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
        $data['antri']=$this->m_antri->get_no_antri();
        $data['antrib']=$this->m_antri->get_no_antrib();
        $data['antric']=$this->m_antri->get_no_antric();
        $data['antrid']=$this->m_antri->get_no_antrid();
        $data['title']='Antrian';
        $this->load->view('template/header',$data);
        $this->load->view('home/index', $data);
        $no_antri=$this->input->post('no_antri');
        $no_antrib=$this->input->post('no_antrib');
        $no_antric=$this->input->post('no_antric');
        $no_antrid=$this->input->post('no_antrid');
        $this->load->view('template/footer');
    }

    public function simpan_no(){
        $no_antri=$this->input->post('no_antri');
        $this->m_antri->simpan_no($no_antri);
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('escpos');
        // $link_address = base_url('antri');
            // echo "<center><a href='".$link_address."'><button>Ambil Antrian</button></a> </center>";
            echo '<script>self.location = "index";</script>';
            $connector = new Escpos\PrintConnectors\WindowsPrintConnector("EPSON TM-T88IV Receipt");
            $printer = new Escpos\Printer($connector);

            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->selectPrintMode(Escpos\Printer::MODE_EMPHASIZED);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("ANTRIAN KANTOR IMIGRASI\n");
            $printer->text("Pemohon Umum\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->setTextSize(5, 5);
            $printer->text($no_antri);
            $printer->text("\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setFont(Escpos\Printer::FONT_C);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("Tunggu antrian anda muncul di layar \n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text(" ".date('d-M-Y / H:i:s a'));
            $printer->text("\n");
            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->feed(2);
            $printer->cut();
            $printer->close();
            
    }

    public function simpan_nob(){
        $no_antrib=$this->input->post('no_antrib');
        $this->m_antri->simpan_nob($no_antrib);
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('escpos');
        // $link_address = base_url('antri');
        //     echo "<center><a href='".$link_address."'><button>Ambil Antrian</button></a> </center>";
            echo '<script>self.location = "index";</script>';
            //$connector = new Escpos\PrintConnectors\WindowsPrintConnector("POS-80");
            $connector = new Escpos\PrintConnectors\WindowsPrintConnector("EPSON TM-T88IV Receipt");
            $printer = new Escpos\Printer($connector);

            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->selectPrintMode(Escpos\Printer::MODE_EMPHASIZED);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("ANTRIAN KANTOR IMIGRASI\n");
            $printer->text("Pemohon Prioritas\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->setTextSize(5, 5);
            $printer->text($no_antrib);
            $printer->text("\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setFont(Escpos\Printer::FONT_C);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("Tunggu antrian anda muncul di layar \n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text(" ".date('d-M-Y / H:i:s a'));
            $printer->text("\n");
            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->feed(2);
            $printer->cut();
            $printer->close();
    }

    public function simpan_noc(){
        $no_antric=$this->input->post('no_antric');
        $this->m_antri->simpan_noc($no_antric);
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('escpos');
        // $link_address = base_url('antri');
        //     echo "<center><a href='".$link_address."'><button>Ambil Antrian</button></a> </center>";
            echo '<script>self.location = "index";</script>';
            //$connector = new Escpos\PrintConnectors\WindowsPrintConnector("POS-80");
            $connector = new Escpos\PrintConnectors\WindowsPrintConnector("EPSON TM-T88IV Receipt");
            $printer = new Escpos\Printer($connector);

            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->selectPrintMode(Escpos\Printer::MODE_EMPHASIZED);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("ANTRIAN KANTOR IMIGRASI\n");
            $printer->text("Pemohon Asing\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->setTextSize(5, 5);
            $printer->text($no_antric);
            $printer->text("\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setFont(Escpos\Printer::FONT_C);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("Tunggu antrian anda muncul di layar \n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text(" ".date('d-M-Y / H:i:s a'));
            $printer->text("\n");
            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->feed(2);
            $printer->cut();
            $printer->close();
    }

    public function simpan_nod(){
        $no_antrid=$this->input->post('no_antrid');
        $this->m_antri->simpan_nod($no_antrid);
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('escpos');
        // $link_address = base_url('antri');
        //     echo "<center><a href='".$link_address."'><button>Ambil Antrian</button></a> </center>";
            echo '<script>self.location = "index";</script>';
            //$connector = new Escpos\PrintConnectors\WindowsPrintConnector("POS-80");
            $connector = new Escpos\PrintConnectors\WindowsPrintConnector("EPSON TM-T88IV Receipt");
            $printer = new Escpos\Printer($connector);

            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->selectPrintMode(Escpos\Printer::MODE_EMPHASIZED);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("ANTRIAN KANTOR IMIGRASI\n");
            $printer->text("Pengambilan Paspor\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->setTextSize(5, 5);
            $printer->text($no_antrid);
            $printer->text("\n");
            $printer->text("\n");
            $printer->initialize();
            $printer->setFont(Escpos\Printer::FONT_C);
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text("Tunggu antrian anda muncul di layar \n");
            $printer->initialize();
            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->text(" ".date('d-M-Y / H:i:s a'));
            $printer->text("\n");
            $printer->initialize();
            $printer->text("==========================================\n");
            $printer->feed(2);
            $printer->cut();
            $printer->close();
    }

}

/* End of file Home.php */


?>