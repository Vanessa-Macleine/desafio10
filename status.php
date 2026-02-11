<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    
$satus = $_POST['status'];




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