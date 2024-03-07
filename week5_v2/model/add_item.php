<?php

if(isset($_POST['Title'])){
    require("../model/database.php");

    $title = $_POST['Title'];
    $desc = $_POST['description'];

    if(empty($title)){
        header("Location: ../view/index.php?mess=error");
    }else{
        $stmt = $db->prepare("INSERT INTO todoitems(Title, description) VALUES(?, ?)");
        $res = $stmt->execute([$title, $desc]);


        if($res){
            header("Location: ../view/index.php?mess=success");
        }else{
            header("Location: ../view/index.php");
        }
        $db = null;
        exit();
    }
}else{
    header("Location: ../view/index.php?mess=error");
}

