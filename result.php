<?php
$servername = "Finaldb.c7xrxh1irlzf.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "goldowl77";
$dbname = "FinalDBName";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT title, genre, director, release_year FROM movies;";
$result = $conn->query($sql);
if($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()){
  $title=$row['title'];
  $genre=$row['genre'];
  $release=$row['release_year'];
  $director=$row['director'];
  echo "Title: $title, Genre: $genre, Released in: $release, Directed by: $director <br>";
 }
}
?>
