<?php
namespace Controllers
{

  use Core\View;
  use Core\Controller;

  class Template extends Controller
  {

    public function __construct()
    {
        parent::__construct();
        $this->language->load('Template');
    }

    public function template()
    {
        $data['page']='template';

        $data['home']     = $this->language->get('home');
        $data['about']    = $this->language->get('about');
        $data['services'] = $this->language->get('services');
        $data['careers']  = $this->language->get('careers');
        $data['blog']     = $this->language->get('blog');

        View::renderTemplate('header', $data);
        View::render('template/template', $data);
        View::renderTemplate('footer', $data);
    }
  }
}
?>
