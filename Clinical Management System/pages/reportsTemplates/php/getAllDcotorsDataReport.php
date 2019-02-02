<?php
require_once("../../../php/dbOps/crud.php");
require_once("../../../php/users/userTypes.php");
$crud = new Crud();
$query = "SELECT * FROM user NATURAL RIGHT OUTER JOIN doctor";
$response = $crud -> getData($query);
if($response){
    echo json_encode($response);
}else{
    echo false;
}
?>