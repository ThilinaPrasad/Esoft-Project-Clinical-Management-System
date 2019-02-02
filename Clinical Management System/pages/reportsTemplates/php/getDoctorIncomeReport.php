<?php
require_once("../../../php/dbOps/crud.php");
require_once("../../../php/users/userTypes.php");
$crud = new Crud();
$query = "SELECT user.fname,user.sname,SUM(doc_app_pay.value) AS doc_income FROM doc_app_pay LEFT OUTER JOIN user ON doc_app_pay.doctor_id=user.id GROUP BY doc_app_pay.doctor_id";
$paymentResponse = $crud -> getData($query);
if($paymentResponse){
    echo json_encode($paymentResponse);
}else{
    echo false;
}
?>