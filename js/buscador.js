function corazoncito(num){
    
    document.getElementById("demo").style.color = "red";
}

function buscar_ajax(cadena){
    $.ajax({
        type: 'POST',
        url: '../php/buscar.php',
        data: 'cadena=' + cadena,
        success: function(respuesta) {
            //Copiamos el resultado en #mostrar
            
                $('#mostrar').html(respuesta);
            
        }
    })
}

function miFiltro(){
    var rz=document.getElementById("rz").value;
    switch (rz) {
        case 'Animales':
            var n=0;
            var dog = document.getElementsByClassName("Perro");
            while (n<dog.length) {
                dog[n].style.display="block";
                n++;
            }
            n=0;
            var cat= document.getElementsByClassName("Gato");
            while (n<cat.length) {
                cat[n].style.display="block";
                n++;
            }
            n=0;
            var bird = document.getElementsByClassName("Ave");
            while (n<bird.length) {
                bird[n].style.display="block";
                n++;
            }
            n=0;
            var fish=document.getElementsByClassName("Pez");
            while (n<fish.length) {
                fish[n].style.display="block";
                n++;
            }
            n=0;
            var rept=document.getElementsByClassName("Reptil");
            while (n<rept.length) {
                rept[n].style.display="block";
                n++;
            }
            n=0;
            var rata=document.getElementsByClassName("Roedor");
            while (n<rata.length) {
                rata[n].style.display="block";
                n++;
            }
            n=0;
        break;

        case 'Perro':
            var n=0;
            var dog = document.getElementsByClassName("Perro");
            while (n<dog.length) {
                dog[n].style.display="block";
                n++;
            }
            n=0;
            var cat= document.getElementsByClassName("Gato");
            while (n<cat.length) {
                cat[n].style.display="none";
                n++;
            }
            n=0;
            var bird = document.getElementsByClassName("Ave");
            while (n<bird.length) {
                bird[n].style.display="none";
                n++;
            }
            n=0;
            var fish=document.getElementsByClassName("Pez");
            while (n<fish.length) {
                fish[n].style.display="none";
                n++;
            }
            n=0;
            var rept=document.getElementsByClassName("Reptil");
            while (n<rept.length) {
                rept[n].style.display="none";
                n++;
            }
            n=0;
            var rata=document.getElementsByClassName("Roedor");
            while (n<rata.length) {
                rata[n].style.display="none";
                n++;
            }
            n=0;
        break;

        case 'Gato':
            var n=0;
            var dog = document.getElementsByClassName("Perro");
            while (n<dog.length) {
                dog[n].style.display="none";
                n++;
            }
            n=0;
            var cat= document.getElementsByClassName("Gato");
            while (n<cat.length) {
                cat[n].style.display="block";
                n++;
            }
            n=0;
            var bird = document.getElementsByClassName("Ave");
            while (n<bird.length) {
                bird[n].style.display="none";
                n++;
            }
            n=0;
            var fish=document.getElementsByClassName("Pez");
            while (n<fish.length) {
                fish[n].style.display="none";
                n++;
            }
            n=0;
            var rept=document.getElementsByClassName("Reptil");
            while (n<rept.length) {
                rept[n].style.display="none";
                n++;
            }
            n=0;
            var rata=document.getElementsByClassName("Roedor");
            while (n<rata.length) {
                rata[n].style.display="none";
                n++;
            }
            n=0;
        break;

        case 'Ave':
            var n=0;
            var dog = document.getElementsByClassName("Perro");
            while (n<dog.length) {
                dog[n].style.display="none";
                n++;
            }
            n=0;
            var cat= document.getElementsByClassName("Gato");
            while (n<cat.length) {
                cat[n].style.display="none";
                n++;
            }
            n=0;
            var bird = document.getElementsByClassName("Ave");
            while (n<bird.length) {
                bird[n].style.display="block";
                n++;
            }
            n=0;
            var fish=document.getElementsByClassName("Pez");
            while (n<fish.length) {
                fish[n].style.display="none";
                n++;
            }
            n=0;
            var rept=document.getElementsByClassName("Reptil");
            while (n<rept.length) {
                rept[n].style.display="none";
                n++;
            }
            n=0;
            var rata=document.getElementsByClassName("Roedor");
            while (n<rata.length) {
                rata[n].style.display="none";
                n++;
            }
            n=0;
        break;

        case 'Pez':
            var n=0;
            var dog = document.getElementsByClassName("Perro");
            while (n<dog.length) {
                dog[n].style.display="none";
                n++;
            }
            n=0;
            var cat= document.getElementsByClassName("Gato");
            while (n<cat.length) {
                cat[n].style.display="none";
                n++;
            }
            n=0;
            var bird = document.getElementsByClassName("Ave");
            while (n<bird.length) {
                bird[n].style.display="none";
                n++;
            }
            n=0;
            var fish=document.getElementsByClassName("Pez");
            while (n<fish.length) {
                fish[n].style.display="block";
                n++;
            }
            n=0;
            var rept=document.getElementsByClassName("Reptil");
            while (n<rept.length) {
                rept[n].style.display="none";
                n++;
            }
            n=0;
            var rata=document.getElementsByClassName("Roedor");
            while (n<rata.length) {
                rata[n].style.display="none";
                n++;
            }
            n=0;
        break;
        
        case 'Reptil':
            var n=0;
            var dog = document.getElementsByClassName("Perro");
            while (n<dog.length) {
                dog[n].style.display="none";
                n++;
            }
            n=0;
            var cat= document.getElementsByClassName("Gato");
            while (n<cat.length) {
                cat[n].style.display="none";
                n++;
            }
            n=0;
            var bird = document.getElementsByClassName("Ave");
            while (n<bird.length) {
                bird[n].style.display="none";
                n++;
            }
            n=0;
            var fish=document.getElementsByClassName("Pez");
            while (n<fish.length) {
                fish[n].style.display="none";
                n++;
            }
            n=0;
            var rept=document.getElementsByClassName("Reptil");
            while (n<rept.length) {
                rept[n].style.display="block";
                n++;
            }
            n=0;
            var rata=document.getElementsByClassName("Roedor");
            while (n<rata.length) {
                rata[n].style.display="none";
                n++;
            }
            n=0;
        break;
        case 'Roedor':
        var n=0;
        var dog = document.getElementsByClassName("Perro");
        while (n<dog.length) {
            dog[n].style.display="none";
            n++;
        }
        n=0;
        var cat= document.getElementsByClassName("Gato");
        while (n<cat.length) {
            cat[n].style.display="none";
            n++;
        }
        n=0;
        var bird = document.getElementsByClassName("Ave");
        while (n<bird.length) {
            bird[n].style.display="none";
            n++;
        }
        n=0;
        var fish=document.getElementsByClassName("Pez");
        while (n<fish.length) {
            fish[n].style.display="none";
            n++;
        }
        n=0;
        var rept=document.getElementsByClassName("Reptil");
        while (n<rept.length) {
            rept[n].style.display="none";
            n++;
        }
        n=0;
        var rata=document.getElementsByClassName("Roedor");
        while (n<rata.length) {
            rata[n].style.display="block";
            n++;
        }
        n=0;
    break;
        default:
            break;
    }
}
