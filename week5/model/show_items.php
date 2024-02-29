<?php


//include 'todolist.php';




// Retrieve all items from list
$items = getAllItems($db);

// Display items
if ($items) {
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li><strong>Title:</strong> " . $item["Title"] . " - <strong>Description:</strong> " . $item["Description"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No items found.";
}
