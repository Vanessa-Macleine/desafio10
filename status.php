<?php
<<<<<<< HEAD
$status= 'pendente';
=======
if($_SERVER["REQUEST_METHOD"]== "POST"){
    
$satus = $_POST['status'];
>>>>>>> e3e7a32c8b179a87ef0a8710e7139fadc32a9070




switch ($status) {
    case 'Pendente':
    case 'pendente':

       echo " Pedido Pendente";
        break;

    case 'Enviado':
    case 'enviado':
        echo " Pedido Enviado";
        break;
       

    case 'Entregue':
    case 'entregue':
        echo " Pedido Entregue";
        break;
        

    case 'Cancelado':
    case 'cancelado':
        echo " Pedido Cancelado";
        break;

    
     default:
     echo " Operação Inválida";
     break;
        
}
}

?>