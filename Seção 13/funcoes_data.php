<?php
# date -> exibir e formatar datas
# Y -> exibi ano completo 2020 y->exibe resumido 20
# H-> padrão 24h h->padrão 12h
echo $data = date("d/m/Y");
echo '<br>';
echo $data1 = date("d/m/y");
echo '<br>';
echo $data2 = date("Y-m-d");
echo '<br>';
echo $data3 = date("d/m/y h:i");
echo '<br>';
echo $data4 = date("d/m/y H:i");
echo '<br>';

# strtotime -> converte uma string em uma data
$data_inicial = '2015-04-02';
$data_final = '2015-04-05';
$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

#verificar a diferença em segundos
$diferencao_time = $time_final - $time_inicial;
echo $diferencao_time;
echo '<br>';

#verificar a diferençaem dias
$diaSegundos = 24*60*60;
$diferencao_dias = $diferencao_time / $diaSegundos;
echo $diferencao_dias;
echo '<br>';
