<?php
function validaCampos($usuario,$passw){
    
    if((($usuario=="")||($passw==""))){
      header("Location: ./../vista/login.html") ;
    }
    
}

?>