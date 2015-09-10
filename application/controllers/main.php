<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       // error_reporting(E_ALL);
        $this->load->model('main_m');
        $this->output->enable_profiler();

    }

    public $active = ' active';

	public function index()
	{
        $header['a_index']=$this->active;
        $data = $this->main_m->get_main();
		$this->load->view('layout/header',$header);
		$this->load->view('main_v',$data);
        $this->load->view('layout/footer');
	}

    public function contact()
    {
        $header['a_contact']=$this->active;
        $this->load->view('layout/header',$header);
        $data['address'] = $this->main_m->get_adress();
        $this->load->view('contact_v',$data);
        $this->load->view('layout/footer');
    }
    public function shedule()
    {
        $header['a_shedule']=$this->active;
        $this->load->view('layout/header',$header);
        $data['shedule'] = $this->main_m->get_shedule();
        $this->load->view('shedule_v',$data);
        $this->load->view('layout/footer');
    }
    public function news()
    {
        $header['a_news']=$this->active;
        $this->load->view('layout/header',$header);
        $data['news'] = $this->main_m->get_news();
        $this->load->view('news_v',$data);
        $this->load->view('layout/footer');
    }
    public function news_detail($id)
    {
        $header['a_news']=$this->active;
        $this->load->view('layout/header',$header);
        $data['news'] = $this->main_m->get_news($id);
        $this->load->view('news_detail_v',$data);
        $this->load->view('layout/footer');
    }
    public function articles()
    {
        $header['a_articles']=$this->active;
        $this->load->view('layout/header',$header);
        $data['articles'] = $this->main_m->get_articles();
        $this->load->view('articles_v',$data);
        $this->load->view('layout/footer');
    }
    public function articles_detail($id)
    {
        $header['a_articles']=$this->active;
        $this->load->view('layout/header',$header);
        $data['articles'] = $this->main_m->get_articles($id);
        $this->load->view('articles_detail_v',$data);
        $this->load->view('layout/footer');
    }
    public function instructors()
    {
        $header['a_instructors']=$this->active;
        $this->load->view('layout/header',$header);
        $data['news'] = $this->main_m->get_instructors();
        $this->load->view('teachers_v',$data);
        $this->load->view('layout/footer');
    }
    public function gallery()
    {
        $header['a_gallery']=$this->active;
        $header['preload']=' onload="preload(\''.base_url().'img/gallery/site_miniature/video_gallery.jpg\',\''.base_url().'img/gallery/site_miniature/video_gallery.jpg\')"';
        $this->load->view('layout/header',$header);
        $this->load->view('gallery_v');
        $this->load->view('layout/footer');
    }
    public function foto()
    {
        $header['a_gallery']=$this->active;
        $this->load->view('layout/header',$header);
        $this->load->view('foto_v');
        $this->load->view('layout/footer');
    }
    public function video()
    {
        $header['a_gallery']=$this->active;
        $this->load->view('layout/header',$header);
        $this->load->view('video_v');
        $this->load->view('layout/footer');
    }
}
