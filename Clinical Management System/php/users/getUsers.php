<?php
/**
 * Created by PhpStorm.
 * User: thili
 * Date: 1/10/2019
 * Time: 12:04 PM
 */
require_once "../dbOps/crud.php";
$table = $_GET["table"];
$column = $_GET["column"];
$data = $_GET["value"];
$query = "";

switch ($column) {
    case 'email':
        $query = "SELECT * FROM ".$table." WHERE  $column  = '$data'";
        break;
    default:
        $query = "SELECT * FROM ". $table;
        break;
}

$crud = new Crud();
$dbResponse = $crud -> getData($query);

if($dbResponse) {
    echo json_encode($dbResponse);
}else{
    echo json_encode(false);

}

?>