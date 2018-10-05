<?php
    session_start();

    $cart = array(
        'harryPotter' => array('price' => 685, 'quantity' => 0, 'img' => '../images/wands/harrypotter.jpg', 'name' => 'Harry Potter\'s Wand'),
        'hermioneGranger' => array('price' => 145, 'quantity' => 0, 'img' => '../images/wands/hermione.jpg', 'name' => 'Hermione Granger\'s Wand'),
        'viktorKrum' => array('price' => 95, 'quantity' => 0, 'img' => '../images/wands/viktorkrum.jpg', 'name' => 'Viktor Krum\'s Wand'),
        'dracoMalfoy' => array('price' => 125, 'quantity' => 0, 'img' => '../images/wands/dracomalfoy.jpg', 'name' => 'Draco Malfoy\'s Wand'),
        'ronWeasley1' => array('price' => 45, 'quantity' => 0, 'img' => '../images/wands/ronFirst.jpg', 'name' => 'Ron\'s First Wand'),
        'ronWeasley2' => array('price' => 55, 'quantity' => 0, 'img' => '../images/wands/ronSecond.jpg', 'name' => 'Ron\'s Second Wand'),
        'horaceSlughorn' => array('price' => 105, 'quantity' => 0, 'img' => '../images/wands/horaceslughorn.jpg', 'name' => 'Horace Slughorn\'s Wand'),
        'elderWand' => array('price' => 535, 'quantity' => 0, 'img' => '../images/wands/elderwand.jpg', 'name' => 'The Elder Wand'),
        'nevilleLongbottom' => array('price' => 85, 'quantity' => 0, 'img' => '../images/wands/nevillelongbottom.jpg', 'name' => 'Neville Longbottom\'s Wand'),
        'remusLupin' => array('price' => 389, 'quantity' => 0, 'img' => '../images/wands/remus.jpg', 'name' => 'Remus Lupin\'s Wand'),
        'fleurDelacour' => array('price' => 273, 'quantity' => 0, 'img' => '../images/wands/fleur.jpg', 'name' => 'Fleur Delacour\'s Wand'),
        'cedricDiggory' => array('price' => 199, 'quantity' => 0, 'img' => '../images/wands/cedric.jpg', 'name' => 'Cedric Diggory\'s Wand'),
        'voldemort' => array('price' => 666, 'quantity' => 0, 'img' => '../images/wands/voldemort.jpg', 'name' => 'Voldemort\'s Wand'),
        'bellatrixLestrange' => array('price' => 485, 'quantity' => 0, 'img' => '../images/wands/bellatrix.jpg', 'name' => 'Bellatrix Lestrange\'s Wand'),
        'jamesPotter' => array('price' => 684, 'quantity' => 0, 'img' => '../images/wands/jamespotter.jpg', 'name' => 'James Potter\'s Wand'),
        'ginnyWeasley' => array('price' => 75, 'quantity' => 0, 'img' => '../images/wands/ginny.jpg', 'name' => 'Ginny Weasley\'s Wand')
    );

    if (!isset($_SESSION["activeSession"])) {
        $_SESSION["activeSession"] = true;
        $_SESSION["cart"] = $cart;
    } 

    if (isset($_POST)) {
        $_SESSION["cart"][key($_POST)]["quantity"]++;
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

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container">
        <header class="jumbotron my-4">
            <h1 class="display-3">Ozzy's Wizard Shop</h1>
            <p class="lead">
                Ollivander's Shop as shown in Harry Potter is the most popular wizard shop. At Ozzy's Wizard shop, we strive to achieve what Garick Ollivander has, including customer service and quality wands.
                <hr>
                <blockquote class="lead">
                    <p class="mb-0">
                        "Only a minority of trees can produce wand quality wood (just as a minority of humans can produce magic). It takes years of experience to tell which ones have the gift, although the job is made easier if Bowtruckles are found nesting in the leaves, as they never inhabit mundane trees."
                    </p>
                    
                    <footer class="blockquote-footer">Garrick Ollivander</cite></footer>
                </blockquote>
            </p>
        </header>
        <header class="jumbotron my-4">
            <h1>Wand Selection</h1>
            <form action="checkout.php" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary float-right m-3" value="Checkout"></input>
                    </div>
                </div>
            </form>

            <form action="" method="post">
                <div class="card-deck">
                    <div class="card mb-4">
                            <img src="../images/wands/harrypotter.jpg" alt="Harry Potter">
                            <div class="card-body d-flex flex-column" id="harryPotter">
                            <h5 class="card-title">Harry Potter's Wand</h5>
                            <p class="card-text">
                                11" holly, phoenix feather (nice and supple)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["harryPotter"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='harryPotter' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["harryPotter"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/hermione.jpg" alt="Hermione Granger">
                        <div class="card-body d-flex flex-column" id="hermioneGranger">
                            <h5 class="card-title">Hermione Granger's Wand</h5>
                            <p class="card-text">
                                10 3/4" vine, dragon heartstring
                            </p>
                            <?php
                                if ($_SESSION["cart"]["hermioneGranger"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='hermioneGranger' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["hermioneGranger"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/viktorkrum.jpg" alt="Viktor Krum">
                        <div class="card-body d-flex flex-column" id="viktorKrum">
                        <h5 class="card-title">Viktor Krum's Wand</h5>
                            <p class="card-text">
                                10 1/4" hornbeam, dragon heartstring (rigid)
                            </p
                            <?php
                                if ($_SESSION["cart"]["viktorKrum"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='viktorKrum' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["viktorKrum"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/dracomalfoy.jpg" alt="Draco Malfoy">
                        <div class="card-body d-flex flex-column" id="dracoMalfoy">
                            <h5 class="card-title">Draco Malfoy's Wand</h5>
                            <p class="card-text">
                                10" hawthorn, unicorn hair (reasonably springy)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["dracoMalfoy"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='dracoMalfoy' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["dracoMalfoy"]["price"]; ?>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                        <div class="card mb-4">
                            <img src="../images/wands/ronFirst.jpg" alt="Ron Weasley's First Wand">
                            <div class="card-body d-flex flex-column" id="ronWeasley1">
                                <h5 class="card-title">Ron Weasley's First Wand</h5>
                                <p class="card-text">
                                    12" ash, unicorn hair
                                </p>
                            <?php
                                if ($_SESSION["cart"]["ronWeasley1"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='ronWeasley1' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                            </div>
                            <div class="card-footer text-muted">
                                $<?php echo $_SESSION["cart"]["ronWeasley1"]["price"]; ?>
                            </div>
                        </div>
                    <div class="card mb-4">
                        <img src="../images/wands/ronSecond.jpg" alt="Ron Weasley's Second Wand">
                        <div class="card-body d-flex flex-column" id="ronWeasley2">
                            <h5 class="card-title">Ron Weasley's Second Wand</h5>
                            <p class="card-text">
                                14" willow, unicorn hair
                            </p>
                            <?php
                                if ($_SESSION["cart"]["ronWeasley2"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='ronWeasley2' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["ronWeasley2"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/horaceslughorn.jpg" alt="Horace Slughorn">
                        <div class="card-body d-flex flex-column" id="horaceSlughorn">
                        <h5 class="card-title">Horace Slughorn's Wand</h5>
                            <p class="card-text">
                                10 1/4" cedar, dragon heartstring (fairly flexible)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["horaceSlughorn"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='horaceSlughorn' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["horaceSlughorn"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/elderwand.jpg" alt="The Elder Wand">
                        <div class="card-body d-flex flex-column" id="elderWand">
                            <h5 class="card-title">The Elder Wand</h5>
                            <p class="card-text">
                                15" elder, Thestral hair
                            </p>
                            <?php
                                if ($_SESSION["cart"]["elderWand"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='elderWand' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["elderWand"]["price"]; ?>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                        <div class="card mb-4">
                            <img src="../images/wands/nevillelongbottom.jpg" alt="Neville Longbottom">
                            <div class="card-body d-flex flex-column" id="nevilleLongbottom">
                            <h5 class="card-title">Neville Longbottom's Wand</h5>
                            <p class="card-text">
                                13" cherry, unicorn hair
                            </p>
                            <?php
                                if ($_SESSION["cart"]["nevilleLongbottom"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='nevilleLongbottom' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["nevilleLongbottom"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/remus.jpg" alt="Remus Lupin">
                        <div class="card-body d-flex flex-column" id="remusLupin">
                            <h5 class="card-title">Remus Lupin's Wand</h5>
                            <p class="card-text">
                                10 1/4" cypress, unicorn hair, pliable
                            </p>
                            <?php
                                if ($_SESSION["cart"]["remusLupin"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='remusLupin' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["remusLupin"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/fleur.jpg" alt="Fleur Delacour">
                        <div class="card-body d-flex flex-column" id="fleurDelacour">
                        <h5 class="card-title">Fleur Delacour's Wand</h5>
                            <p class="card-text">
                                9 1/2" rosewood, Veela hair (inflexible)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["fleurDelacour"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='fleurDelacour' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["fleurDelacour"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/cedric.jpg" alt="Cedric Diggory">
                        <div class="card-body d-flex flex-column" id="cedricDiggory">
                            <h5 class="card-title">Cedric Diggory's Wand</h5>
                            <p class="card-text">
                                12 1/4" ash, unicorn hair (pleasantly springy)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["cedricDiggory"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='cedricDiggory' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["cedricDiggory"]["price"]; ?>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                        <div class="card mb-4">
                            <img src="../images/wands/voldemort.jpg" alt="Lord Voldemort">
                            <div class="card-body d-flex flex-column" id="voldemort">
                            <h5 class="card-title">Lord Voldemort's Wand</h5>
                            <p class="card-text">
                                13 1/2" yew, phoenix feather
                            </p>
                            <?php
                                if ($_SESSION["cart"]["voldemort"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='voldemort' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["voldemort"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/bellatrix.jpg" alt="Bellatrix Lestrange">
                        <div class="card-body d-flex flex-column" id="bellatrixLestrange">
                            <h5 class="card-title">Bellatrix Lestrange's Wand</h5>
                            <p class="card-text">
                                12 3/4" walnut, dragon heartstring (unyielding)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["bellatrixLestrange"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='bellatrixLestrange' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["bellatrixLestrange"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/jamespotter.jpg" alt="James Potter">
                        <div class="card-body d-flex flex-column" id="jamesPotter">
                        <h5 class="card-title">James Potter's Wand</h5>
                            <p class="card-text">
                                11" mahogany (pliable)
                            </p>
                            <?php
                                if ($_SESSION["cart"]["jamesPotter"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='jamesPotter' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["jamesPotter"]["price"]; ?>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/ginny.jpg" alt="Ginny Weasley">
                        <div class="card-body d-flex flex-column" id="ginnyWeasley">
                            <h5 class="card-title">Ginny Weasley's Wand</h5>
                            <p class="card-text">
                                10 1/2" yew wood
                            </p>
                            <?php
                                if ($_SESSION["cart"]["ginnyWeasley"]["quantity"] == 1) {
                                    echo "<button type='button' class='btn btn-success mt-auto' disabled>Added to cart</button>";
                                } else {
                                    echo "<input type='submit' name='ginnyWeasley' class='btn btn-primary mt-auto' value='Add to cart'>"; 
                                }
                            ?>
                        </div>
                        <div class="card-footer text-muted">
                            $<?php echo $_SESSION["cart"]["ginnyWeasley"]["price"]; ?>
                        </div>
                    </div>
                </div>
            </form>
            <h5 class="text-center">
                All credit for above and additional information can be found <a href="http://harrypotter.wikia.com/wiki/Wand_wood" target="_blank"  rel="noopener">here</a>
            </h5>
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