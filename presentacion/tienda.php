<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-body-tertiary">
    <header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/presentacion/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="images/black-logo.png" alt="logo" width="55" height="55">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Acerca de</a></li>
            </ul>
            <div class="text-end">
                <a href="../negocio/controladores/LogoutController.php" class="btn btn-outline-light me-2">Logout</a>
            </div>
        </div>
    </div>
</header>

    <div class="container">
        <section class="py-5 text-center">
            <h2>Tienda</h2>
            <?php
            if (isset($_SESSION["firstName"]))
                    echo $_SESSION["firstName"];
            else
                echo "NO USER";

            ?>
        </section>

        <section class="row g-5">
            <!-- Carrito-->
            <aside class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Carrito de
                        <?php
                        echo $_SESSION["firstName"];
                        ?>
                    </span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                        <div class="text-success">
                            <h6 class="my-0">Gastos de envío</h6>
                            <small>DHL</small>
                        </div>
                        <span class="text-success">−$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <form class="needs-validation" novalidate>
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Realizar pedido</button>
                        </form>
                    </li>
                </ul>
            </aside>
            <!-- Productos -->
            <main class="col-md-7 col-lg-8">
                <h4 class="mb-3">Artículos</h4>
                <ul class="list-group mb-3" id="products">
                    <!-- Crear los <li> dinámicamente -->
                </ul>
            </main>
        </section>


        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">&copy; 2023–2024 Medac Sport</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">GitHub</a></li>
            <li class="list-inline-item"><a href="#">LinkedIn</a></li>
            <li class="list-inline-item"><a href="#">Medac</a></li>
        </ul>
    </footer>
    </div>
    <script src="js/product-list.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>