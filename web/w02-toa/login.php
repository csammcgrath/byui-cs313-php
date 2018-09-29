<?php
    session_start();

    $_SESSION['type'] = 'none';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teach One Another">
    <meta name="author" content="CS 313">

    <title>CS 313 Teach One Another 02</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <?php include 'header.php' ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container pt-4">
            <h1 class="display-4">Ice Cream Corp.</h1>
            <p class="lead">
                <button type="button" class="btn btn-success" id="admin"">Log in as Administrator</button>
                <button type="button" class="btn btn-success" id="tester"">Log in as Tester</button>
                <?php
                    echo $_SESSION['type'];
                ?>
            </p>
        </div>
    </div>

    <?php include 'footer.php' ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>
    $("admin").click(() => {
        $.get("session_admin.php", (data, status) => {

        });
    });
    $("test").click(() => {
        $.get("session_tester.php", (data, status) => {

        });
    });
    </script>
</body>

</html>