<?php
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
                        <!-- <li><a href="somos.php">Quienes somos</a></li> -->
                    </ul>
                </div>
                <div class="mi_cuenta">
                    <ul>
                        <li><a href="cuenta.php" class="login">Hola Pimpollo</a></li>
                    </ul>
                </div>
        </nav>
    </div>
</header>
abc;
?>
