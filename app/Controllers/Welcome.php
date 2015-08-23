<?php
namespace Controllers
{

    use Core\View;
    use Core\Controller;

    class Welcome extends Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->language->load('Welcome');
        }

        public function index()
        {
            $data['page']='home';

            $data[''] = $this->language->get('');

            $data['home']     = $this->language->get('home');
            $data['about']    = $this->language->get('about');
            $data['services'] = $this->language->get('services');
            $data['careers']  = $this->language->get('careers');
            $data['blog']     = $this->language->get('blog');

            $data['contact'] = $this->language->get('contact');
            $data['email'] = $this->language->get('email');
            $data['msg']   = $this->language->get('msg');
            $data['send'] = $this->language->get('send');

            $data['tsteinholz'] = $this->language->get('tsteinholz');
            $data['hernst']     = $this->language->get('hernst');
            $data['jfreedman']  = $this->language->get('jfreedman');
            $data['rowens']     = $this->language->get('rowens');
            $data['jmawer']     = $this->language->get('jmawer');
            $data['jrichards']  = $this->language->get('jrichards');

            $data['lead-dev'] = $this->language->get('lead-dev');
            $data['lead-art'] = $this->language->get('lead-art');
            $data['lead-des'] = $this->language->get('lead-des');
            $data['code']     = $this->language->get('code');
            $data['art']      = $this->language->get('art');

            View::renderTemplate('header', $data);
            View::render('welcome/welcome', $data);
            View::renderTemplate('footer', $data);
        }
    }
}
