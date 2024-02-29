<?php

//include 'todolist.php';


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $title = $_POST["title"];
    $description = $_POST["description"];


    addItem($db, $title, $description);


    header("Location: index.html");
    exit();
}
