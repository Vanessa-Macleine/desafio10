<?php
$status= 'teste';




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

?>