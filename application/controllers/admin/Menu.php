<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/manu');
        $data = array(
            'content' => 'dashboard/index.php'
        );
        $this->load->view('template/menu', $data);
    }
}
