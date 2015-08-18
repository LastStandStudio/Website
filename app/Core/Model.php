<?php
namespace Core {

    use Helpers\Database;

    abstract class Model
    {
        /**
         * hold the database connection
         * @var object
         */
        protected $db;

        /**
         * create a new instance of the database helper
         */
        public function __construct()
        {
            //connect to PDO here.
            $this->db = Database::get();

        }
    }
}
