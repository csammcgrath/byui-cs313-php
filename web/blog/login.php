<?php
    require('dbConnect.php');
    session_start();
    $db = get_db();

    function loginUser($db) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        try {
            $stmt = $db->prepare("SELECT username, password FROM users 
                                    WHERE username = :usr;");

            $stmt->bindValue(':usr', $user, PDO::PARAM_STR);
            $stmt->execute();
            $dbUser = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($dbUser['username'] == $user && $dbUser['password'] == $pass) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['name'] = $user;

                header('Location: index.php');
                exit;
            } else {
                alert('Login credentials not found!');
            }
        } catch (PDOException $ex) {
            echo $ex;
            die();
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $db = get_db();
        loginUser($db);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog">
    <meta name="author" content="Sam McGrath">
    <link rel="shortcut icon" type="image/png" href="../images/blog/blog.png">

    <title>Simple dev.to clone</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Simple dev.to clone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
      <?php unset($_SESSION['name']); $_SESSION['loggedIn'] = false; ?>
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Login</h2>
        <input class="form-control" name="user" placeholder="Enter username..." required autofocus><br>
        <input type="password" id="inputPassword"  name="pass" class="form-control" placeholder="Enter password..." required><br>
            <div class="row mt-4">
                <div class="text-center">
                    <button class="btn btn-secondary" type="submit">Sign in</button>
                </div>
            </div>
      </form>
      <div class="row">
          <a href="signUp.php" class="text-center" style="text-decoration:underline;">Don't have an account?</a>
      </div>
    </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="./scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
  </body>

</html>
