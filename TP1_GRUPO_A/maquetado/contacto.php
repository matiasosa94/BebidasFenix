<!DOCTYPE html>
<html lang="en">
<?php include_once("partes/head.php");?>
<body style="background-image: url(public/imagenes/fondoRainbow2.jpg)">
<?php include_once("partes/header.php");?>
 <main style="margin-top:7%;margin-bottom:7%;">
  
<section class="mb-4" >


<h2 class="h2-responsive font-weight-bold text-center my-4 ">Contactanos</h2>

<p class="text-center w-responsive mx-auto mb-5 ">Tenes alguna duda? Por favor no dudes en enviarnos un email. Nuestro equipo te respondera en question de unos momentos</p>
<div class="container-fluid" >
<div class="row">
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="*" method="POST" style="padding: 25px;
    background-color: peachpuff;">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class="">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="email" class="">Email</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <label for="subject" class="">Asunto</label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   
                    <label><input type="checkbox" id="mayorista" value="mayorista"> Mayorista</label><br>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <label for="message">Tu mensaje</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    </div>

                </div>
            </div>

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary"id="boton-formulario"  >Enviar</a>
        </div>
        <div class="status"></div>
    </div>
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li style="background-color:coral"><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Buenos aires, Balvanera, calle falsa 123</p>
            </li>

            <li style="background-color:darkorange"><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+54 11-6523-6532</p>
            </li>

            <li style="background-color:indianred"><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>bebidasFenix@fenix.com</p>
            </li>
        </ul>
    </div>
   

</div>
</div>
</section>

 </main>
 
 <?php include_once("partes/footer.php");?>   
</body>
<?php include_once("partes/scripts.php");?>
</html>