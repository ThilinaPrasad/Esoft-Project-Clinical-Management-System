<?php

require_once("../../php/dbOps/crud.php");

$doctor_id = $_POST['doctor_id'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$end_date = $_POST['end_date'];
$end_time = $_POST['end_time'];

$crud = new Crud();

$query = "INSERT INTO doctor_schedules(doctor_id, start_date, start_time,end_date,end_time) VALUES ('$doctor_id','$start_date','$start_time','$end_date','$end_time')";

if($crud->execute($query)){
    echo true;
}else{
    echo false;
}

?>