<?php
    session_start();

    function get_db() {
        $db = NULL;
        $production = false;

        try {
            $dbUrl = getenv('DATABASE_URL');

            $dbopts = parse_url($dbUrl);

            $dbHost = $dbopts["host"];
            $dbPort = $dbopts["port"];
            $dbUser = $dbopts["user"];
            $dbPassword = $dbopts["pass"];
            $dbName = ltrim($dbopts["path"],'/');

            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $ex) {
            if (!$production) {
                echo "Error connecting to DB. Details: $ex";
            }
            
            die();
        }

        return $db;
    }

    function loginUser($db) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        try {
            $stmt = $db->prepare("SELECT username, password FROM users 
                                    WHERE username = $user;");

            $stmt->execute();
            $dbUser = $stmt->fetch(PDO::FETCH_ASSOC);
            echo $user;
            echo $pass;
        
            if ($dbUser['username'] === $user && $dbUser['password'] === $pass) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['user'] = $user;

                header('index.php');
                exit;
            } else {
                alert('Login credentials not found!');
                exit;
            }
        } catch (PDOException $ex) {
            die();
        }
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
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
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Login</h2>
        <input class="form-control" placeholder="Enter username..." required autofocus><br>
        <input type="password" id="inputPassword" class="form-control" placeholder="Enter password..." required><br>
            <div class="row mt-4">
                <div class="float-left ml-4 mr-4">
                    <button class="btn btn-secondary" name="username" type="submit">Don't have an account?</button>
                </div>
                <div class="float-right">
                    <button class="btn btn-secondary" name="password" type="submit">Sign in</button>
                </div>
            </div>
      </form>
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
