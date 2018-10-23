<?php
    try
    {
        $dburl = getenv('DATABASE_URL');
        $dbOpts = parse_url($dburl);
        $dbHost = $dbOpts['host'];
        $dbPort = $dbOpts['port'];
        $dbUser = $dbOpts['user'];
        $dbPwd = $dbOpts['pass'];
        $dbName = ltrim($dbOpts['path'], '/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPwd);

        $t = $db->query('SELECT name FROM topics;');
        $t->execute();
        $topics = $t->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $ex)
    {
        echo 'ERROR!: ' . $ex->getMessage();
        die();
    }

    if (isset($_POST)) {
        $bk = $_POST['book'];
        $ch = $_POST['chapter'];
        $verse = $_POST['verse'];
        $cont = $_POST['content'];

        $tops = $_POST['topics'];


        $query = 'INSERT INTO scriptures (book, chapter, verse, content) VALUES
        (:book, :chapter, :verse, :content)';

        $stmt = $db->prepare($query);
        $stmt->bindValue(':book', $bk, PDO::PARAM_STR);
        $stmt->bindValue(':chapter', $ch, PDO::PARAM_INT);
        $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
        $stmt->bindValue(':content', $cont, PDO::PARAM_STR);
        $stmt->execute();

        

        foreach ($tops as $top) {
            $topicQuery = 'INSERT INTO scriptures_topics (scriptureId, topicsId) VALUES
                            (:scriptureId, :topicsId)';

            $stmt = $db->prepare($query);
            $lastScriptureId = $db->lastInsertId();
            $stmt->bindValue(':scriptureId', $lastScriptureId, PDO::PARAM_INT);
            $stmt->bindValue(':topicsId', $top, PDO::PARAM_INT);
            $stmt->execute();
        }

        
    }
?>

<html>
<head>
    <title>Insert Data</title>
</head>
<body>
    <form action="" method="POST">
        Book: <input name="book" placeholder="Book..." /><br>
        Chapter: <input name="book" placeholder="Chapter..." /><br>
        Verse: <input name="book" placeholder="Verse..." /><br>
        Content: <textarea rows="4" cols="50"></textarea><br>

        <?php
            foreach($topics as $topic => $i) {
                $top = $topic['name'];
                echo "
                    <input type='checkbox' name='topics[]' value='$i'> $top<br>
                ";
            }
        ?>

        <button name="insert" type="submit">Insert</button>
    </form>
</body>
</html>