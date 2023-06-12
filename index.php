
<?php
$estados = array(
    'AC' => array(
        'img' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="">',
        'name' => 'Acre',
        'capital' => 'Rio Branco',
        'area' => 164123,
        'population' => 942123,
        'density' => 6.34,
        'gpd' => 21000,
        'hdi' => 0.719),
        
    'AL' => array(
        'name' => 'Alagoas',
        'capital' => 'Maceió',
        'area' => 27779,
        'population' => 3407562,
        'density' => 125.52,
        'gpd' => 73000,
        'hdi' => 0.683),
        
    'AP' => array(
        'name' => 'Amapá',
        'capital' => 'Rio de Janeiro',
        'area' => 80213,
        'population' => 889123,
        'density' => 6.34,
        'gpd' => 21000,
        'hdi' => 0.719),
);

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
foreach($estados as $estado){
    foreach($estado as $key){
        $table.= '<tr>';
            $table.= '<td>'.$key.'</td>';
            $table.= "<td>-Item: {$key}</td>";
        $table .= '</tr>';
        /*
        $table.= "<td>{$key['capital']}</td>";
        $table.= "<td>{$key['area']}</td>";
        $table.= "<td>{$key['population']}</td>";
        $table.= "<td>{$key['density']}</td>";
        $table.= "<td>{$key['gpd']}</td>";
        $table.= "<td>{$key['hdi']}</td>";
        /*
        $table.= '<td>'.$estado[$key]['capital'].'</td>';
        $table.= '<td>'.$estado[$key]['area'].'</td>';
        $table.= '<td>'.$estado[$key]['population'].'</td>';
        $table.= '<td>'.$estado[$key]['density'].'</td>';
        $table.= '<td>'.$estado[$key]['gpd'].'</td>';
        $table.= '<td>'.$estado[$key]['hdi'].'</td>';
        $table.= '</tr>';
        */
    }
    /*
    $table .= '<tr>';
        $table .= "<td><$estado -> img}</td>";
        $table .= "<td>{$client->id}</td>";
        $table .= "<td>{$client->name}</td>";
        $table .= "<td>{$client->phone}</td>";
        $table .= "<td>{$client->address}</td>";
        $table .= "<td>{$client->mail}</td>";
        $table .= "<td><a class='bnt btn-info' href='client/edit/{$client->id}'>Editar</a></td>";
        $table .= "<td><a class='bnt btn-info' href='client/delete/{$client->id}'>Excluir</a></td>";
    $table .= '</tr>';
    */
}

// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';
?>


<?php 



$array = array(
    array(
        'loja' => 'Loja1', 
        'itens' => array(
            array(
                'produto' => 'bolsa', 'qtd' => 1
            ),
            array(
                'produto' => 'bolsa 3', 'qtd' => 3
            )
        )
    ),
    array(
        'loja' => 'Loja2', 
        'itens' => array(
            array(
                'produto' => 'bolsa 2', 'qtd' => 2
            )
        )
    )
);

foreach ( $array as $loja ) {
echo "<strong>Loja: {$loja['loja']} </strong><br>";

foreach ( $loja['itens'] as $itens ) {
echo "-Item: {$itens['produto']} <br>";
echo "-Qtd: {$itens['qtd']} <br><br>";
}
}
?>




<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="">