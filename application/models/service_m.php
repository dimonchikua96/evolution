<?php
class Service_m extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }
    public  function save_message($name,$phone,$mail,$message)
    {
        $this->load->library('email');
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'mail' => $mail,
            'message' => $message,
            'state' => 0
        );


       /* $this->email->from('dimonchikua96@gmail.com', 'Evolution');
        $this->email->to('dimonchikua96@gmail.com');
        $this->email->subject('Новый вопрос');
        $this->email->message($message);
        $this->email->send();
        echo $this->email->print_debugger();*/

        $this->db->query('USE Service');
        if($this->db->insert('mail', $data)){
            return true;
        }else{
            return false;
        }
    }
}