<?php 


$dados = json_decode($_POST['dados_calculo_lote_php']);
$data_atual = date('d_m_Y_H_i_s');
$arquivo_gerado = "relatorios/tabela_calculo_lotes_$data_atual.csv";



// TRANSFORMANDO objeto EM ARRAY ASSOC
$qtd_lns = count($dados);

$ind0 = 0;
$ind1 = 1;
$ind2 = 2;
$ind3 = 3;
$ind4 = 4;
$ind5 = 5;
$ind6 = 6;
$ind7 = 7;
$ind8 = 8;
$ind9 = 9;
$ind10 = 10;
$ind11 = 11;
$ind12 = 12;
$ind13 = 13;
$ind14 = 14;
$ind15 = 15;
$ind16 = 16;
$ind17 = 17;
$ind18 = 18;
$ind19 = 19;


for ($i=0; $i < $qtd_lns ; $i++) { 




	$arr[] = array('0' => ($dados[$i] -> $ind0), 
				   '1' => ($dados[$i] -> $ind1),	
				   '2' => ($dados[$i] -> $ind2),	
				   '3' => ($dados[$i] -> $ind3),	
				   '4' => ($dados[$i] -> $ind4),	
				   '5' => ($dados[$i] -> $ind5),	
				   '6' => ($dados[$i] -> $ind6),	
				   '7' => ($dados[$i] -> $ind7),	
				   '8' => ($dados[$i] -> $ind8),	
				   '9' => ($dados[$i] -> $ind9),	
				   '10' => ($dados[$i] -> $ind10),	
				   '11' => ($dados[$i] -> $ind11),	
				   '12' => ($dados[$i] -> $ind12),	
				   '13' => ($dados[$i] -> $ind13),	
				   '14' => ($dados[$i] -> $ind14),	
				   '15' => ($dados[$i] -> $ind15),	
				   '16' => ($dados[$i] -> $ind16),	
				   '17' => ($dados[$i] -> $ind17),	
				   '18' => ($dados[$i] -> $ind18),	
				   '19' => ($dados[$i] -> $ind19),	
				

	);	

}	



$cabecalho_lista = array('Cod Origem','Cod Destino','Cidade Origem','Cidade Destino','Vlr. Nota Fiscal','Peso Real','Total Cubagem','Peso Considerado','Fx. Peso Cobrado','Frete Peso','Frete Valor','Pedagio','Gris','Trt','Tas','Cat','Tde','Aliq. ICMS %','Vlr. ICMS','Frete Total');



copy("relatorios/tabela_calculo_lotes.csv",$arquivo_gerado);

/*
$lista = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

*/


array_unshift($arr, $cabecalho_lista);


$fp = fopen($arquivo_gerado, 'w');

foreach ($arr as $linha) {
    fputcsv($fp, $linha);
}

fclose($fp);


echo ($arquivo_gerado);
//echo(print_r(strlen($dados)));




 ?>