<?php
// Criação do arranjo com os dados dos estados
$estados = array(
    'AC' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
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
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
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
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg',
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
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
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
    ),
    'BA' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
        'uf' => 'Bahia',
        'abreviation' => 'BA',
        'capital' => 'Salvador',
        'area' => 564692.7,
        'population' => 15150143,
        'density' => 24.46,
        'pib' =>     245025000,
        'pib_total' =>    4.1,
        'pib_capita' => 16115.89,
        'idh' => 0.660,
        'alfabet' => 87,
        'inf_mort' => 17.3,
        'expec_vida' => 73.5
    ),

    'CE' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg',
        'uf' => 'Ceará',
        'abreviation' => 'CE',
        'capital' => 'Salvador',
        'area' => 148825.6,
        'population' => 8867448,
        'density' => 54.40,
        'pib' => 1306121000,
        'pib_total' => 2.2,
        'pib_capita' => 14669.14,
        'idh' => 0.682,
        'alfabet' => 84.8,
        'inf_mort' => 14.4,
        'expec_vida' => 73.8
    ),

    'DF' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
        'uf' => 'Distrito Federal',
        'abreviation' => 'DF',
        'capital' => 'Brasília',
        'area' => 5882.1,
        'population' => 2867869,
        'density' => 400.73,
        'pib' => 215613000,
        'pib_total' => 3.6,
        'pib_capita' => 73971.05,
        'idh' => 0.824,
        'alfabet' => 97.4,
        'inf_mort' => 10, 5,
        'expec_vida' => 78.1
    ),

    'ES' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg',
        'uf' => 'Espírito Santo',
        'abreviation' => 'ES',
        'capital' => 'Vitória',
        'area' => 46077.5,
        'population' => 3894899,
        'density' => 73.97,
        'pib' => 120363000,
        'pib_total' => 2,
        'pib_capita' => 30627.45,
        'idh' => 0.740,
        'alfabet' => 93.8,
        'inf_mort' => 8.8,
        'expec_vida' => 78.2
    ),

    'GO' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg',
        'uf' => 'Goiás',
        'abreviation' => 'GO',
        'capital' => 'Goiânia',
        'area' => 340086.7,
        'population' => 6551322,
        'density' => 16.52,
        'pib' => 173632000,
        'pib_total' => 2.9,
        'pib_capita' => 26265.32,
        'idh' => 0.735,
        'alfabet' => 93.5,
        'inf_mort' => 14.9,
        'expec_vida' => 74.2
    ),

    'MA' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg',
        'uf' => 'Maranhão',
        'abreviation' => 'MA',
        'capital' => 'São Luís',
        'area' => 1331983.3,
        'population' => 6861924,
        'density' => 18.38,
        'pib' => 78475000,
        'pib_total' => 1.3,
        'pib_capita' => 11366.23,
        'idh' => 0.639,
        'alfabet' => 83.3,
        'inf_mort' => 21.3,
        'expec_vida' => 70.6
    ),

    'MT' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
        'uf' => 'Mato Grosso',
        'abreviation' => 'MT',
        'capital' => 'Cuiabá',
        'area' => 903357.9,
        'population' => 3236578,
        'density' => 3.10,
        'pib' => 107418000,
        'pib_total' => 1.8,
        'pib_capita' => 32894.96,
        'idh' => 0.725,
        'alfabet' => 93.5,
        'inf_mort' => 16.9,
        'expec_vida' => 74.2
    ),

    'MS' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
        'uf' => 'Mato Grosso do Sul',
        'abreviation' => 'MS',
        'capital' => 'Campo Grande',
        'area' => 357125.0,
        'population' => 2630098,
        'density' => 6.34,
        'pib' => 83082000,
        'pib_total' => 1.4,
        'pib_capita' => 31337.22,
        'idh' => 0.729,
        'alfabet' => 93.7,
        'inf_mort' => 14.0,
        'expec_vida' => 75.5
    ),

    'MG' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
        'uf' => 'Minas Gerais',
        'abreviation' => 'MG',
        'capital' => 'Belo Horizonte',
        'area' => 586528.3,
        'population' => 20777672,
        'density' => 32.79,
        'pib' => 519326000,
        'pib_total' => 8.7,
        'pib_capita' => 24884.94,
        'idh' => 0.731,
        'alfabet' => 93.8,
        'inf_mort' => 10.9,
        'expec_vida' => 77.2
    ),

    'PA' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg',
        'uf' => 'Pará',
        'abreviation' => 'PA',
        'capital' => 'Belém',
        'area' => 1247689.5,
        'population' => 8101180,
        'density' => 5.58,
        'pib' => 130883000,
        'pib_total' => 2.2,
        'pib_capita' => 16009.98,
        'idh' => 0.646,
        'alfabet' => 90.7,
        'inf_mort' => 16.6,
        'expec_vida' => 72.1
    ),

    'PB' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg',
        'uf' => 'Paraíba',
        'abreviation' => 'PB',
        'capital' => 'João Pessoa',
        'area' => 56439.8,
        'population' => 3950359,
        'density' => 63.71,
        'pib' => 56140000,
        'pib_total' => 0.9,
        'pib_capita' => 14133.32,
        'idh' => 0.658,
        'alfabet' => 83.7,
        'inf_mort' => 16.1,
        'expec_vida' => 73.2
    ),

    'PR' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg',
        'uf' => 'Paraná',
        'abreviation' => 'PR',
        'capital' => 'Curitiba',
        'area' => 199314.9,
        'population' => 11112062,
        'density' => 51.48,
        'pib' => 376960000,
        'pib_total' => 6.3,
        'pib_capita' => 33768.62,
        'idh' => 0.749,
        'alfabet' => 95.5,
        'inf_mort' => 9.3,
        'expec_vida' => 77.1
    ),

    'PE' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
        'uf' => 'Pernambuco',
        'abreviation' => 'PE',
        'capital' => 'Recife',
        'area' => 98311.6,
        'population' => 9297861,
        'density' => 85.58,
        'pib' => 156955000,
        'pib_total' => 2.6,
        'pib_capita' => 16795.34,
        'idh' => 0.673,
        'alfabet' => 87.2,
        'inf_mort' => 12.7,
        'expec_vida' => 73.9
    ),

    'PI' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg',
        'uf' => 'Piauí',
        'abreviation' => 'PI',
        'capital' => 'Teresina',
        'area' => 251529.2,
        'population' => 3198185,
        'density' => 11.95,
        'pib' => 39148000,
        'pib_total' => 0.7,
        'pib_capita' => 12218.51,
        'idh' => 0.646,
        'alfabet' => 82.8,
        'inf_mort' => 19.1,
        'expec_vida' => 71.1
    ),

    'RJ' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
        'uf' => 'Rio de Janeiro',
        'abreviation' => 'RJ',
        'capital' => 'Rio de Janeiro',
        'area' => 43696.1,
        'population' => 16497395,
        'density' => 352.05,
        'pib' => 659137000,
        'pib_total' => 11,
        'pib_capita' => 39826.95,
        'idh' => 0.761,
        'alfabet' => 97.3,
        'inf_mort' => 11.5,
        'expec_vida' => 76.2
    ),

    'RN' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
        'uf' => 'Rio Grande do Norte',
        'abreviation' => 'RN',
        'capital' => 'Natal',
        'area' => 52796.8,
        'population' => 3419550,
        'density' => 56.88,
        'pib' => 57250000,
        'pib_total' => 1,
        'pib_capita' => 16631.86,
        'idh' => 0.684,
        'alfabet' => 85.3,
        'inf_mort' => 14.7,
        'expec_vida' => 75.7
    ),

    'RS' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
        'uf' => 'Rio Grande do Sul',
        'abreviation' => 'RS',
        'capital' => 'Porto Alegre',
        'area' => 281748.5,
        'population' => 11228091,
        'density' => 38.49,
        'pib' => 381985000,
        'pib_total' => 6.4,
        'pib_capita' => 33960.36,
        'idh' => 0.746,
        'alfabet' => 96.8,
        'inf_mort' => 9.6,
        'expec_vida' => 77.8
    ),

    'RO' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg',
        'uf' => 'Rondônia',
        'abreviation' => 'RO',
        'capital' => 'Porto Velho',
        'area' => 237576.2,
        'population' => 1755015,
        'density' => 6.46,
        'pib' => 36563000,
        'pib_total' => 0.6,
        'pib_capita' => 20677.95,
        'idh' => 0.69,
        'alfabet' => 93.3,
        'inf_mort' => 20.0,
        'expec_vida' => 71.3
    ),

    'RR' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
        'uf' => 'Roraima',
        'abreviation' => 'RR',
        'capital' => 'Boa Vista',
        'area' => 224299.0,
        'population' => 500826,
        'density' => 1.74,
        'pib' => 10354000,
        'pib_total' => 0.2,
        'pib_capita' => 20476.71,
        'idh' => 0.707,
        'alfabet' => 93.4,
        'inf_mort' => 17.2,
        'expec_vida' => 71.5
    ),

    'SC' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
        'uf' => 'Santa Catarina',
        'abreviation' => 'SC',
        'capital' => 'Florianópolis',
        'area' => 95346.2,
        'population' => 6734568,
        'density' => 61.53,
        'pib' => 249073000,
        'pib_total' => 4.2,
        'pib_capita' => 36525.28,
        'idh' => 0.774,
        'alfabet' => 97.2,
        'inf_mort' => 9.2,
        'expec_vida' => 79.1
    ),

    'SP' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg',
        'uf' => 'São Paulo',
        'abreviation' => 'SP',
        'capital' => 'São Paulo',
        'area' => 248209.4,
        'population' => 44169350,
        'density' => 162.93,
        'pib' => 1939890000,
        'pib_total' => 32.4,
        'pib_capita' => 43694.68,
        'idh' => 0.783,
        'alfabet' => 97.2,
        'inf_mort' => 9.9,
        'expec_vida' => 78.1
    ),

    'SE' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
        'uf' => 'Sergipe',
        'abreviation' => 'SE',
        'capital' => 'Aracaju',
        'area' => 21910.3,
        'population' => 2227294,
        'density' => 89.81,
        'pib' => 39973000,
        'pib_total' => 0.7,
        'pib_capita' => 17858.73,
        'idh' => 0.665,
        'alfabet' => 90.4,
        'inf_mort' => 15.1,
        'expec_vida' => 72.8
    ),

    'TO' => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
        'uf' => 'Tocantins',
        'abreviation' => 'TO',
        'capital' => 'Palmas',
        'area' => 277720.5,
        'population' => 1608384,
        'density' => 5.79,
        'pib' => 28402000,
        'pib_total' => 0.5,
        'pib_capita' => 17745.59,
        'idh' => 0.699,
        'alfabet' => 90.4,
        'inf_mort' => 16.7,
        'expec_vida' => 72.4
    )

);

// Criação da tabela
$table  = '<table border ="1px" style="text-align:center;">';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Bandeira</td>';
$table .= '<td>Unidade Federativa</td>';
$table .= '<td>Abreviação</td>';
$table .= '<td>Sede de Governo</td>';
$table .= '<td>Área (km²)</td>';
$table .= '<td>População (2014)</td>';
$table .= '<td>Densidade (2005)</td>';
$table .= '<td>PIB (2015)</td>';
$table .= '<td>(%total)(2015)</td>';
$table .= '<td>PIB per capita (R$) (2015)</td>';
$table .= '<td>IDH (2010)</td>';
$table .= '<td>Alfabetização (2016)</td>';
$table .= '<td>Mortalidade infantil (2016)</td>';
$table .= '<td>Expectativa de vida (2016)</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

// Laço de repetição para inclusão dos dados na tabela
foreach ($estados as $estado) {
    $table .= '<tr>';
    $table .= "<td><img src='{$estado['img']}' alt='{$estado['uf']}' width='50'></td>";
    $table .= "<td>{$estado['uf']}</td>";
    $table .= "<td>{$estado['abreviation']}</td>";
    $table .= "<td>{$estado['capital']}</td>";
    $table .= "<td>{$estado['area']}</td>";
    $table .= "<td>{$estado['population']}</td>";
    $table .= "<td>{$estado['density']}</td>";
    $table .= "<td>{$estado['pib']}</td>";
    $table .= "<td>{$estado['pib_total']}</td>";
    $table .= "<td>{$estado['pib_capita']}</td>";
    $table .= "<td>{$estado['idh']}</td>";
    $table .= "<td>{$estado['alfabet']}%</td>";
    $table .= "<td>{$estado['inf_mort']}‰</td>";
    $table .= "<td>{$estado['expec_vida']} anos</td>";
    $table .= '</tr>';
}

// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';
echo $table;
?>