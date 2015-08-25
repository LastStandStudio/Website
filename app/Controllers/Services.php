<?php
namespace Controllers
{

  use Core\View;
  use Core\Controller;

  class Services extends Controller
  {

    public function __construct()
    {
        parent::__construct();
        $this->language->load('Services');
    }

    public function services()
    {
        $data['page']='services';

        $data['home']     = $this->language->get('home');
        $data['forum'] = $this->language->get('forum');
        $data['about']    = $this->language->get('about');
        $data['services'] = $this->language->get('services');
        $data['careers']  = $this->language->get('careers');
        $data['blog']     = $this->language->get('blog');

        $data['email'] = $this->language->get('email');
        $data['msg']   = $this->language->get('msg');

        View::renderTemplate('header', $data);
        View::render('services/services', $data);
        View::renderTemplate('footer', $data);
    }
  }
}
?>
