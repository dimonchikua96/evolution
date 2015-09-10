<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // error_reporting(E_ALL);
        $this->load->model('service_m');
        //$this->output->enable_profiler();

    }
    public function send_message(){
       $data = $this->input->post();
        foreach($data as $key=>$val){
            $data[$key]=iconv("UTF-8", "WINDOWS-1251", $val);
        }

        $name = trim($data['you_name']);
        $phone = trim(str_replace(' ','',$data['you_phone']));
        $mail = trim($data['you_mail']);
        $message = trim($data['you_message']);
        $this->service_m->save_message($name,$phone,$mail,$message);
        echo 'Таня+Дима=love';
    }

}
