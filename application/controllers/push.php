<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Push extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // error_reporting(E_ALL);
        $this->load->model('push_m');
        //$this->output->enable_profiler();
    }

    public function user_consol(){
        $data['users'] = $this->push_m->getAllUsers();
        $this->load->view('push/user_console_v',$data);
    }

    public function send_message(){
        $userId = $this->input->post('userId');
        $message = $this->input->post('message');
        if (!empty($userId) and !empty($message)) {
            $this->push_m->send_message($userId,$message);
        }
    }

    public function register(){
        $name = $this->input->post('name');
        $regId = $this->input->post('regId');
        if (!empty($name) and !empty($regId)) {
            $userId = $this->push_m->storeUser($name, $regId);
            if($userId!==false){
                $this->push_m->send_message($userId,'Successfully registration!');
            }
        }
    }
}