<?php

require_once('db_credentials.php');
require_once('database.php');
include "headerEm.php" ;
$db = db_connect();

  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $author = $_POST['author'] ;
 $category = $_POST['category'] ;
 $content = $_POST['content'];

  $sql = "INSERT INTO shortblogs (author, category, content) VALUES ('$author','$category','$content')";
$result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    
  
  $id = mysqli_insert_id($db);
  //redirect to show page
  header("Location: show.php?id=  $id");
  

} else {
    header("Location:  new.php");
}

?>