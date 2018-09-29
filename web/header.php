<?php
    $file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top link-top">
    <a class="navbar-brand" href="#">Sam McGrath</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($file === 'home') echo 'active'; ?>">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item <?php if ($file === 'projects') echo 'active'; ?>">
                <a class="nav-link" href="#">Projects</a>
            </li>
        </ul>
    </div>
</nav>