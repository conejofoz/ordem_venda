<?php

defined('BASEPATH') OR exit ('Ação não permitida');

class Home extends CI_Controller{

    public function __counstruct(){
        parent::__counstruct();
    }


    public function index(){
        $this->load->view('layout/header'); 
        $this->load->view('home/index');
        $this->load->view('layout/footer'); 
    }

}
