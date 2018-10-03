<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="https://sylvanson.com/wp-content/uploads/2017/03/favicon-512.png">

    <title>Ozzy's Wizard Shop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container">
        <header class="jumbotron my-4">
            <h1 class="display-3">Ozzy's Wizard Shop</h1>
            <p class="lead">
                Ollivander's Shop as shown in Harry Potter is the most popular wizard shop. At Ozzy's Wizard shop, we strive to achieve what Ollivander has including customer service.
        
                <blockquote class="blockquote text-center">
                <p class="mb-0">
                        "Only a minority of trees can produce wand quality wood (just as a minority of humans can produce magic). It takes years of experience to tell which ones have the gift, although the job is made easier if Bowtruckles are found nesting in the leaves, as they never inhabit mundane trees."
                    </p>
                <footer class="blockquote-footer">Garrick Ollivander</cite></footer>
                </blockquote>
            </p>
        </header>
        <header class="jumbotron my-4">
            <h1>Wand Selection</h1>
            <form action="shopping_cart.php" method="post">
                <div class="card-deck">
                    <div class="card mb-4">
                            <img src="../images/wands/harrypotter.jpg" alt="Harry Potter">
                            <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Harry Potter's Wand</h5>
                            <p class="card-text">
                                11" holly, phoenix feather (nice and supple)
                            </p>
                            <a href="#" target="_blank" rel="noopener" class="btn btn-primary mt-auto">
                                Add to cart
                            </a>  
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/hermione.jpg" alt="Hermione Granger">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Hermione Granger's Wand</h5>
                            <p class="card-text">
                                10 3/4" vine, dragon heartstring
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/viktorkrum.jpg" alt="Viktor Krum">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Viktor Krum's Wand</h5>
                            <p class="card-text">
                                10 1/4" hornbeam, dragon heartstring (rigid)
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/dracomalfoy.jpg" alt="Draco Malfoy">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Draco Malfoy's Wand</h5>
                            <p class="card-text">
                                10" hawthorn, unicorn hair (reasonably springy)
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                        <div class="card mb-4">
                            <img src="../images/wands/ronFirst.jpg" alt="Ron Weasley's First Wand">
                            <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ron Weasley's First Wand</h5>
                            <p class="card-text">
                                12" ash, unicorn hair
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/ronSecond.jpg" alt="Ron Weasley's Second Wand">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ron Weasley's Second Wand</h5>
                            <p class="card-text">
                                14" willow, unicorn hair
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/horaceslughorn.jpg" alt="Horace Slughorn">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Horace Slughorn's Wand</h5>
                            <p class="card-text">
                                10 1/4" cedar, dragon heartstring (fairly flexible)
                            </p>
                            <a href="#" target="_blank" rel="noopener" class="btn btn-primary mt-auto">
                                Add to cart
                            </a>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/elderwand.jpg" alt="The Elder Wand">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">The Elder Wand</h5>
                            <p class="card-text">
                                15" elder, Thestral hair
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                        <div class="card mb-4">
                            <img src="../images/wands/nevillelongbottom.jpg" alt="Neville Longbottom">
                            <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Neville Longbottom's Wand</h5>
                            <p class="card-text">
                                13" cherry, unicorn hair
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/remus.jpg" alt="Remus Lupin">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Remus Lupin's Wand</h5>
                            <p class="card-text">
                                10 1/4" cypress, unicorn hair, pliable
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/fleur.jpg" alt="Fleur Delacour'">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Fleur Delacour's Wand</h5>
                            <p class="card-text">
                                9 1/2" rosewood, Veela hair (inflexible)
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/cedric.jpg" alt="Cedric Diggory">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Cedric Diggory's Wand</h5>
                            <p class="card-text">
                                12 1/4" ash, unicorn hair (pleasantly springy)
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                        <div class="card mb-4">
                            <img src="../images/wands/voldemort.jpg" alt="Lord Voldemort">
                            <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Lord Voldemort's Wand</h5>
                            <p class="card-text">
                                13 1/2" yew, phoenix feather
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/bellatrix.jpg" alt="Bellatrix Lestrange">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bellatrix Lestrange's Wand</h5>
                            <p class="card-text">
                                12 3/4" walnut, dragon heartstring, unyielding
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/jamespotter.jpg" alt="James Potter">
                        <div class="card-body d-flex flex-column">
                        <h5 class="card-title">James Potter's Wand</h5>
                            <p class="card-text">
                                11" mahogany (pliable)
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img src="../images/wands/ginny.jpg" alt="Ginny Weasley">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ginny Weasley's Wand</h5>
                            <p class="card-text">
                                Yew wood
                            </p>
                            <input type="submit" class="btn btn-primary mt-auto" value="Add to cart">
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