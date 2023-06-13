<?php
/*
// montagem do html da tabela
$table  = '<table>';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Selecionar Cliente</td>';
$table .= '<td>idCliente</td>';
$table .= '<td>Nome</td>';
$table .= '<td>Telefone</td>';
$table .= '<td>Endereço</td>';
$table .= '<td>Email</td>';
$table .= '<td>Editar</td>';
$table .= '<td>Excluir</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

// laço de repetição para inclusão dos dados na tabela
foreach($clients as $client){
    $table .= '<tr>';
        $table .= "<td><input type='checkbox' value='{$client->id}'></td>";
        $table .= "<td>{$client->id}</td>";
        $table .= "<td>{$client->name}</td>";
        $table .= "<td>{$client->phone}</td>";
        $table .= "<td>{$client->address}</td>";
        $table .= "<td>{$client->mail}</td>";
        $table .= "<td><a class='bnt btn-info' href='client/edit/{$client->id}'>Editar</a></td>";
        $table .= "<td><a class='bnt btn-info' href='client/delete/{$client->id}'>Excluir</a></td>";
    $table .= '</tr>';
}

// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';

// exibição na tela
echo $table;
*/
$table  = '<table>';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Selecionar Cliente</td>';
$table .= '<td>idCliente</td>';
$table .= '<td>Nome</td>';
$table .= '<td>Telefone</td>';
$table .= '<td>Endereço</td>';
$table .= '<td>Email</td>';
$table .= '<td>Editar</td>';
$table .= '<td>Excluir</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

$table .= '<tr>';
        $table .= "<td>1</td>";
        $table .= "<td>vasco</td>";
        $table .= "<td>389980345</td>";
        $table .= "<td>bfdr</td>";
        $table .= "<td>vasco@gmail.com</td>";
$table .= '</tr>';

    $table .= '</tbody>';
    $table .= '</table>';

    echo $table;
?>