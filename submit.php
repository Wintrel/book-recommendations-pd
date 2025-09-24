<?php

$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname =  "book_review_24092025";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);

$fullname = ($_POST = "Fname");
$rating = ($_POST = "rating");
$book_title = ($_POST = "book_title");
$review_text = ($_POST = "review_text");


$sql = "INSERT INTO book_review (full_name, book_title, review_text, rating)
VALUES ('$fullname', '$book_title', '$review_text', '$rating')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>