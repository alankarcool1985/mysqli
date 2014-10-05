<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'soccer');


class DB {

    private $_connection;
    private $_host = DB_HOST;
    private $_username = DB_USER;
    private $_password = DB_PASS;
    private $_dbname = DB_NAME;
    private static $_instance;
    
    private $_numrows;

    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_dbname);
// Error handling
        if (mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
        }
    }
    public function getConnection()
    {
        if(!self::$_instance)
        {
            self::$_instance=new self();
        }
        return self::$_instance;
    }
    
    public function sqlQuery($query=''){
        if($query)
        {
            $queryExe=self::$_instance->query($query);
            $this->_numrows=$queryExe->num_rows;
        }
        else
        {
            trigger_error('Query should not be null');
        }
    }

}
