<?php
if (!isset($_POST["name"]) || !isset($_POST["id"])) {
    exit("No data provided");
}
include_once "functions.php";
$id = $_POST["id"];
$name = $_POST["name"];
saveEmployee($id, $name);
header("Location: employees.php");