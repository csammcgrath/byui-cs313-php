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

        $topics = $db->query('SELECT name FROM topics;');
    }
    catch(PDOException $ex)
    {
        echo 'ERROR!: ' . $ex->getMessage();
        die();
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
            foreach($topics as $topic) {
                echo "
                    <input type='checkbox' name='$topic'> $topic<br>
                ";
            }
        ?>

        <button type="submit">Insert</button>
    </form>
</body>
</html>