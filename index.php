<?php
$estados = array(
    'AC' => array(
        'img' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Acre" width = "50">',
        'uf' => 'Acre',
        'abreviation' => 'AC',
        'capital' => 'Rio Branco',
        'area' => 164122.2,
        'population' => 795145,
        'density' => 4.30,
        'pib' => 13622000,
        'pib_total' => 0.2,
        'pib_capita' => 16953.46,
        'idh' => 0.663,
        'alfabet' => 86.9,
        'inf_mort' => 17.0,
        'expec_vida' => 73.9		
    ),
    'AL' => array(
        'img' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Alagoas" width = "50">',
        'uf' => 'Alagoas',
        'abreviation' => 'AL',
        'capital' => 'Maceió',
        'area' => 27767.7,
        'population' => 3327551,
        'density' => 108.61,
        'pib' => 46364000,
        'pib_total' => 0.8,
        'pib_capita' => 13877.53,
        'idh' => 0.631,
        'alfabet' => 80.6,
        'inf_mort' => 19.5,
        'expec_vida' => 71.6
    ),
    'AP' => array(
        'img' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Amapá" width = "50">',
        'uf' => 'Amapá',
        'abreviation' => 'AP',
        'capital' => 'Macapá',
        'area' => 142814.6,
        'population' => 756500,
        'density' => 4.16,
        'pib' => 13861000,
        'pib_total' => 0.2,
        'pib_capita' => 18079.54,
        'idh' => 0.708,
        'alfabet' => 95,
        'inf_mort' => 23.2,
        'expec_vida' => 73.9
    ),
    'AM' => array(
        'img' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Amazonas" width="50">',
        'uf' => 'Amazonas',
        'abreviation' => 'AM',
        'capital' => 'Manaus',
        'area' => 1570745.7,
        'population' => 3893763,
        'density' => 2.05,
        'pib' => 86560000,
        'pib_total' => 1.4,
        'pib_capita' => 21978.95,
        'idh' => 0.674,
        'alfabet' => 93.1,
        'inf_mort' => 18.2,
        'expec_vida' => 71.9
)
);
// Criação da tabela
$table  = '<table>';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Bandeira</td>';
$table .= '<td>Unidade Federativa</td>';
$table .= '<td>Abreviação</td>';
$table .= '<td>Sede de Governo</td>';
$table .= '<td>Area</td>';
$table .= '<td>População</td>';
$table .= '<td>Densidade</td>';
$table .= '<td>PIB</td>';
$table .= '<td>(%total)</td>';
$table .= '<td>Pib per capta</td>';
$table .= '<td>IDH</td>';
$table .= '<td>Alfabetização</td>';
$table .= '<td>Mortalidade Infantil</td>';
$table .= '<td>Expectativa de vida</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

// laço de repetição para inclusão dos dados na tabela
foreach ($estados as $estado) {
    $table .= '<tr>';
        $table .= "<td>{$estado['img']}</td>";
        $table .= "<td>{$estado['uf']}</td>";
        $table.= "<td>{$estado['abreviation']}</td>";
        $table.= "<td>{$estado['capital']}</td>";
        $table.= "<td>{$estado['area']}</td>";
        $table.= "<td>{$estado['population']}</td>";
        $table.= "<td>{$estado['density']}</td>";
        $table.= "<td>{$estado['pib']}</td>";
        $table.= "<td>{$estado['pib_total']}</td>";
        $table.= "<td>{$estado['pib_capita']}</td>";
        $table.= "<td>{$estado['idh']}</td>";
        $table.= "<td>{$estado['alfabet']}</td>";
        $table.= "<td>{$estado['inf_mort']}</td>";
        $table.= "<td>{$estado['expec_vida']}</td>";
    $table .= '</tr>';
}


// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';
echo $table;
?>
<br> <br> <br> <br> <br> <br> <br> <br>


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