<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(0);

include "../config.php";
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$ssql = "SET CHARACTER SET utf8";
$result = $connection->query($ssql);

$book_name = strip_tags($_POST['book_name']);
$book_author_name = strip_tags($_POST['book_author_name']);
$book_price = strip_tags($_POST['book_price']);
$book_desc = strip_tags($_POST['book_desc']);

$query1 = 'INSERT INTO books(book_name,book_author_name,book_price,book_desc)
               VALUES("' . $book_name . '","' . $book_author_name . '","' . $book_price . '","'. $book_desc . '")';

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$result = $connection->query($query1);
$book_id = mysqli_insert_id($connection);
$target_dir = "images/books/";
if ($IMG_EXT == "jpg") 
	{$target_file = $target_dir . $book_id . ".jpg";} 
else if ($IMG_EXT == "png") 
	{$target_file = $target_dir . $book_id . ".png";} 
else if ($IMG_EXT == "jpeg") 
	{$target_file = $target_dir . $book_id . ".jpeg";}

$upload_flag = move_uploaded_file($_FILES["book_cover"]["tmp_name"], $target_file);
if (true) {
	if ($ext == "jpg") 
		{$book_cover = $book_id . '.jpg';} 
	else if ($ext == "png") 
		{$book_cover = $book_id . '.png';} 
	else if ($ext == "jpeg") 
		{$book_cover = $book_id . '.jpeg';}

	$sqlupdate = "UPDATE books SET book_cover='$target_file' WHERE id='$book_id'";
	mysqli_query($connection, $sqlupdate);
	header('Location: ../index.php');
}
?>