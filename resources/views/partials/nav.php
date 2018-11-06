<nav>
    <div class="container nav-flex">
        <div>
            <h1 class="display-6 nav-qui">
                <a href="<?= \Qui\lib\Routes::$routes['home']?>">
                    Qui
                </a>
            </h1>
        </div>
        <div class="nav-items-container">
            <a class="nav-item nav-link text-center" href="<?= \Qui\lib\Routes::$routes['home'] ?>">home</a>
            <?php
            $loggedIn = \Qui\lib\facades\Authentication::verify();
            $user = \Qui\lib\facades\Authentication::verify(true);

            $loginRoute = \Qui\lib\Routes::$routes['login'];
            $registerRoute = \Qui\lib\Routes::$routes['register'];
            $logoutRoute = \Qui\lib\Routes::$routes['logout'];

            // if NOT logged in
            if (!$loggedIn) {
                echo "<a class=\"nav-item nav-link text-center\" href=\"{$loginRoute}\">login</a>";
                echo "<a class=\"nav-item nav-link text-center\" href=\"{$registerRoute}\">register</a>";
            }
            // if logged in
            if ($loggedIn) {
                echo "<a class=\"navLink nav-link\" href=\"{$logoutRoute}\">Logout</a>";
            }
            ?>
        </div>
    </div>
</nav>
