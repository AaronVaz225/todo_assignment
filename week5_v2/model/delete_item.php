<?php
// Check if the form has been submitted with the ItemNum set
if(isset($_POST['ItemNum'])) {
    require("database.php"); // Include database connection

    // Get the ItemNum from the form submission
    $itemNum = $_POST['ItemNum'];

    // Prepare and execute the SQL query to delete the todo item
    $stmt = $db->prepare("DELETE FROM todoitems WHERE ItemNum = ?");
    $stmt->execute([$itemNum]);

    // Redirect back to the index.php page after deletion
    header("Location: ../view/index.php?mess=deleted");
    exit();
} else {
    // Redirect back to the index.php page if ItemNum is not set
    header("Location: ../view/index.php?mess=error");
    exit();
}
