function add(code){
    $.ajax({
        type: "POST",
        url: './inc/submit-data.php',
        data: { code },
        error: function(err){
            console.error(err);
        }
    });
}

$(document).ready(function(){
    $('#myTable').dataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ resultados",
            "search": "Buscar:",
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
            },
            "zeroRecords": "No se encontró nada, lo siento.",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)"
        }
    });
});