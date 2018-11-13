<?php
if (isset($_SESSION['user'])) {
    echo <<<abc
    <header>
        <div class="wrapper w1">
            <nav>
                <div class="logo">
                    <a href="home.php"><img class="img_logo" src="../img/logo.png"></a>
                </div>
                    <div class="menu">
                        <ul>
                            <li><a href="contacto.php">Contácto</a></li>
                            <li><a href="donar.php">Donar</a></li>
                            <li><a href="animales.php">Animales</a></li>
                            <li><a href="somos.php">Quiénes somos</a></li>
                        </ul>
                    </div>
                    <div class="mi_cuenta">
                        <ul>
                            <li><a href="perfil.php" class="login">$user->nombre</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header>
abc;
}else {
    echo <<<abc
    <header>
        <div class="wrapper w1">
            <nav>
                <div class="logo">
                    <a href="home.php"><img class="img_logo" src="../img/logo.png"></a>
                </div>
                    <div class="menu">
                        <ul>
                            <li><a href="contacto.php">Contácto</a></li>
                            <li><a href="donar.php">Donar</a></li>
                            <li><a href="animales.php">Animales</a></li>
                            <li><a href="somos.php">Quiénes somos</a></li>
                        </ul>
                    </div>
                    <div class="mi_cuenta">
                        <ul>
                            <li><a href="sesion.php" class="login">Sesión</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header>
abc;
}

?>
