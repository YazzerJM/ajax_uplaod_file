<?php

require("../conexion/cnx.php");

$nom = $_POST["txtnom"];
$foto = $_FILES["foto"];

// echo $nom.'---';
// foreach ($foto as $key => $value) {
//     echo $key.' '.$value.'->';
// }

if($foto["type"] == "image/jpg" || $foto["type"] == "image/jpeg"){
    $nombre_encriptado = md5($foto["tmp_name"]).".jpg";
    $ruta = "../fotos/".$nombre_encriptado;
    move_uploaded_file($foto["tmp_name"], $ruta);
    // mysql_query("insert into paciente (nom_pac, foto_pac) value ('',$nom,$nom_encriptado)");
}
