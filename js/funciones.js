function mensaje_update() {
    alert('Los datos se actualizaran cuando inicie sesión nuevamente');
}
function display_list(num) {
    var usuario = document.getElementsByClassName("lista_0");
    var animales = document.getElementsByClassName("lista_1");
    var reserva = document.getElementsByClassName("lista_2");
    var icon = document.getElementsByClassName("icon_sw");
    switch (num) {
        case 0:
            usuario[0].style.display="block";
            icon[0].style.backgroundColor="#b8bddb";

            animales[0].style.display="none";
            icon[1].style.backgroundColor="#5E548E";
            reserva[0].style.display="none";
            icon[2].style.backgroundColor="#5E548E";
            break;
        case 1:
            animales[0].style.display="block";
            icon[1].style.backgroundColor="#b8bddb";

            usuario[0].style.display="none";
            icon[0].style.backgroundColor="#5E548E";
            reserva[0].style.display="none";
            icon[2].style.backgroundColor="#5E548E";
            break;
        case 2:
            reserva[0].style.display="block";
            icon[2].style.backgroundColor="#b8bddb";

            usuario[0].style.display="none";
            icon[0].style.backgroundColor="#5E548E";
            animales[0].style.display="none";
            icon[1].style.backgroundColor="#5E548E";
            break;
    }
    console.log(icon);
}
