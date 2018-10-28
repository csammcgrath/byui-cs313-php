<?php
    require('dbConnect.php');
    session_start();
    $db = get_db(); 

    function createPost($db) {
        $pId = htmlspecialchars($_POST['postId']);
        $cmt = htmlspecialchars($_POST['comment']);

        echo ". id: $postId - comment: $comment";
        
        try {
            echo " =-= about to insert =-= ";
            $stmt = $db->prepare('INSERT INTO comment (blogId, comment) VALUES (:id, :cmt)');
            $stmt->bindValue(':id', $pId, PDO::PARAM_INT);
            $stmt->bindValue(':cmt', $cmt, PDO::PARAM_STR);
            $stmt->execute();

            echo " =-= inserted =-= ";

            $page = "post.php?id=$pId";
            echo $page;

            header("Location: $page");
            die();
        } catch(PDOException $ex) {
            die();
        }
    }

    echo "hit here";

    if (isset($_POST['comment']) && isset($_POST['postId'])) {
        $db = get_db();
        createPost($db);
    } else {
        header('Location: index.php');
        die();
    }
?>