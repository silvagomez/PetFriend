function display_modal(id, nombre, sexo, edad, especie, img_perfil) {
    var mascara = document.getElementById('lamascara');
    var btn_modal = document.getElementById("btn_modal");
    var img_modal = document.getElementById("img_modal");
    var cerrar = document.getElementsByClassName("cerrar")[0];

    mascara.style.display = "block";

    // btn_modal.onclick = function() {
    //     mascara.style.display = "block";
    // }
    // img_modal.onclick = function() {
    //     mascara.style.display = "block";
    // }
    // console.log(mascara);
    document.getElementById("img_p").src=img_perfil;
    document.getElementById("vn_animal").innerHTML="Nombre: "+nombre;
    document.getElementById("vn_sexo").innerHTML="Sexo: "+sexo;
    document.getElementById("vn_anho").innerHTML="Años: "+edad;
    document.getElementById("vn_esp").innerHTML="Especie: "+especie;
    document.getElementById("vn_link").href="../interface/reservar.php?pet="+nombre+"&id="+id;
    
    cerrar.onclick = function() {
        mascara.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == mascara) {
            mascara.style.display = "none";
        }
    }
    
}
