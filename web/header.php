<?php
    $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top link-top">
    <a class="navbar-brand" href="#">Sam McGrath</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item activef">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#projects">Projects</a>
            </li>
        </ul>
    </div>
</nav>