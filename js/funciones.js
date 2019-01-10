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
            if (usuario[0].style.display=="none") {
                usuario[0].style.display="block";
                icon[0].style.backgroundColor="#b8bddb";
            } else {
                usuario[0].style.display="none";
                icon[0].style.backgroundColor="#5E548E";
            }
            
            animales[0].style.display="none";
            icon[1].style.backgroundColor="#5E548E";
            reserva[0].style.display="none";
            icon[2].style.backgroundColor="#5E548E";
            break;
        case 1:
            if (animales[0].style.display=="none") {
                animales[0].style.display="block";
                icon[1].style.backgroundColor="#b8bddb";
            } else {
                animales[0].style.display="none";
                icon[1].style.backgroundColor="#5E548E";
            }
            
            usuario[0].style.display="none";
            icon[0].style.backgroundColor="#5E548E";
            reserva[0].style.display="none";
            icon[2].style.backgroundColor="#5E548E";
            break;
        case 2:
            if (reserva[0].style.display=="none") {
                reserva[0].style.display="block";
                icon[2].style.backgroundColor="#b8bddb";
            } else {
                reserva[0].style.display="none";
                icon[2].style.backgroundColor="#5E548E";
            }
            
            usuario[0].style.display="none";
            icon[0].style.backgroundColor="#5E548E";
            animales[0].style.display="none";
            icon[1].style.backgroundColor="#5E548E";
            break;
    }
}
function eliminar_user(id_usuario) {
    if (confirm('Confirma eliminar usuario')) {
       
        alert(id_usuario);
    } else {
        
    }
    

}