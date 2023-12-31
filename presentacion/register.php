<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="images/black-logo.png" alt="logo" width="55" height="55">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Acerca de</a></li>
            </ul>
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container-xxl p-5">
        <form action="http://localhost/medac-sport/src/init-app.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Por favor introduzca sus datos</h1>

            <div class="form-floating">
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Javier">
                <label for="firstName">Nombre</label>
            </div>
            <div class="form-floating">
                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Gutiérrez Pérez">
                <label for="lastName">Apellidos</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Clave</label>
            </div>
            <div class="form-floating">
                <input type="text" name="shippingAddress" class="form-control" id="shippingAddress" placeholder="Calle Larios 42">
                <label for="shippingAddress">Dirección de envío</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit" >Registrarse</button>
            <p class="mt-5 mb-3 text-body-secondary">© 2023-2024</p>
        </form>
    </div>
</main>

<script src="js/register.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>