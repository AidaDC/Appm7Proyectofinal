<body>
<header>
<div class="header-tit">
  <div id="wrapper">
    <a href="<?= APP_W; ?>"><img class="logo" alt="Put your logo" src="<?= APP_W . 'pub/theme/k/' . $logo; ?>"/></a>
    <h1><?= $titol; ?></h1>
  </div>
</div>
<!-- from div header-tit -->
<div class="regist">
<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
* @var log y text_boton cambian segun si la variable sesion del usuario existe
*/  
  $log='home/login';
  $text_boton='Logearse';
  if(isset($_SESSION['user'])){
    $log='home/salir';
    $text_boton='Desconectarse';
  }

?>
  <form class="reg" name="formlog" method="post" action="<?= APP_W.$log?>">
  <?php
  /**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/  
    if($log=='home/login'){ ?> 
    <label for="nusuario">Nombre Usuario: <input type="text" name="usuario" value="" placeholder="nombre de usuario" required></label>
    <label for="password">Password: <input type="password" name="password" required></label>
    <input type="submit" class="bEntra" value="<?=$text_boton?>" id="logsend">

    <?php
    /**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/  
      }else{
        echo "Bienvenido ".$_SESSION['user'];
    ?>
    <input type="submit" class="bEntra" value="<?=$text_boton?>" id="logsend">
    <?php
}
    ?>
  </form>
  
</div>


</header>