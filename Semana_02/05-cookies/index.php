<?php
//Cria um cookie
setcookie('name','Marcos Rodrigues', time() + 3600, '/');

//forma alternativa 
//$_COOKIE['name'] = 'teste'; 

//destroi cookie
//setcookie('name','Marcos Rodrigues', time() - 3600, '/');

/*die();
unset($_COOKIE['name']);//funçao para apagar indices,valores
*/


//Verifica se o indice existe
if(isset($_COOKIE['name'])){
    //exibe o valor do indice    
    echo $_COOKIE['name'];

}
?>
