<?php

require("../model/database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Todo List</h1>

    <h2>Add Item</h2>
    <form action="../model/add_item.php" method="POST" autocomplete="off">
        <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){?>
            <label for="Title">Title:</label><br>
            <input type="text" id="Title" name="Title" placeholder="Required" style="border-color: #ff6666"><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br>
            <input type="submit" value="Add Item" >

        <?php }else{?>

            <label for="Title">Title:</label><br>
            <input type="text" id="Title" name="Title" ><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br>
            <input type="submit" value="Add Item" >
        <?php }?>
    </form>

    <div class="show-todo"> 
        <?php $todos = $db->query("SELECT * FROM todoitems ORDER BY ItemNum DESC"); ?>
        <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="todo-item">
                <form action="../model/delete_item.php" method="POST">
                    <input type="hidden" name="ItemNum" value="<?php echo $todo['ItemNum']; ?>">
                    <button type="submit" class="delete-btn">x</button>
                </form>
                
                    
                
                    <h2><?php echo $todo['Title'];?></h2>
                <h4><?php echo $todo['Description'];?></h4>
            </div>
        <?php }?>
    </div>
</body>
</html>
