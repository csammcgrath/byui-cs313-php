<?php
    require('dbConnect.php');
    session_start();
    $db = get_db(); 

    function createPost($db) {
        $userId = htmlspecialchars($_POST['userId']);
        $title = htmlspecialchars($_POST['title']);
        $entry = htmlspecialchars($_POST['entry']);
        $startVisit = 0;

        try {
            $stmt = $db->prepare('INSERT INTO blog_post(userId, title, body, visits) VALUES (:id, :title, :ent, :visits)');
            $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':ent', $entry, PDO::PARAM_STR);
            $stmt->bindValue(':visits', $startVisit, PDO::PARAM_INT);
            $stmt->execute();

            header('Location: index.php');
            die();
        } catch(PDOException $ex) {
            die();
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    echo $_POST['userId'];
    echo $_POST['title'];
    echo $_POST['entry'];
    if (isset($_POST['userId']) && isset($_POST['title']) && isset($_POST['entry'])) {
        $db = get_db();
        createPost($db);
    } else if (sset($_POST['userId']) && !isset($_POST['title']) || !isset($_POST['entry'])) {
        alert('Please fill all fields.');

        header('Location: createEntry.php');
        die();
    } else {
        header('Location: index.php');
        die();
    }
?>