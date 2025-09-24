<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname =  "book_review_24092025";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);


$sql = "SELECT * FROM book_review;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["full_name"]. " - book title: " . $row["book_title"]. " - review text: " . $row["review_text"]. 
     " - rating: " . $row["rating"]. "- subbmited at: " .$row["submitted_at"];
  }
} else {
  echo "0 results";
}


?>