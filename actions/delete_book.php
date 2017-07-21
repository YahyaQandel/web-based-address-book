<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(0);
include '../config.php';
include '../util.php';
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$book_id = $_POST['book_id'];
$book_id = make_safe($connection,$book_id);
$query1 = 'delete  FROM books where id = '.$book_id;
echo $query1;
$delete_result = $connection->query($query1);
?>