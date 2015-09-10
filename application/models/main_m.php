<?php
class Main_m extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    function get_main()
    {
        $data['instructors'] = $this->get_instructors(true);
        $data['address'] = $this->get_adress();
        $data['articles'] = $this->get_articles(true);
        //$data['news'] =$this->get_news(true);
        //$data['address'] =$this->get_adress();
        //print_r($data);
        return $data;


    }

    function get_adress()
    {
        $query = $this->db->get('contacts',1);
        return $this->query_result($query,1,'Ошибка получения контактов');
    }

    public function get_shedule()
    {
        $query = $this->db->get('schedule');
        return $this->query_result($query,2,'Ошибка получения расписание');
    }

    public function get_news($main=false)
    {
        if($main===true){
            $query = $this->db->query('SELECT id, name, short_name,`date` FROM news');
        }elseif($main!=false){
            $query = $this->db->get_where('news', array('id' => $main));

        }else{
            $query = $this->db->get('news');
        }
        return $this->query_result($query,2,'Ошибка получения новости');

    }

    public function get_articles($main=false)
    {
        if($main===true){
            $query = $this->db->query('SELECT id, name, short_name FROM articles limit 1,5');
        }elseif($main!=false){
            $query = $this->db->get_where('articles', array('id' => $main));

        }else{
            $query = $this->db->get('articles');
        }
        return $this->query_result($query,2,'Ошибка получения статьи');

    }

    public function get_instructors($main=false)
    {
        if($main===true){
            $query = $this->db->query('SELECT id, name, surname FROM  teachers');
        }else{
            $query = $this->db->get('teachers');
        }
        return $this->query_result($query,2,'Ошибка получения адреса');


       /* INSERT INTO `teachers`(`name`, `surname`, `info`, `phone`, `birthday`,  `photo`, `vk`, `fb`, `twitter`) VALUES
    ('Татьяна','Моисеева','Танец-ритмичные, выразительные телодвижения, обычно выстраиваемые в определенную композицию и исполняемые с музыкальным сопровождением. Танец - возможно, древнейшее из искусств: оно отражает восходящую к самым ранним временам потребность человека передавать другим людям свои радость или скорбь посредством своего тела. Почти все важные события в жизни первобытного человека отмечались танцами: рождение, смерть, война, избрание нового вождя, исцеление больного. Танцем выражались моления о дожде, о солнечном свете, о плодородии, о защите и прощении. Танцевальные па (фр. pas - "шаг") ведут происхождение от основных форм движений человека - ходьбы, бега, прыжков, подпрыгиваний, скачков, скольжений, поворотов и раскачиваний. Сочетания подобных движений постепенно превратились в па традиционных танцев. Главными характеристиками танца являются ритм - относительно быстрое или относительно медленное повторение и варьирование основных движений; рисунок - сочетание движений в композиции; динамика - варьирование размаха и напряженности движений; техника - степень владения телом и мастерство в выполнении основных па и позиций. Во многих танцах большое значение имеет также жестикуляция, особенно движения рук. Танец имеет разные средства выразительности:
','+380931111111','1990-08-21','Tanya.jpg','vk.com','tw.com','fb.com')

        */
    }
   public  function query_result($query,$res_type,$message)
    {
        if($query) {
            if ($res_type==1){
                return $query->row_array();
            }else{
                return $query->result_array();
            }
        }else{
            $this->error_report($message);
            return array();
        }

    }

    function error_report($error)
    {
        $file = '../errors.log';
        $fp = fopen($file, 'a');
        $text = "----------------------------------------------------\n";
        $text .= "Дата: ".date('Y-m-d H:i:s')."\n";
        $text .= "Ошибка: $error\n"; // Исходная строка
        fwrite($fp, $text); // Запись в файл
        fclose($fp); //Закрытие файла
    }

}
