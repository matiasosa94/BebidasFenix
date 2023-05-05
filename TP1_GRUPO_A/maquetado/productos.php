<?php 
require_once('funciones/funciones_productos.php');
$listado=listado();

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("partes/head.php");?>
<body style="background-image: url(public/imagenes/fondoRainbow.jpg)">
<?php include_once("partes/header.php");?>
 <main>
    <br><br><br><br>
<div class="container-fluid">

<div class="row">
<?php foreach($listado as $producto): ?>
    
  <div class="col-md-6 col-sm-12 col-lg-4">  
    <div class="card" style="margin:30px">
      <a href="#!"  >
        <img src="public/imagenes/<?php echo $producto['id'].$producto['categoria']?>.jpg" class="card-img-top" alt="<?php echo $producto['nombre'] ?>" width="600em" height="400em" />
      </a>
      <div class="card-body">
        <h5 class="card-title"><?php if($producto['marca']==$producto['nombre']){$producto['marca']='';}   echo $producto['categoria'].' '.$producto['marca'].' '.$producto['nombre'].' '.$producto['cantidad']  ?></h5>
        <p class="card-text" style="font-size:large">
          <?php echo 'Precio $'.$producto['precio'] ?>
        </p>
        <a href="#!" class="btn btn-primary">Comprar</a>
        <?php if($producto['precio']>=6000):?>
          <span style="color:green;font-weight:bolder"> <?php echo 'Llega gratis mañana' ?> </span>  
        <?php endif;?>
      </div>
    </div>  
    </div> 
<?php endforeach;?>
</div>
</div> 
  
  <br><br><br><br>
 </main>
 
 <?php include_once("partes/footer.php");?>   
</body>
<?php include_once("partes/scripts.php");?>
</html>