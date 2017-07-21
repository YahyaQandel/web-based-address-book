<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(0);
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$query1 = 'SELECT * FROM books';
$books_array = $connection->query($query1);
?>