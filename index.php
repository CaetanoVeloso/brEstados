<?php
$estados = array(
    'AC' => array(
        'img' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Acre" width = "50">',
        'name' => 'Acre',
        'capital' => 'Rio Branco',
        'area' => 164123,
        'population' => 942123,
        'density' => 6.34,
        'gpd' => 21000,
        'hdi' => 0.719
    ),

    'AL' => array(
        'name' => 'Alagoas',
        'capital' => 'Maceió',
        'area' => 27779,
        'population' => 3407562,
        'density' => 125.52,
        'gpd' => 73000,
        'hdi' => 0.683
    ),

    'AP' => array(
        'name' => 'Amapá',
        'capital' => 'Rio de Janeiro',
        'area' => 80213,
        'population' => 889123,
        'density' => 6.34,
        'gpd' => 21000,
        'hdi' => 0.719
    ),
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
foreach ($estados as $estado) {
    echo "<strong>Loja: {$estado['name']} </strong><br>";
    $table .= '<tr>';
        $table .= "<td>{$estado['img']}</td>";
        $table .= "<td>{$estado['name']}</td>";
        $table.= "<td>{$estado['capital']}</td>";
        $table.= "<td>{$estado['area']}</td>";
        $table.= "<td>{$estado['population']}</td>";
        $table.= "<td>{$estado['density']}</td>";
        $table.= "<td>{$estado['gpd']}</td>";
        $table.= "<td>{$estado['hdi']}</td>";
    $table .= '</tr>';
}


// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';
echo $table;
?>


<?php
// Espaço destinado a testes - favor ignorar


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

foreach ($array as $loja) {
    echo "<strong>Loja: {$loja['loja']} </strong><br>";

    foreach ($loja['itens'] as $itens) {
        echo "-Item: {$itens['produto']} <br>";
        echo "-Qtd: {$itens['qtd']} <br><br>";
    }
}
?>

<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="" width="">