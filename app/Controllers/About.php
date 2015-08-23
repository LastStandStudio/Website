<?php
namespace Controllers
{

  use Core\View;
  use Core\Controller;

  class About extends Controller
  {
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('About');
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        //define language vars here


        View::renderTemplate('header', $data);
        View::render('welcome/welcome', $data);
        View::renderTemplate('footer', $data);
    }
  }
}
?>
