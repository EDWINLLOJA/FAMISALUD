<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/estilos.css">
    <!-- Bootstrap CSS y del login--> 

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url() ?>/public/atlantis/assets/img/icon.ico" type="image/x-icon" />

<!-- Fonts and icons -->
<script src="<?= base_url() ?>/public/atlantis/assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['<?= base_url() ?>/public/atlantis/assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>




<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- CSS Files -->
<link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/atlantis.css">
<!-- PARTE YEXSON  -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />

<link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/responsive.css">
<link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/style.css">
<!-- FIN PARTE YEXSON -->
<!-- Input Spinner -->
<link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/input-spinner.css">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="<?= base_url() ?>/public/atlantis/assets/css/demo.css">
    <title>Contacto</title>
  </head>
  <body>

<style>
    .hola {
        background-color: blue;
        width: 5%;
    }

    body {
        background-image: url("<?= base_url() ?>/public/atlantis/assets/img/bg5.jpg");

    }
</style>
<main>

    <style>
        .ver_boton {

        }

        .btn-neon {
            color: red;
            font-size: 40px;
    
        }

        .btn-neon {
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            letter-spacing: 4px;
            font-size: 50px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.2s;

        }

        .btn-neon:hover {
            background: #a945c7;
            box-shadow: 0 0 10px #a945c7, 0 0 40px #a945c7, 0 0 80px #a945c7;
            transition-delay: 0.5s;
        }

        .btn-neon span {
            position: absolute;
            display: block;
        }

        #span1 {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #a945c7);
        }

        .btn-neon:hover #span1 {
            left: 100%;
            transition: 1s;
        }
    </style>
    <div class="ver_boton ">
        <a class="  col-md-2" href="<?= base_url() ?>/">
        <span id="span1"></span>
            <i class="fas fa-angle-double-left   btn-neon"></i>
        </a>
    </div>



    <div class="contenedor__todo ">
    

        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Olvidaste tu contraseña?</h3>

                <button id="btn__registrarse">REGISTRARTE</button>
            </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="<?= site_url('/ingresar') ?>" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>
            </form>

            <!--Register-->
            <form action="php/registro.php" method="POST" class="formulario__register">
                <h2>Somos</h2>
                <h2>NEW STAR</h2>
                <p> Si olvidaste tu contraseña llama a 111111</p>

            </form>
        </div>
    </div>

</main>

<!-- Optional JavaScript; choose one of the two! -->

    


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="<?= base_url() ?>/public/atlantis/assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>