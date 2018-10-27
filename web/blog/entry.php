<?php
    require('dbConnect.php');
    session_start();
    $db = get_db(); 

    function createPost($db) {
        $userId = htmlspecialchars($_POST['userId']);
        $title = htmlspecialchars($_POST['title']);
        $entry = htmlspecialchars($_POST['entry']);
        
        try {
            $stmt = $db->prepare('INSERT INTO blog_post(userId, title, body) VALUES (:id, :title, :ent)');
            $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':ent', $entry, PDO::PARAM_STR);
            $stmt->execute();

            alert('Blog Post created!');
            header('Location: index.php');
            die();
        } catch(PDOException $ex) {
            die();
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if (isset($_POST['userId']) && isset($_POST['title']) && isset($_POST['entry'])) {
        $db = get_db();
        createPost($db);
    }
?>