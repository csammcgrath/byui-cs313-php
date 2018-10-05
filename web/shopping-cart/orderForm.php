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
			<h1>Enter shipping information: </h1>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="well well-sm">
							<form class="form-horizontal" method="post">
								<fieldset>
									<legend class="text-center header">Contact us</legend>

									<div class="form-group">
										<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
										<div class="col-md-8">
											<input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
										<div class="col-md-8">
											<input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
										<div class="col-md-8">
											<input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
										<div class="col-md-8">
											<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
										<div class="col-md-8">
											<textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days."
											 rows="7"></textarea>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12 text-center">
											<button type="submit" class="btn btn-primary btn-lg">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			Associated CSS:

			.header {
			color: #36A0FF;
			font-size: 27px;
			padding: 10px;
			}

			.bigicon {
			font-size: 35px;
			color: #36A0FF;
			}
			→ Source: PreBootstrap

			Address form

			Here is a pretty complete form, featuring basically everything you need to collect a postal address from a (US)
			customer. Use it as it is or customize it as needed!

			<form>
				<div class="form-group">
					<label for="full_name_id" class="control-label">Full Name</label>
					<input type="text" class="form-control" name="full_name" placeholder="John Deer">
				</div>

				<div class="form-group">
					<label for="street1_id" class="control-label">Street Address 1</label>
					<input type="text" class="form-control" name="street1" placeholder="Street address, P.O. box, company name, c/o">
				</div>

				<div class="form-group">
					<label for="street2_id" class="control-label">Street Address 2</label>
					<input type="text" class="form-control" name="street2" placeholder="Apartment, suite, unit, building, floor, etc.">
				</div>

				<div class="form-group">
					<label for="city_id" class="control-label">City</label>
					<input type="text" class="form-control" name="city" placeholder="Salt Lake City">
				</div>

				<div class="form-group">
					<label class="control-label">State</label>
					<select class="form-control">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
				<div class="form-group">
					<label for="zip_id" class="control-label">Zip Code</label>
					<input type="text" class="form-control" name="zip" placeholder="#####">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<button class="btn btn-warning mb-5" type="submit" formaction="./index.php"><i class='fas fa-arrow-left'></i>&nbsp;Go back</button>
						</div>
						<div class="col-12 col-md-6">
							<button type="submit" class="btn btn-primary">Purchase&nbsp;<i class='fas fa-shopping-cart'></i></button>
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
