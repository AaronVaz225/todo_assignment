<?php
include("database.php");
// Function to add an item to the todo list
function addItem($db, $title, $description) {
    $stmt = $db->prepare("INSERT INTO todoitems (Title, Description) VALUES (:title, :description)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
}

// Function to delete an item from the todo list
function deleteItem($db, $itemNum) {
    $stmt = $db->prepare("DELETE FROM todoitems WHERE ItemNum = :itemNum");
    $stmt->bindParam(':itemNum', $itemNum);
    $stmt->execute();
}

// Function to retrieve all items from the todo list
function getAllItems($db) {
    
    $stmt = $db->prepare("SELECT * FROM todoitems");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
