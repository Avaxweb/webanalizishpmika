<?php
$link=mysql_connect('localhost','root','')or die ("NO ENCUENTRO EL ARCHIVO");
$db=mysql_select_db('comida', $link)or die ('ERROR DE CONEXION');
$NOMBRE=$_POST['NOMBRE'];
$USUARIO=$_POST['USUARIO'];

mysql_query("INSERT INTO dieta3 VALUES ('NOMBRE','USUARIO','CONTRASEÑA','CONTRASEÑAC') ",$link ) or die ("EROR GUARDAR");
echo'
<h2>REGISTRO HECHO </h2>
<h5> GRACIAS POR VISITARNOS</5>
'

;

?>