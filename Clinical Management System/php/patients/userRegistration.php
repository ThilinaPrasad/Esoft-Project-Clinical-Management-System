<?php
/**
 * Created by PhpStorm.
 * User: thili
 * Date: 1/10/2019
 * Time: 11:29 AM
 */

require_once "../dbOps/crud.php";

$crud = new Crud();

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$password = sha1($_POST['address']);

$query = "INSERT INTO  patient (name,age,email,telephone,address,password) VALUES ('$name','$age','$email','$telephone','$address','$password')";
$dbResponse = $crud->execute($query);

if($dbResponse){
    echo true;
}else{
    echo false;
}


?>