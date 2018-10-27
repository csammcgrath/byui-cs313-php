<?php
  require('dbConnect.php');
  session_start();

  $db = get_db();

  $postId = $_GET['id'];
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
        <a class="navbar-brand" href="index.php">Simple dev.to clone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php
              if (isset($_SESSION['name'])) {
                $name = $_SESSION['name'];

                echo "
                  <li class='nav-item'>
                    Welcome $user
                  </li>
                ";
              } else {
                echo "
                  <li class='nav-item'>
                    <a class='nav-link' href='login.php'>Login</a>
                  </li>
                ";
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          <?php
            $stmt = $db->prepare('SELECT bp.id, bp.title, bp.body, u.username FROM blog_post bp
                                    JOIN users u
                                        ON bp.userId = u.id
                                    WHERE bp.id = :id;
            ');

            $stmt->bindValue(':id', $postId, PDO::PARAM_INT);
            $stmt->execute();
            $postObj = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($postObj as $details) {
              $title = $details['title'];
              $author = $details['username'];
              $body = $details['body'];

              echo "

                <h1 class='mt-4'>$title</h1>
                <p class='lead'>
                  by
                  $author
                </p>
                <hr>
                <p>$body</p>
                <hr><br><br>
              ";
            }

            

            $stmt = $db->prepare('SELECT c.comment FROM comment c
                                    JOIN blog_post bp
                                        ON c.blogId = bp.id
                                    WHERE bp.id = :id;
            ');

            $stmt->bindValue(':id', $postId, PDO::PARAM_INT);
            $stmt->execute();
            $commentsArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "<h4>Comments</h4>";
            echo "<ul class='list-unstyled'>";

            foreach ($commentsArray as $comment) {
              $c = $comment['comment'];
              echo "
                <li class='media'>
                  <div class='media-body'>
                    <h6 class='mt-0 mb-1'>Comment</h6>
                    $c
                  </div>
                </li>
              ";
            }

            echo "</ul>";
          ?>

           <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="comment.php" method="POST">
                <div class="form-group">
                  <textarea class="form-control" name='comment' rows="3"></textarea>
                </div>
                <input type="hidden" name="postId" value="<?php echo $postId; ?>">
                <button class="btn-hover float-right" type="submit"><span>Add Comment</span></button>
              </form>
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
