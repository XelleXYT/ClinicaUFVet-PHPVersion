<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilosVet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #2f3145;">
        <div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 banner"></div>
                <div class="col-1"></div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-2"></div>
                <div id="contenido" class="col-8">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-4">
                            <br>
                            <div class="datosMascota loginUser"></div>
                            <br>
                            <div class="datosMascota loginPass"></div>
                        </div>
                        <div class="col-6">
                            <br>
                            <input id="cajanombre" class="form-control" name="usuario_nombre" type="text" placeholder="Usuario">
                            <br>                                                                                      <!--Podemos llamar a una variable php dentro de un tag html-->
                            <input id="cajapassword" class="form-control" name="contraseña" type="password" placeholder="Contraseña">
                            <br>
                            <button type="submit" class="btn botonLogin" id="botonLogin" style="float:right;" onclick="cargaPagina()"></button>
                            <br>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-2"></div>
            </div>
        </div>



    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script>

                                function cargaPagina() {
                                    $('#contenido').load("PaginaPrincipal.php");
                                }

                                $('#botonLogin').click(function () {
                                    // Read the input content
                                    var _name_input = $('#cajanombre').val();
                                    var _pass_input = $('#cajapassword').val();

                                    $('#contenido').load("l0g1n.php", {
                                        name_input: _name_input,
                                        pass_input: _pass_input
                                    });
                                });

    </script>

    }
</html>
