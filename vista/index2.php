<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Como en casa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .ulLista {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }
        .liLista {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .liLista:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .liLista:hover {
            background-color: #f1f1f1;
        }

        .mostrarLista{
            background-color: white;
            color: black;
            font-size: 10px;
            text-align: center;
            border: none;
            border-radius: 50px;
        }

        .btn_ver{
            border: none;
            border-radius: 50px;
            background-color: darkgray;
            padding: 10px;
            width: 150px;
        }

        .btn_ver:hover{
            background-color: gray;
        }

        .eliminar_datos{
            border: none;
            border-radius: 50px;
            background-color: darkgray;
            padding: 10px;
            width: 150px; 
        }

        .eliminar_datos:hover{
            background-color: gray;
        }
    </style>

</head>
<body>

    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg fixed-top"> 
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width= 50px;></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#cartas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Cartas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#comida">Carta comida</a></li>
                                    <li><a class="dropdown-item" href="#liquidos">Carta líquidos</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#contacto">Contacto</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#comentario">Dejanos tu comentario</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </nav>
                </div>    
            </div>
        <a name="home"></a>
        <div class="overlay">
            <header>
                <div class="row" style="margin-top: 80px;">
                    <div class="col-md-12">
                        <div class="texto1 container-fluid">
                            <br><br><br><br><br>
                            Ven a disfrutar de nuestro restaurant interactivo para niños y adultos. <br>
                            Centro de eventos, restaurant y entretención para niños en <br>
                            Av. blabla #1111, Chuchunco City.
                        </div>
                        <center><button class="btn_reservar"><a href="#">Reservar ></a></button></center>    
                    </div>
                </div>
            </header>
            <br><br><br><br><br>

            <a name="cartas"></a>
            <a name="comida"></a>
            <section>
                <div class="row">
                    <div class="titulo">
                        <strong>CARTA COMIDA</strong>
                    </div>
                </div>
                
                <div class="row" >
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                            <img src="img/tacoss.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tacos</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/hamburguesa.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hamburguesa</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/tallarines.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tallarines con albondigas</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/bistec.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bistec a lo pobre</h5>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br><br><br><br><br>
            <a name="liquidos"></a>
            <section>
                <div class="row">
                    <div class="titulo">
                        CARTA LÍQUIDOS
                    </div>
                </div>

                <div class="row">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                            <img src="img/cocacola.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bebidas</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/agua.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Agua mineral</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/jugo.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jugos</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/cerveza.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cerveza</h5>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </section>

            <a name="comentario">
            <br><br></a><br><br><br>
            <center>
            <div class="formulario">
                <form action="index2.php" name="form1" method="post">
                    <br>
                    <div class="texto_form">Nombre:</div>
                    <input type="text" name="txt_nombre"><br><br>

                    <div class="texto_form">Correo:</div>
                    <input type="text" name="txt_correo"><br><br>

                    <div class="texto_form">Rut:</div>
                    <input type="text" name="txt_rut"><br><br>

                    <div class="texto_form">Comentario:</div>
                    <textarea name="txt_area" id="" placeholder="Escribe tu comentario acá"></textarea><br><br>

                    <input type="submit" name="btn_enviar" class="btn_enviar" value="Enviar">
                    <input type="submit" name="btn_ver" value="Visualizar Datos" class="btn_ver">
                </form>
            </div>
            </center>
            <br>
        </div>
        <br>
    </div>

    <?php
         if ($_POST['btn_enviar']=="Enviar"){
            error_reporting(0);
            
            include("C:/xampp/htdocs/AppRestaurant/controlador/funciones.php");
            $cnn = Conectar();
            
                $nombre = $_POST['txt_nombre'];
                $correo = $_POST['txt_correo'];
                $rut = $_POST['txt_rut'];
                $comentario = $_POST['txt_area'];
                $sql = "INSERT INTO formulario VALUES ('$rut','$nombre','$correo','$comentario')";
                mysqli_query($cnn, $sql);
                echo "<script>alert('Se han grabado los datos')</script>";
        }
            
        if ($_POST['btn_ver'] == "Visualizar Datos") {
            include("C:/xampp/htdocs/AppRestaurant/controlador/funciones.php");
            $cnn = Conectar();
            $sql = "SELECT rut, nombre, correo, comentario FROM formulario";
            $result = $cnn->query($sql);
        
            if ($result->num_rows > 0) {
                echo "<ul class='ulLista'>";
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='mostrarLista'>
                            <li class='liLista'>
                                <strong>Rut:</strong> " . $row["rut"] . "<br>
                                <strong>Nombre:</strong> " . $row["nombre"] . "<br>
                                <strong>Correo:</strong> " . $row["correo"] . "<br>
                                <strong>Comentario:</strong> " . $row["comentario"] . "<br><br> 
                                <center>
                                    <form method='post' action='index2.php'>
                                        <input type='hidden' name='rut' value='" . $row["rut"] . "'>
                                        <input type='submit' name='btn_eliminar' value='Eliminar Datos' class='eliminar_datos'>
                                    </form>
                                </center>
                            </li>
                          </div>";
                }
                echo "</ul>";
            } else {
                echo "No hay resultados.";
            }
        }
        

        if ($_POST['btn_eliminar'] == "Eliminar Datos") {
            include("C:/xampp/htdocs/AppRestaurant/controlador/funciones.php");
            $cnn = Conectar();
            $rut = $_POST['rut'];
            $sql = "DELETE FROM formulario WHERE rut = '$rut'";
        
            if ($cnn->query($sql) === TRUE) {
                echo "Registro eliminado correctamente.";
            } else {
                echo "Error al eliminar el registro: " . $cnn->error;
            }
        }
        
    ?>

    <a href="#"><img src="img/flecha.png" alt="" width="50px" style="position: fixed; right: 0px; bottom: 0px;"></a>

    <hr>
    <a name="contacto"></a>
    <footer class="">
        <div class="row">
            <div class="col-md-6">Hecha por Pozo Patricio.</div>
            <div class="col-md-6"><i class="bi bi-whatsapp">+569 1111 2222</i></div>
        </div>
    </footer>
</body>
</html>

