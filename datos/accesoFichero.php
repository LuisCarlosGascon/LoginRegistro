<?php

function leeFichero():array{
    $fp= file_get_contents("./../datos/datos.csv");
    $array=explode("\n",$fp);
    $cont=0;
    foreach($array as $v)
    {  
        $datos[explode(";",$v)[0]]=explode(";",$v);  
    }
    
    return $datos; 
}

function existeUsuario($usuario,$passw,$lista){ 
    $salida=true;
    if (!(isset($lista[$usuario]) && $lista[$usuario][1]==$passw)){
      $salida=false;
    }
    return $salida;
  }

function nuevoUsuario($usuario,$passw,$rol,$lista){
    
    if(isset($lista[$usuario])){
        header("Location:./../vista/nuevoUsuario.php");
    }else{
        $nuevo=file_get_contents("./../datos/datos.csv");
        $nuevo.="\n$usuario;$passw;$rol";
        file_put_contents("./../datos/datos.csv",$nuevo);
        header("Location:./../vista/administra.php");
    }  
}
?>
