<?php
	session_start();

	if (isset($_POST)) {
        $_SESSION["cart"][key($_POST)]["quantity"] = 0;
    }

	$total = 0;
	foreach ($_SESSION['cart'] as $name => $props) {
		if ($props['quantity'] == 1) {
			$total += $props['price'];
		}
	}
	$_SESSION['total'] = $total;

	function isEmpty($arr) {
		$val = true;
		foreach ($arr as $name => $props) {
			if ($props['quantity'] == 1) {
				$val = false;
			}
		}

		return $val;
	}
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link href="styles.css" rel="stylesheet">
</head>

<body class="text-center">
	<div class="container">
		<header class="jumbotron my-4">
			<h1 class="display-3">Ozzy's Wizard Shop</h1>
			<p class="lead">
				Ollivander's Shop as shown in Harry Potter is the most popular wizard shop. At Ozzy's Wizard shop, we strive to
				achieve what Garick Ollivander has, including customer service and quality wands.
				<hr>
				<blockquote class="lead">
					<p class="mb-0">
						"Only a minority of trees can produce wand quality wood (just as a minority of humans can produce magic). It
						takes years of experience to tell which ones have the gift, although the job is made easier if Bowtruckles are
						found nesting in the leaves, as they never inhabit mundane trees."
					</p>
					<footer class="blockquote-footer">Garrick Ollivander</cite></footer>
				</blockquote>
			</p>
		</header>
		<header class="jumbotron my-4">
			<h1>Your cart:</h1>
			<form action="" method="post">
				<div class="container">
					<div class="card">
						<?php
							if (!isEmpty($_SESSION['cart'])) {
								foreach ($_SESSION['cart'] as $name => $props) {
									if ($props['quantity'] == 1) {
										echo "
											<div class='card-body'>
												<div class='row'>
													<div class='col-12 col-sm-12 col-md-2 text-center'>
														<img src=" . $props['img'] . " alt=" . $name ." width='120' height='80'>
													</div>
													<div class='col-12 text-sm-center col-sm-12 text-md-left col-md-6'>
														<h4 class='product-name'>" . $props['name'] . "</h4>
													</div>
													<div class='col-12 col-sm-12 text-sm-center col-md-4 text-md-right row'>
														<div class='col-3 col-sm-3 col-md-6 text-md-right m-auto'>
															<h6>$" . $props['price'] ."</h6>
														</div>
														<div class='col-2 col-sm-2 col-md-2 text-right m-auto'>
															<form method='post'>
																<button type='submit' name='" . $name . "' class='btn btn-outline-danger btn-xs'>
																	<i class='fas fa-trash'></i>
																</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<br>
										";
									}
								}
							} else {
								echo "
									<div class='card-body'>
										<div class='row'>
											<h1>No items in cart.</h1>
										</div>
									</div>
									<br>
								";
							}
						?>
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-4">
									<form action="./index.php" method="post">
										<button class="btn btn-warning mb-5" type="submit"><i class='fas fa-arrow-left'></i>&nbsp;Go back</button>
								</div>
								<div class="col-12 col-md-4">
									<b>
										Total: $<?php echo $total; ?>
									</b>
								</div>
								<div class="col-12 col-md-4">
									<form>
										<button class="btn btn-success" name="back" type="submit" formaction="">Proceed&nbsp;<i class='fas fa-arrow-right'></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
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
