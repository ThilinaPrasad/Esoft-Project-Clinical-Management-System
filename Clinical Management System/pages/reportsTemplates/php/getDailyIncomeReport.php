<?php
require_once("../../../php/dbOps/crud.php");
require_once("../../../php/users/userTypes.php");

$s_date = $_GET['start'];
$e_date = $_GET['end'];

$crud = new Crud();
$query = "SELECT DATE(createdDate) AS date,SUM(value) AS income FROM payments GROUP BY DATE(payments.createdDate)";
if(strlen(trim($s_date))!=0 && strlen(trim($e_date))!=0) {
    $query = "SELECT DATE(createdDate) AS date,SUM(value) AS income FROM payments WHERE DATE(createdDate) BETWEEN '$s_date' AND '$e_date' GROUP BY DATE(payments.createdDate)";
}
$paymentResponse = $crud->getData($query);
if($paymentResponse){
    echo json_encode($paymentResponse);
}else{
    echo false;
}
?>