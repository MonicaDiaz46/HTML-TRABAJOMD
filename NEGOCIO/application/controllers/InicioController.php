<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioController extends CI_Controller{
    public function Inicio() {
     $this->load->view ('layout/headerView');
     $this->load->view ('InicioView');
     $this->load->view('layout/FooterView');
    }
     public function Registro()
	{
            $this->load->view('layout/headerView');
            $this->load->view('RegistrosView');
            $this->load->view('layout/FooterView');        
	}
    
}
