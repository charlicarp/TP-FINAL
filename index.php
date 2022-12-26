<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--LINK BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand conf" href="#">
                  <img src="./imagenesTpIntegrador/codoacodo.png" alt="Logo" width="150" height="80" class="d-inline-block align-text-center">
                  Conf Bs As</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#conferenciaBsAs">La conferencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#oradores">Los oradores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Playa">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#nombreParaSerOrador">Conviertete en orador</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link comprarTickets" href="./tickets.html">Comprar tickets</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>


<!--TABLA DE REGISTRO-->
<section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-primary card-outlibe text-center">
                            <h5>Registro de Inscriptos</h5>

                            <?php
                                 include "conexionbd.php";

                                 $consulta = $conectar->query("SELECT*FROM datos");
                                 $row = mysqli_num_rows($consulta);

                            ?>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabla-responsive ">
                            <table class="table" >
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Temario de la Conferencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Mostrar Datos de la Tabla BD-->
                                    <?php
                                    while ($guardar = $consulta -> fetch_assoc()) { ?>
                                        <tr name="aceptar">
                                            <th scope="row">
                                                <?php echo $guardar ["id"]; ?>

                                            </th>
                                            <td> <?php echo $guardar ["nombre"]; ?></td>
                                            <td> <?php echo $guardar ["apellido"]; ?></td>
                                            <td> <?php echo $guardar ["texto"]; ?></td>

                                            <td><a href="formeditar_registro.php?id=<?php echo $guardar ["id"]?>"><button class="btn btn-success boton-editar">Editar</button></a></td>
              
                                            <td><a href="eliminar_registro.php?id=<?php echo $guardar["id"] ?>"><button class=" btn btn-success boton-eliminar" type="submit">Eliminar</button></a></td>
                                        </tr>
                                        <?php }

                                    ?>

                                  
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
             </div>
            </div>
        </section>

<!--FOOTER-->

<footer class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid-footer navFooter" >
      <div class="row">
        <ul class="navbar-nav">
  
        <div class="col col-2 text-center">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Preguntas Frecuentes</a>
          </li>
        </div>

        <div class="col col-2 text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Contactanos</a>
          </li>
        </div>
                  
        <div class="col col-2 text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Prensa</a>
          </li>
        </div>

        <div class="col col-2 text-center ">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Conferencia</a>
          </li>
        </div>

        <div class="col col-2 text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Terminos y Condiciones</span></a>
          </li> 
        </div>

        <div class="col col-2 text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Privacidad</span></a>
          </li> 
        </div>

        <div class="col text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Estudiantes</span></a>
          </li> 
        </div>
      </ul>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./estilosForm.css">

</body>
</html>