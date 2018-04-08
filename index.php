<?php

include 'init.php';

$query = 'SELECT * FROM users';
$result = Service_Db::getInstance()->query($query);
echo '<pre>';
var_dump($result);
echo '</pre>';
exit;

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

include 'view/user/list.php';
$render = new UsersView();
$render->users = $users;
echo ($render->render());

include 'view/user/edit.php';
$render = new UsersEditView();
//$render->users = $users;
echo ($render->render());