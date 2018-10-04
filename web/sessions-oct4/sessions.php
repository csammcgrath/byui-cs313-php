<?php
    session_start();

    if (!isset($_SESSION['activeSession'])) {
        $_SESSION['count'] = 0;
        $_SESSION['activeSession'] = true;
    }

    $_SESSION['count']++;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Counter</title>
</head>
<body>
    <p>You have visited this page <?php echo $_SESSION['count']; ?> times!</html>
</body>
</html>