<?php
    echo '<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top link-top">
            <a class="navbar-brand" href="#">Ice Cream Corp.</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if basename(__FILE__) == \'about-us.php\' echo \'active\' ?>" href="./about-us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>';
?>