<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller{

    function index(){
        
        $this->load->model('userModel');
        $var=  $this->userModel->buscaTodos();
        $var=array('var'=>$var);
       
        $this->load->view('home',$var);
    }
     
} 