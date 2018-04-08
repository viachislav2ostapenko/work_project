<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 08.04.18
 * Time: 12:28
 */
class UserSaveController{
    public  function  process(){
//        $id = $_GET['id'];
//        if(empty($id)){
//            header('Location:/');
//        }
//        include '../config.php';
//        $result = mysqli_query($link,"DELETE FROM `users` WHERE id=$id");
//        if (!$result) {
//            printf("Errormessage: %s\n", mysqli_error($link));
//        }else{
//            header('Location:/');
//        }
        //var_dump($_POST);
        $dataUser = [
           'name' => $_POST['name'],
           'age' => $_POST['age'],
           'email' => $_POST['email'],
        ];
        //var_dump($dataUser);
        $query = "INSERT INTO `users` SET ";
        $set = [];
        foreach ($dataUser as $key=>$value ){
            //$query.=' '.$key.'="'.$value.'"';
            $set[] = sprintf('%s="%s"', $key, $value);
        }
        $query.= implode(',',$set);
        var_dump($query);
        include '../../config.php';
        $result = mysqli_query($link,$query);
        if (!$result) {
            printf("Errormessage: %s\n", mysqli_error($link));
        }else{
            header('Location:/');
        }
    }
}
$controller = new UserSaveController();
$controller->process();