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

	
			<h1  class='titulos'>Relatórios / Dashboards </h1>

					<h2 class ='sub_titulos'>	
					
					Os dashboards podem ser definidos como painéis de apresentação centralizada de um conjunto de informações
					(indicadores de desempenho, relatórios consolidado, dentre outros),  sendo uma ferramenta utilizada na avaliação 
					 de resultados de uma área especifica. Um ponto importante a se destacar sobre os painéis, é sobre a organização que devem sempre
					 apresentar os principais dados de forma rápida e prática.


					 </h2>		

					 <h2 class ='sub_titulos'>	
					
					A partir da definição das métricas, são muitas as  possibilidades de atingir um melhor resultado na itepretação dos dados 
					dispostos  nos dashboards com os indicadores de produtividade, qualidade, 
					performance, vendas, dentre outros.

				
				</h2>	

						
				
					<div class='cont-dashboards' >	
							<div  id ='cont-img-dash1' onmousemove='frm_img()' onmouseleave='remove_frm()' onclick='exibe_img()'>
								<img id='img_dash' src="img/bi_1.jpg" alt="">
								<p>
									 Relatório de Vendas, segmentado por Vendedor.
								</p>
							</div>			
							
					
							<div class='info-dashboards'>
								<p>
							 
								</p>
							</div>

					</div>
					
					

						<div class='cont-dashboards' >	
							<div id ='cont-img-dash2' onmousemove='frm_img2()' onmouseleave='remove_frm2()'>
								<img id='img_dash2' src="img/bi_2.jpg" alt="">
								<p>
								Relatório de Vendas por cliente 
								</p>
							</div>			
							
					
							<div class='info-dashboards'>
								<p>
								Para realizar o gerenciamento das informações e visualição de dados, é disponibilizado um conjunto de relatórios em listagem 
								e modelos de painéis personalizados para download.
								</p>
								<p>
								Ao acessar a área de usário, acesse a opção relatórios  para fazer o download dos arquivos no formato - pbix  (POWER BI)
								</p>
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


function frm_img(){
	$('#img_dash').css('opacity','0.5')	
	$('#img_dash').css('transition','0.5s')	
}

function remove_frm(){
	$('#img_dash').css('opacity','1')	
	$('#img_dash').css('transition','0.5s')	
}

function frm_img2(){
	$('#img_dash2').css('opacity','0.5')	
	$('#img_dash2').css('transition','0.5s')	
}

function exibe_img(){
	location.href =  'img/dashboard1.PNG'
}

function remove_frm2(){
	$('#img_dash2').css('opacity','1')	
	$('#img_dash2').css('transition','0.5s')	
}

</script>


</body>
</html>