<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 08.04.18
 * Time: 12:28
 */
class UserDeleteController{
    public  function  process(){
        $id = $_GET['id'];
        if(empty($id)){
            header('Location:/');
        }
        include '../../config.php';
        $result = mysqli_query($link,"DELETE FROM `users` WHERE id=$id");
        if (!$result) {
            printf("Errormessage: %s\n", mysqli_error($link));
        }else{
            header('Location:/');
        }
    }
}
$controller = new UserDeleteController();
$controller->process();