<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // error_reporting(E_ALL);
        $this->load->model('main_m');
       // $this->output->enable_profiler();

    }

    public $active = ' active';

    public function index()
    {
        $this->load->view('layout/header',$header);
        $this->load->view('test');

    }
    public function clon()
    {

        $this->load->view('test');

    }
    public function sec(){

        $this->load->view('sec18.php');
    }
    public function cook(){


        if (isset($_COOKIE['Mortal'])) $cnt=$_COOKIE['Mortal']+1;
        else $cnt=0;

        setcookie("Mortal",$cnt,0x6FFFFFFF);
        // Устанавливаем массив Cookies:
        setcookie("cookie[1]", "ghgf");
        setcookie("cookie[2]", "Второй");
        setcookie("cookie[3]", "Третий");

        echo "<p>Вы посещали эту страницу <b>".@$_COOKIE['Mortal']."</b> раз</p>";

print_r($_COOKIE);

// После перезагрузки страницы мы отобразим
// Состав массива Cookies 'cookie':
        if (isset($_COOKIE['cookie'])) {
            foreach ($_COOKIE['cookie'] as $name => $value) {
                echo "$name : $value <br>";
            }
        }
    }
    public function my_game(){
        $this->load->view('my_game.php');
    }
    public function ang(){
        $this->load->view('angular_v.php');
    }
    public function map(){
        $this->load->view('map.php');
    }
   // public function android_ping(){
   //    echo "Hello World!";
   // }
    public function android_ping($last_id){
        $arr['message'] = array(
                        array('topic'=>'10.55.1.163','time'=>date('Y-m-d H:i:s'),'text'=>'HIGH OK PROBLEM BAD RESPONSE'),
                        array('topic'=>'10.55.1.66','time'=>date('Y-m-d H:i:s'),'text'=>'привет Таня'),
                        array('topic'=>'10.55.1.89','time'=>date('Y-m-d H:i:s'),'text'=>'HIGH OK PROBLEM FREE MEMORY 1%'),
                        array('topic'=>'10.55.1.205','time'=>date('Y-m-d H:i:s'),'text'=>'HIGH OK PROBLEM FREE MEMORY 5%')

                    );
        echo json_encode($arr);
        file_put_contents('ping.log',date('Y.m.d H:i:s')."-$last_id \n",FILE_APPEND);


/*
        echo '{
                "contacts": [
                    {
                            "id": "c200",
                            "name": "Ravi Tamada",
                            "email": "ravi@gmail.com",
                            "address": "xx-xx-xxxx,x - street, x - country",
                            "gender" : "male",
                            "phone": {
                                "mobile": "+91 0000000000",
                                "home": "00 000000",
                                "office": "00 000000"
                            }
                    },
                    {
                            "id": "c201",
                            "name": "Johnny Depp",
                            "email": "johnny_depp@gmail.com",
                            "address": "xx-xx-xxxx,x - street, x - country",
                            "gender" : "male",
                            "phone": {
                                "mobile": "+91 0000000000",
                                "home": "00 000000",
                                "office": "00 000000"
                            }
                    }
                ]
              }';

*/
    }


}