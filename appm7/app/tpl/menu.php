<?php
     /**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
 *A *description* dependiendo de si el rol del usuario es administrador o no devuelve un menu o otro.
*/         

    if(isset($_SESSION['rol'])){

    $menu_mostrar='<div id="menuMostrar"><div><a href="'.APP_W.'home">Inicio</a></div>';

        if($_SESSION['rol'] == 1){


        $menu_mostrar.='<div><a href="'.APP_W.'modificar">Modificar Usuario</a></div>
        <div><a href="'.APP_W.'regeliminar">Eliminar Usuario</a></div>
        <div><a href="'.APP_W.'Mapas/mapa">Mapa</a></div>';

        }else{

          $menu_mostrar.='<div><a href="'.APP_W.'modificar">Modificar Usuario</a></div>
        <div><a href="'.APP_W.'insertViaje/reservas">Reservar Viaje</a></div>
        <div><a href="'.APP_W.'Mapas/mapa">Mapa</a></div>';   


        }


        $menu_mostrar.="</div>";
        



    }else{

    $menu_mostrar='<div id="menuMostrar"><div><a href="'.APP_W.'home">Inicio</a></div><div><a href="'.APP_W.'reg">Registro</a></div><div><a href="'.APP_W.'Mapas/mapa">Mapa</a></div></div>';



    }
echo $menu_mostrar;
?>