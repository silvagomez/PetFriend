<script>
    function buscar_ajax(cadena){
        $.ajax({
        type: 'POST',
        url: 'buscar.php',
        data: 'cadena=' + cadena,
        success: function(respuesta) {
        //Copiamos el resultado en #mostrar
        $('#mostrar').html(respuesta);
        }
        })
    }
</script>