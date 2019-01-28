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

if ($column!='') {
    $query = "SELECT * FROM user NATURAL RIGHT OUTER JOIN " . $table . " WHERE  $column  = '$data'";
}
 else{
        $query = "SELECT * FROM user NATURAL RIGHT OUTER JOIN " . $table;
    }

$crud = new Crud();
$dbResponse = $crud -> getData($query);

if($dbResponse) {
    echo json_encode($dbResponse);
}else{
    echo json_encode(false);

}

?>