<?php

require('model/database.php');
require('model/todolist.php');
require('model/delete_item.php');
require('model/show_items.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
    <h1>Todo List</h1>

    <h2>Add Item</h2>
    <form action="model/add_item.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="submit" value="Add Item">
    </form>

    <h2>Delete Item</h2>
    <form action="model/delete_item.php" method="post">
        <label for="itemNum">Item Number:</label><br>
        <input type="text" id="itemNum" name="itemNum"><br>
        <input type="submit" value="Delete Item">
    </form>

    <h2>Todo List</h2>
    <?php include 'model/show_items.php'; ?>
</body>
</html>