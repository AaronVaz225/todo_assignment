<?php

//include 'todolist.php';


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $itemNum = $_POST["itemNum"];


    deleteItem($db, $itemNum);


    header("Location: index.html");
    exit();
}
