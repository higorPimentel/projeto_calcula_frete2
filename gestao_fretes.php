<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fast Analyze - Soluções em gestão de fretes</title>


	<!--<link rel="stylesheet" href="css/bootstrap-flex.css"> -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/form-flex-responsive.css">
	<link rel="stylesheet" href="css/frmt_index.css">
</head>

<body>
	
	<?php include("includes/header.php"); ?>


	<div id="container_conteudo">	

	
			<h1  class='titulos'>Gestão de frete</h1>

					<h2 class ='sub_titulos'>				
					O módulo gestão de fretes permite realizar o cadastro das transportadoras e suas principais 
							particularidades (Tipo de produto transportado, Tipo de cubagem), Cadastro de tabelas de fretes, Realizar  simulaçoes de fretes de forma unitária, ou em lote (com um 
							volume de dados). Todas as analises estarão baseadas nas informações atreladas a transportadora cadastrada, e sendo uma dasopções as analises entre as trasnportadoras cadastradas
					</h2>		

						<h1 class='titulos'>Detalhamento de Recursos</h1> 
						
							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Cadastro das transportadoras </div>
											<div class ='itm_list'> O cadastro do transportador define regras utilizadas no comportamento
											das analises realizada. Um transportador cadastrado como isento de cubagem por exemplo, determina
											que em uma simulação seja considerado somente o peso real da mercadoria (peso nf), desconsiderando a cubagem 
											para formular o frete peso.Ao realizar o cadastro
											 É possível vincular uma tabela de precificação, ou deixar para executar essa tarefa em um segundo momento.
								 		</div>
							</div>

							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Cadastro de Tabelas de Frete</div>
											<div class ='itm_list'> Há duas opções de cadastro de tabelas. Uma das duas formas é com a importação
											de um arquivo no formato 'csv' conténdo os dados da precificação definida, para esse caso é necessário utilizar um layout padrão											
											com o preenchimento dos dados. Também existe a possibilidade de incluir os trechos de uma tabela de precificiação manualmente,
											coletando os dados através de um formulrio, uma opção ideal para o cadastro de tabelas com poucos trechos. É definido uma nomeclatura 
											única para cada tabela cadastrada, esas estarão disponiveis para serem vinculadas ao transportadores cadastrados.
										</div>		
							</div>	
	
							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Simualçoes de fretes</div>
											<div class ='itm_list'>
											A cotação instântanea (simplificado) é ideal para realizar o comparativo entre duas precificações, 
											ou avaliar diferentes tipos de cenários baseado na mesma tabela, com a variação dos dados coletado
											 no formulário de entrada.
											As cotações em lote possibilitam o cálculo com uma grande quantidade de dados (em linhas), tendo a opção de exportar um 
											relatório em listagem com detalhamento do cálculo realizado
										</div>
							</div>	

							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Comparativos transportadoras</div>
											<div class ='itm_list'>
											
										</div>
							</div>	

							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Cadastro Prazo de entregas</div>
											<div class ='itm_list'></div>
							</div>	




							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Relatórios</div>
											<div class ='itm_list'>
												utilize os relatórios disponiveis, ou solicite um relatório especifico com os dados disponiveis


											</div>
							</div>	



							<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;Relatórios</div>
											<div class ='itm_list'>
												utilize os relatórios disponiveis, ou solicite um relatório especifico com os dados disponiveis


											</div>
							</div>			






			<div id='msg_sucesso'>....</div>
			<div id='msg_erro'>...</div>
	 </div> 

<?php include("includes/footer.php"); ?> 


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/frmt.js"></script>
<script type="text/javascript" src="js/requisicoes.js"></script>
<script>


window.addEventListener('load',executa_teste)

 
		let frm_registro_contato = document.querySelector('#frm_registro_contato')
		frm_registro_contato.addEventListener("focus",insere_focus,true)
		frm_registro_contato.addEventListener("blur",remove_focus,true)
 

function acessa_simulacoes(){
	alert('ola')
}


function insere_focus(event){
		$(`#${event.srcElement.id}`).css('boxShadow','0px 0px 10px  #2F4F4F')	
	
}

 
function remove_focus(event){
		$(`#${event.srcElement.id}`).css('boxShadow','none')
}



function executa_teste(){
	x = 0;
	y = 0;
	inibe_msg ()
	//teste()
	

}


function teste(){
	
	mtz_tst = ['higor','maria','paola']
	
	mtz_tst.push('osvaldo')

	console.log(mtz_tst)

}


function inibe_msg(){

	if(x == 30) {
		x = 0;
		y = 0;
		$('#caract_digit').css('visibility','hidden') ;
		inibe_msg_2()
		return
	}

	
	setTimeout(() => {
		exibe_msg()
	}, 100);
	x++;
	y++;
	monta_text ()
	manipula_caract()
}

function exibe_msg(){			
	
	setTimeout(() => {
		
		inibe_msg()
	}, 100);
	x++;
	y++;
	monta_text ()
	manipula_caract()
	
}




function inibe_msg_2(){

	//if(x == 100) {
	//	return
	//}


	setTimeout(() => {
		exibe_msg_2()
	}, 100);
	x++;
	y++;
	monta_sub_text ()
	manipula_caract2()
}


	function exibe_msg_2(){			

	setTimeout(() => {
		
		inibe_msg_2()
	}, 100);
	x++;
	y++;
	monta_sub_text ()
	manipula_caract2()

	}



		function manipula_caract(){

			if(y == 3){
				$('#caract_digit').css('visibility','hidden') 
			} else if (y == 6) {
					$('#caract_digit').css('visibility','visible')
					y = 0			
				}

		}

		function manipula_caract2(){

				if(y == 3){
					$('#caract_digit2').css('visibility','hidden') 
				} else if (y == 6) {
						$('#caract_digit2').css('visibility','visible')
						y = 0			
					}

		}
		
		function monta_text (){

			array_caract_titulo = ['F','A','S','T',' ','A','N','A','L','Y','Z','E']	
			array_titulo = []

			for (let i = 0 ; i < x - 10; i++) {
				array_titulo.push(array_caract_titulo[i])
				
			}

				$('#text_titulo').html(array_titulo)
									
					
		}

		//Disponibiliza um conjunto de ferramentas e soluções para análise e gestão de fretes com uma maior praticidade e eficiência.
		function monta_sub_text (){

		array_caract_titulo = ['D','i','s','p','o','n','i','b','i','l','i','z','a',' ','u','m',' ','c','o','n','j','u','n','t','o'
		,' ','d','e',' ','f','e','r','r','a','m','e','n','t','a','s',' ','e',' ','s','o','l','u','ç','õ','e','s',' ','p','a','r','a'
		,' ','a','n','á','l','i','s','e',' ','e',' ','g','e','s','t','ã','o',' ','d','e',' ','f','r','e','t','e','s',' ','c','o','m'
		,' ','p','r','a','t','i','c','i','d','a','d','e',' ','e',' ','e','f','i','c','i','ê','n','c','i','a'	
		]	
		array_titulo = []

		for (let i = 0 ; i < x - 10; i++) {
			array_titulo.push(array_caract_titulo[i])
			
		}

			$('#text_subtitulo').html(array_titulo)
								
		
}


</script>


</body>
</html>