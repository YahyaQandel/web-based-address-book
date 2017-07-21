<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(0);
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if($book_id){
$book_id = make_safe($connection,$book_id);
$query1 = 'SELECT * FROM books where id = '.$book_id;
$single_book_result = $connection->query($query1);
$book = $single_book_result->fetch_assoc();
}
?>