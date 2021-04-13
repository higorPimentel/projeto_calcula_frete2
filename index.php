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

		<div id="conteudo_inicio">


				
				<img  id='img_photo' src="img/1.jpg" alt="">
				<img  id='img_forma' src="img/fundo_image2.png" alt="">		

				<div id='barra_incial'></div>
				
					<div id="container_cn1">		
				
						<div id='espaço_block'>Disponibiliza um conjunto de ferramentas e soluções para análise e gestão de fretes com uma maior praticidade e eficiência.</div>	
					
						<div class='titulo_inicio' id='text_titulo'></div>							
						<div class='titulo_inicio' id='caract_digit'>|</div> 	
						<div>
							<div class='subtitulo_inicio' id='text_subtitulo'></div>
							<div class='subtitulo_inicio' id='caract_digit2'>|</div> 		
						</div>					
						
						<!-- <div class='titulo_inicio' id='text_titulo'> Fast Analyze</div>	
						<div class='titulo_inicio' id='caract_digit'>|</div> 				
						
						
						<h2 id='text_info'>Disponibiliza um conjunto de ferramentas e soluções para análise e gestão de fretes com uma maior praticidade e eficiência.</h2>				
						 -->

									<div id='container_btns_inicio'>
										<input class='btns_inicio' id='btn_saiba_mais' type="button" value ='Saiba Mais'>
										<input class='btns_inicio' id='btn_cad' type="button" value ='Cadastre-Se	'>
									</div>
						
					</div>
				
				
		</div>			


		<div id="container_cn3">
	
			<div class='info_container_3'>
				<a href="#">
					<h1 class='titulos' id='titulo_1'>Gestão de fretes</h1>

						<h2 class='sub_titulos' id='sub_titulo_1'>O módulo gestão de fretes permite realizar o cadastro das transportadoras e suas principais 
							particularidades (Tipo de produto transportado, Tipo de cubagem).Cadastro de tabelas de fretes, cotação e simulaçoes de fretes.
							<!-- 
							(unitário ou calculo em lotes).
							Históricos de precificações cadastradas.
							-->
						</h2>
				</a>		
			</div>	
	
			<div>
				<img id='img_tablet' src="img/tablet3.png" alt="">
			</div>		
		</div>
	
			<div id="container_cn2">

			<a href="demonstracoes.php">
				<div id="opc_simulacoes" class="frmt_ferramentas">
						<h1>Simulador de frete</h1>
							<img src="ico/simulacoes.svg" alt="">
								<p>
								As opções de simulações possibilitam o cálculo de frete de forma unitária, ou em lote (com um volume de dados maior).
								Realize o comparativo de calculo entre duas tabelas cadastradas, 
								</p>
								
					</div>
			</a>

			<a href="relatorios.php">
					<div id="opc_indicadores" class="frmt_ferramentas">
						<h1>Relatórios / Dashboards </h1>
							<img src="img/ico_indicadores2.svg" alt="">
								<p>
									Para realizar o gerenciamento das informações e visualição de dados, é disponibilizado conjunto de relatórios em listagem 
									e painéis personalizados  para suporte as estratégias.
								</p>
								
					</div>
			</a>
					
			</div>

		<div id="container_cn4">
			
		

			<form id="frm_registro_contato">					
			
			<div class='bloco_frm_contato'>
		    	<h1>Dúvidas ou Sugestões</h1>
				<div class="row">	
					<div class="grupo_cxs col-4" >
						<label class='lb_text' for="">Nome</label>
						<input class="cx_text" type="text" id="cx_nome_contato">	
					</div>
					<div class="grupo_cxs col-4" >
						<label class='lb_text' for="">Email</label>
						<input class="cx_text" type="text" id="email_contato" >	
					</div>	
				</div>	

				<div class="row">	
					<div class="grupo_cxs col-4" >
						<label class='lb_text' for="">Telefone</label>
						<input class="cx_text" type="text" id="telefone_contato">	
					</div>
					<div class="grupo_cxs col-4" >
						<label class='lb_text' for="">Assunto</label>
						<input class="cx_text" type="text" id="assunto">	
					</div>	
				</div>	
				<div class="row">	
					<div class="grupo_cxs col-6" >
						<label class='lb_text' for="">Mensagem</label>
						<textarea class="cx_text" id="cx_mensagem_contato" ></textarea>	
					</div>
				</div>	


				<div class="row">	
					<div class="grupo_cxs col-5" >
				 	<input  onclick = "dados_sugestoes()" type="button" value="Enviar Mensagem" class ='btns' id='btn_sugestao'>
				
					</div>
				</div>	
			</div>	

			<div class='bloco_frm_contato_2'>
			<h1>Contato</h1>
				<div class="row">	
					<div class="grupo_cxs col-6" >
						<label class='info_contato' for="">Fone: &#9743; (19) 9 9589-1586  </label>
					</div>
				</div>
				<div class="row">	
					<div class="grupo_cxs col-6" >
						<label class='info_contato' for="">Email: &#9993; higor.pimentel@gestaodefretes.website </label>
					</div>
				</div>

				<div class="row">	
					<div class="grupo_cxs col-6" >
						<label class='info_contato' for="">Endereço:  Av. Andrade Neves, S/N - Centro</label>
					</div>
				</div>

				
				<div class="row">	
					<div class="grupo_cxs col-6" >
						<label class='info_contato' for="">Campinas - SP</label>
					</div>
				</div>
			
			</div>		


			</form>
			
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

 
		let container_cn3 =  document.querySelector('#container_cn3')
		container_cn3.addEventListener("mouseleave", foco_opc_gestao_frete)

		let frm_registro_contato = document.querySelector('#frm_registro_contato')
		frm_registro_contato.addEventListener("focus",insere_focus,true)
		frm_registro_contato.addEventListener("blur",remove_focus,true)
 

function foco_opc_gestao_frete(){
			$("#container_cn3").css('backgroundcolor','blue')
}


// # #2F4F4F

function insere_focus(event){
		$(`#${event.srcElement.id}`).css('boxShadow','0px 0px 5px  #8B7B8B')	
	
}

 
function remove_focus(event){
		$(`#${event.srcElement.id}`).css('boxShadow','none')
}




</script>


</body>
</html>