<?php
class  Service_Config{

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


    //logic
    public $config;
    public  function init (){
        $this->config = [];
    }

}