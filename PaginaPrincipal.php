<?php ?>
<div id="menu" class="row">
    <div class="col-md-3">
        <br>
        <button type="submit" class="btn botonMascota" id="boton1" onclick="cargaMascota()"></button>
        <br>
    </div>
    <div class="col-1"></div>
    <div class="col-md-3">
        <br>
        <button type="submit" class="btn botonCliente" id="boton2" onclick="cargaDueno()"></button>
        <br>
    </div>  
    <div class="col-1"></div>
    <div class="col-md-3">
        <br>
        <button type="submit" class="btn botonBuscar" onclick="muestraModal()"></button>
        <br>
    </div>
</div>
<br>
<div class="row" style="height: 20px; width: 1000px; background-color: #2f3145;"></div>

<div>
    <div class="row">   
        <div id="pgPrincipal" class="col-12"></div>     
    </div>   
</div>

<div id="myModal" class="modal" tabindex="-1" role="dialog" style="color:darkgray;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Busca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Insertar Chip o DNI de cliente.</p>
                <br>
                <input id="cajaDato" class="form-control" type="text" placeholder="DNI o Chip">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" id="botonChip">Mascota</button>
                <button type="submit" class="btn btn-secondary" id="botonDNI">Cliente</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

    function cargaMascota() {
        $("#pgPrincipal").load("PaginaMascota.php");
    }

    function cargaDueno() {
        $("#pgPrincipal").load("PaginaDueno.php");
    }

    function muestraModal() {
        $('#myModal').modal('show');
    }
    ;
    //Funciones de búsqueda en botones dentro del modal
    $('#botonChip').click(function () {
        //Leemos el contenido de la caja y lo guardamos en una variable
        var _cajaChip = $('#cajaDato').val();
        //Cargamos el archivo que vamos a leer para hacer la búsqueda

        $("#pgPrincipal").load("PaginaMascota.php", {
            numeroChip: _cajaChip,

        });
    });

    $('#botonDNI').click(function () {
        //Leemos el contenido de la caja y lo guardamos en una variable
        var _cajaDNI = $('#cajaDato').val();
        //Cargamos el archivo que vamos a leer para hacer la búsqueda

        $("#pgPrincipal").load("PaginaDueno.php", {
            numeroDNI: _cajaDNI,
        });
    });



</script>