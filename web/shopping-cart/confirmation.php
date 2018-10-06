<?php
	session_start();

    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/outlined-medieval-icons-pack/200/magic_staff-512.png">
    <title>Ozzy's Wizard Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container">
        <header class="jumbotron my-4">
            <h1 class="display-3">Ozzy's Wizard Shop</h1>
            <p class="lead">
                Ollivander's Shop as shown in Harry Potter is the most popular wizard shop. At Ozzy's Wizard shop, we
                strive to
                achieve what Garick Ollivander has, including customer service and quality wands.
                <hr>
                <blockquote class="lead">
                    <p class="mb-0">
                        "Only a minority of trees can produce wand quality wood (just as a minority of humans can
                        produce magic). It
                        takes years of experience to tell which ones have the gift, although the job is made easier if
                        Bowtruckles are
                        found nesting in the leaves, as they never inhabit mundane trees."
                    </p>
                    <footer class="blockquote-footer">Garrick Ollivander</cite></footer>
                </blockquote>
            </p>
        </header>
        <header class="jumbotron my-4">
            <h1>Order has been placed!</h1>
            <h3>Thank you for purchasing from Ozzy's Wizard Shop, the creator of some of the finest wands in the world. </h3>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h5>Items Purchasing:</h5>
                        <hr>
                        <?php
							foreach ($_SESSION['cart'] as $name => $props) {
								if ($props['quantity'] == 1) {
									echo "
										<div class='card-body'>
											<div class='row'>
												<div class='col-12 col-sm-12 col-md-2 text-center'>
													<img src=" . $props['img'] . " alt=" . $name ." width='120' height='80'>
												</div>
												<div class='col-12 text-sm-center col-sm-12 text-md-center col-md-6'>
													<h4 class='product-name'>" . $props['name'] . "</h4>
												</div>
												<div class='col-12 col-sm-12 text-sm-center col-md-4 text-md-center row'>
													<div class='col-3 col-sm-3 col-md-6 text-md-center m-auto'>
														<h6>$" . $props['price'] ."</h6>
													</div>
												</div>
											</div>
										</div>
										<br>
									";
								}
							}
						?>
                        <hr>
                        <div class="container">
                            <div class="row float-right mr-5">
                                Total: $
                                <?php echo $_SESSION['total']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 m-auto">
                       <h5>Customer's information:</h6>
                       <p><b>Name: </b><?php echo $name; ?></p>
                       <p><b>Street Address: </b><?php echo $address; ?></p>
                       <p><b>City, State, Zip: </b><?php echo $name; echo $state; echo $zip; ?></p>
                    </div>
                </div>
            </div>
    </div>
    </header>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>