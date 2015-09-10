<?php
class Push_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    private $GOOGLE_API_KEY = "AIzaSyDQHaMUy1hBzOSVs7CYGFSiLK_3dqJ6lDk"; // Place your Google API Key

    private $SERVICE_URL = 'https://android.googleapis.com/gcm/send';

    public function getAllUsers() {
        $result = $this->db->query("select id as user_id, gcm_regid, name as user_name FROM `android`.`gcm_users`")->result_array();
        return $result;
    }

    public function getUserData($userId){
        $result = $this->db->query("select id as user_id, gcm_regid, name as user_name FROM `android`.`gcm_users` where id = $userId")->row_array();
        return $result;
    }

    public function send_message($userId,$message){
        $userData = $this->getUserData($userId);
        if(!empty($userData)){
            $this->send_notification(array($userData['gcm_regid']), array("message" => $message));
        }else{
            return false;
        }
    }

    public function send_notification($registration_ids=array(), $message=array("message" =>'')){

        $fields = array(
            'registration_ids' => $registration_ids,
            'data' => $message,
        );

        $headers = array(
            'Authorization: key=' . $this->GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $this->SERVICE_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            return 'Curl failed: ' . curl_error($ch);
        }
        // Close connection
        curl_close($ch);
        return $result;
    }

    public  function storeUser($name, $regId){

        $this->db->trans_start(TRUE);
        $this->db->query("delete from  `android`.`gcm_users` where `name` = '{$name}' or `gcm_regid` = '{$regId}'");
        $this->db->query("INSERT INTO gcm_users(name, gcm_regid, ins_date) VALUES('{$name}', '{$regId}', NOW())");
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }
        else
        {
            return $this->db->insert_id();
        }
    }

}