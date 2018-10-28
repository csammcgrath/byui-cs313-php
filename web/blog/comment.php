<?php
    require('dbConnect.php');
    session_start();
    $db = get_db(); 

    function createPost($db) {
        $userId = htmlspecialchars($_POST['postId']);
        $comment = htmlspecialchars($_POST['comment']);
        
        try {
            $stmt = $db->prepare('INSERT INTO comment (blogId, comment) VALUES (:id, :cmt');
            $stmt->bindValue(':id', $postId, PDO::PARAM_INT);
            $stmt->bindValue(':cmt', $comment, PDO::PARAM_STR);
            $stmt->execute();

            $page = "post.php?id=$postId";
            echo $page;

            header("Location: $page");
            die();
        } catch(PDOException $ex) {
            die();
        }
    }

    if (isset($_POST['comment']) && isset($_POST['postId'])) {
        $db = get_db();
        createPost($db);
    } else {
        header('Location: index.php');
        die();
    }
?>