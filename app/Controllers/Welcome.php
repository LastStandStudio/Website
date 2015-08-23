<?php
namespace Controllers {

    use Core\View;
    use Core\Controller;

    /*
     * Welcome controller
     *
     * @author David Carr - dave@simplemvcframework.com
     * @version 2.2
     * @date June 27, 2014
     * @date updated May 18 2015
     */

    class Welcome extends Controller
    {

        /**
         * Call the parent construct
         */
        public function __construct()
        {
            parent::__construct();
            $this->language->load('Welcome');
        }

        /**
         * Define Index page title and load template files
         */
        public function index()
        {
            $data['title'] = $this->language->get('welcome_text');
            $data['welcome_message'] = $this->language->get('welcome_message');

            $data['page']='home';

            $data['home']     = $this->language->get('home');
            $data['about']    = $this->language->get('about');
            $data['services'] = $this->language->get('services');
            $data['careers']  = $this->language->get('careers');
            $data['blog']     = $this->language->get('blog');

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

            $data['the-team'] = $this->language->get('the-team');

            View::renderTemplate('header', $data);
            View::render('welcome/welcome', $data);
            View::renderTemplate('footer', $data);
        }

        /**
         * Define Subpage page title and load template files
         */
        public function subPage()
        {
            $data['title'] = $this->language->get('subpage_text');
            $data['welcome_message'] = $this->language->get('subpage_message');

            View::renderTemplate('header', $data);
            View::render('welcome/subpage', $data);
            View::renderTemplate('footer', $data);
        }
    }
}
