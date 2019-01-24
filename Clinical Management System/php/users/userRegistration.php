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
$gender = $_POST['gender'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$role = $_POST['role'];
$password = sha1($_POST['address']);
$status = 1;

if($role=='2'){
    $status = 0;
}

$query = "INSERT INTO  users (name,age,gender,email,telephone,address,password,role,status) VALUES ('$name','$age','$gender','$email','$telephone','$address','$password','$role','$status ')";
$dbResponse = $crud->execute($query);

if($dbResponse){
    echo true;
}else{
    echo false;
}


?>