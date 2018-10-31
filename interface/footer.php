<?php
echo <<<abc
<footer>
    <div class="w5">

        <div class="wfooter aviso_legal">
            <p class="titulillo">muuu@petfriend.com</p><br>
            <a href="cookies.php" class="a_footer">Cookies</a><br>
            <a href="https://ec.europa.eu/justice/smedataprotect/index_en.htm" class="a_footer">Política de privacidad</a><br>
            <a href="error404.php" class="a_footer">Aviso legal</a><br>
            <a href="error404.php" class="a_footer">Términos y condiciones</a>
        </div>
        <div class="wfooter us">
            <p class="titulillo">Sobre nosotros</p><br>
            <a href="somos.php" class="a_footer">Quienes somos</a><br>
            <a href="contacto.php" class="a_footer">Contacto</a><br>
            <a href="error404.php" class="a_footer">Blog Animal</a><br>
            <a href="error404.php" class="a_footer">Noticias</a><br>

        </div>

        <div class="wfooter market">
            <div class="suscriptor">
                <form class="" action="index.php" method="post">
                    <p class="titulillo">No te pierdas nuestras novedades</p>
                    <br>
                    <input type="text" name="" value="email" class="sus_email">
                    <input type="button" name="" value="¡Apúntate!" class="btn_apuntate">
                </form>
            </div>
            <div class="redes_sociales">
                <p class="titulillo">Síguenos en nuestras redes sociales</p>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.snapchat.com/"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>

            </div>

        </div>
    </div>
    <div class="propiedad">
        <small>Copyright (c) 2018 Copyright Holder All Rights &nbsp Allende Eguía Del Valle - Mikel Calvo Pariente - Diego Camilo Silva Gómez - Sandra Lopez Villarragut</small>
    </div>
</footer>
abc;
?>
