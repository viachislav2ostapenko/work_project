<?php
class  Service_Db{
    private static $instance = null;
    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {
        $this->init();
    }

    //Logic
    public $link;
    public  function init (){
        $serviceConfig = Service_Config::getInstance()->config;
        $this->link = mysqli_connect($serviceConfig['host'],$serviceConfig['user'],$serviceConfig['password'],$serviceConfig['db_name']) or die(mysqli_error($this->link));
    }

    public  function query($query){
        $result = mysqli_query($this->link, $query);
    }
}