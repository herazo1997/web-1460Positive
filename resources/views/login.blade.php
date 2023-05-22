<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../resources/css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper bg-white">
        <div class="h2 text-center">1460Positive</div>
        <div class="h4 text-muted text-center pt-2">Introduce tus datos de acceso</div>
        <form class="pt-3" method="POST" action="">
            @csrf
            <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="email"
                        id="email" placeholder="Email o Username " required> </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" name="password"
                        id="password" placeholder="Password" required> </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="ml-auto"> <a href="#" id="forgot">¿Olvidaste tu Contraseña?</a> </div>
            </div> <button type="submit" class="btn btn-block text-center my-3">EMPEZAR LA AVENTURA</button>
            <div class="text-center pt-3 text-muted">No tienes cuenta? <a href="#">Registrate</a></div>
        </form>
    </div>
</body>

</html>
