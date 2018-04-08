<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 08.04.18
 * Time: 11:54
 */

class UsersView
{
    public $template = 'template/user/list.tpl.php';
    public $users = [];
    public function render() {
        ob_start();
        include $this->template;
        return ob_get_clean();
    }
}