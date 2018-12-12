function setCookie(cnombre, cvalor, expiracion) {
    var fecha = new Date();
    fecha.setTime(fecha.getTime() + (expiracion * 24 * 60 * 60 * 1000));
    var expira = "expira=" + fecha.toGMTString();
    document.cookie = cnombre + "=" + cvalor + ";" + expira + ";path=/";
}

function getCookie(cnombre) {
    var nombre = cnombre + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(nombre) == 0) {
            return c.substring(nombre.length, c.length);
        }
    }
    return "";
}
