<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Numero mayor</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="areatri.php">Area de un triangulo</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="areacir.php">Area de un circulo</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tresnum.php">Numero Mayor</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="voto.php">Edad para votar</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Mostrar el numero Mayor</h1>
                    <p>
                    <form action="tresnum.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label>Introduce el numero 1</label>
                                    <input type="text" name="numero1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Introduce el numero 2</label>
                                    <input type="text" name="numero2">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Introduce el numero 3</label>
                                    <input type="text" name="numero3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Calcular">
                                </td>
                            </tr>
                        </table>
                    </form>

                    <?php
                    if ($_POST) 
                    {
                        $num1 = $_POST["numero1"];
                        $num2 = $_POST["numero2"];
                        $num3 = $_POST["numero3"];

                        $mayor = max($num1, $num2, $num3);

                        echo "<br><h2>Resultado</h2>";
                        echo "El número mayor es: ". $mayor;
                    }
                    ?>
                    </p>
                </div>
            </div> 
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>