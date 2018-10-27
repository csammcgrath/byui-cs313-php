<?php
    require('dbConnect.php');
    session_start();
    $db = get_db();
    $usr = $_SESSION['name'];

    $stmt = $db->prepare("SELECT bp.id, bp.title, bp.body, u.username FROM blog_post bp
                            JOIN users u
                                ON bp.userId = u.id
                            WHERE u.username = $usr;");
    $stmt->execute();
    $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                    <?php
                        $name = $_SESSION['name'];
                        echo "
                            <li class='nav-item active'>
                                <a class='nav-link'>Welcome $name</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='login.php'><?php session_unset(); ?>Sign Out</a>
                            </li>
                        ";
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="my-4">Your previous blog posts!</h1>
          <hr style="width:80%;margin-left:0px;"/>
          <?php
            if (count($blogs) === 0) {
              echo "<h5>No associated blog entries found!</h5>";
            } else {
              foreach($blogs as $blog) {
                $id = $blog['id'];
                $title = $blog['title'];
                $body = substr($blog['body'], 0, 250);

                if ($body != $blog['body']) {
                  $body .= '...';
                }

                echo "
                  <div class='card mb-4 shadow-lg'>
                    <div class='card-body'>
                      <h2 class='card-title'>$title</h2>
                      <p class='card-text'>$body</p>
                      <a class='btn-hover float-right pt-2' style='text-decoration:none;color:white;'href='post.php?id=$id'><span>Read</span></a>
                    </div>
                  </div>
                ";
              }
            }
          ?>
        </div>
      </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white mb-4">Create a Blog Post.</h2>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Post an entry!</h3>
                            </div>
                            <div class="card-body">
                                <form action="entry.php" method="POST">
                                    <div class="form-group">
                                        <label for="user">Title</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="title" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>Blog Entry</label>
                                        <textarea class="form-control form-control-lg rounded-0" name="entry" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-lg float-right">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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