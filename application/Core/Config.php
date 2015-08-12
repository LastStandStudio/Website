<?php
namespace Core {

    use Helpers\Session;

    class Config
    {
        public function __construct()
        {
            //turn on output buffering
            ob_start();

            //site address
            define('wURL', 'http://laststandstudio.com');

            //set default controller and method for legacy calls
            define('DEFAULT_CONTROLLER', 'welcome');
            define('DEFAULT_METHOD', 'index');

            //set the default template
            define('TEMPLATE', 'default');

            //set a default language
            define('LANGUAGE_CODE', 'en');

            //database details ONLY NEEDED IF USING A DATABASE
            define('DB_TYPE', 'mysql');
            define('DB_HOST', 'localhost');
            define('DB_NAME', 'dbname');
            define('DB_USER', 'root');
            define('DB_PASS', 'password');
            define('PREFIX', 'lss_');

            //set prefix for sessions
            define('SESSION_PREFIX', 'lss_');

            //optionall create a constant for the name of the site
            define('SITETITLE', 'LastStandStudio');

            //optionall set a site email address
            //define('SITEEMAIL', '');

            //turn on custom error handling
            set_exception_handler('Core\Logger::ExceptionHandler');
            set_error_handler('Core\Logger::ErrorHandler');

            //set timezone
            date_default_timezone_set('Europe/London');

            //start sessions
            Session::init();
        }
    }
}
