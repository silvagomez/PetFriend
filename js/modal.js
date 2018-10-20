var mascara = document.getElementById('lamascara');
var btn_modal = document.getElementById("btn_modal");
var img_modal = document.getElementById("img_modal");
var cerrar = document.getElementsByClassName("cerrar")[0];

btn_modal.onclick = function() {
    mascara.style.display = "block";
}
img_modal.onclick = function() {
    mascara.style.display = "block";
}
cerrar.onclick = function() {
    mascara.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == mascara) {
        mascara.style.display = "none";
    }
}
