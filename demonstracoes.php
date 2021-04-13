<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fast Analyze - Simulações</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/frmt_index.css">
	<link rel="stylesheet" href="css/form-flex-responsive.css">
</head>
<body>

	<?php include("includes/header.php"); ?>


			<div id="container_conteudo">	
				<input type="text" autofocus>

				<h1  class='titulos'>Simulador de frete</h1>

				<h2 class ='sub_titulos'>				
						Nessa seção há duas opções para realizar diferentes tipos de simulações,  baseado nas tabelas cadastradas (Há duas tabelas nesse Demonstrativo ). 
						</br></br>A cotação instântanea (simplificado) é ideal para realizar o comparativo entre duas precificações, ou avaliar diferentes tipos de cenários baseado
						na mesma tabela,  com a variação dos dados coletado no formulário de entrada.
					</br>As cotações em lote possibilitam  o cálculo com uma grande quantidade de dados (em linhas), tendo a opção de exportar um relatório em listagem com detalhamento do cálculo realizado.
					
					</h2>		

						<h1 class='titulos'>Legenda de Taxas / Componentes de Frete</h1> 
								<h2 class ='sub_titulos'><div class='paragraf'>As</div> taxas apresentadas abaixo, são as regras definidas para os cálculos realizados (Taxas percentuais e fixas), no entanto,  as regras podem sofrer alterações conforme o modelo tarifário específico do usuário.</h2>
							<div id='container_list_itms_dv'>	

									<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;PEDÁGIO - </div>
											<div class ='itm_list'>Definido uma tarifa de cobrança a cada 100 kg ou fração.</div>
									</div>	
							
									<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp; GRIS (Taxa de Gerenciamento de Risco) - </div>
										 	<div class ='itm_list'>Percentual cobrado sobre o valor da Nota Fiscal.</div>
									</div>	 	

								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;TRT (Taxa de restrição de Trânsito - Aplicado uma taxa percentual em trecho destino de grandes cidades como São Paulo / Rio de Janeiro / Belo Horizonte) - </div>
												<div class ='itm_list'>Percentual de Cobrança sobre o valor do frete total.</div>
								</div>	

								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;TAS (Taxa administrativa das secretaias da fazenda) - </div>
												<div class ='itm_list'>Cobrança de uma Taxa fixa por Ct-e Emitido.</div>
								</div>

								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;CAT (Taxa de despacho) -</div>
												<div class ='itm_list'>Cobrança de uma Taxa fixa por Ct-e Emitido.</div>
								</div>

								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;FRETE PESO -</div>
												<div class ='itm_list'>A cobrança do frete peso leva em consideração o citério de maior peso.(Entre peso de Nota Fiscal e Peso Cubado). Os valores são fixos para determinadas faixas, conforme a tabela cadastrada (Até 5kg, Até 10kg...). Há uma faixa considerada excedente, maior faixa de peso disponível, onde o valor cobrado é percentual. 
												</div>
								</div>

								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;FRETE VALOR (Ad Valorem) - </div>
												<div class ='itm_list'>Percentual cobrado sobre o valor da Nota Fiscal, conforme a tabela cadastrada.</div>
								</div>

								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;CUBAGEM ( É definida pela relação entre o peso de um produto e o espaço que ele ocupa dentro do veículo)- </div>
												<div class ='itm_list'>Ao realizar o cálculo de frete, no formulário há 5 campos de preenchimento para formular a cubagem, sendo 3 para armazenar as medidas (altura, largura, comprimento) 1 para a quantidade de itens e  1 para o Fator de Cubagem.</div>
								</div>



								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;TD (Taxa Dificuldade de Entrega ) - </div>
												<div class ='itm_list'>Para entrega em cidades/destinatários considerado de Difícil Entrega/Coleta, é cobrado um valor fixo conforme o valor na tabela cadastrada</div>
								</div>	


								<div class='list_itms_dv'>
										<div class ='itm_bold'>	&#9679; &ensp;ICMS -</div>
												<div class ='itm_list'>Conforme a legislação vigente.</div>
								</div>							

						</div>	





			<h1 class='titulos'>Tabela de Fretes - Demonstrativo</h1> 		
				<h2 class ='sub_titulos'><div class='paragraf'>O</div> modelo de tabela apresentado abaixo, exibe o layout padrão. A divisão é feita entre as cidades do remetente e destinatário, Faixas de peso e taxas. As cidades cadastradas contém ao final de seu nome a informação da UF, diferenciando dessa forma cidades com o mesmo nome e de Estados diferentes.As faixas de peso de uma tabela podem ter precificações diferenciadas a cada 5 kg, tendo como última faixa disponível a faixa de 100 kg. Acima desse peso,  o valor é cobrado no excedente (conforme percentual cadastrado).
				</h2>

				<h2 class ='sub_titulos'><div class='paragraf'>Nesse</div> opção, há dois modelos disponíveis onde é possivel simular a precificação e avaliar a melhoor opção com os detalhes de frete apresentado. Comparativo entre as duas simulações.</h2>
			
		<input onclick = "exporta_table_demo()" type='button' value='Exportar xlsx' id='btn_export_table_demo' class='btn_export'>

			<div class="grupo_cxs col-2" >
					<label  class='lb_text' for="">Opções Tabelas</label>
						<select onchange ='load_table_cad_demo()' class="cx_text"  id="cx_tipo_tabela" >	
							<option value="modelo_1">Modelo 1</option>
							<option value="modelo_2">Modelo 2</option>
						</select>	
			</div>			

			<div class='container_table'>
					<table class='tabela_fretes_demo frmt_tabela_fretes'>	
					</table>
			</div>	



			<h1 class='titulos'>Cálculo Simplificado</h1> 		
				<h2 class ='sub_titulos'><div class='paragraf'>Inicialmente</div> selecione o primeiro tipo de tabela (dentre as duas dísponiveis). Em seguida preencha o formulario
				com os dados necessário para realizar uma simulação e clique em incluir para armazenar os dados na tabela selecionada.Repita
				o processo utilizando outro modelo de tabela, ou altere somente os dados de entrada para realizar a comparação entre as 
				simualções. </h2>
					

				<form id="frm_registro" class="forms">						

							<div class="row">	
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Cód. Remetente</label>
									<input class="cx_text" type="text" id="cx_id_remetente" >	
								</div>	
								<div class="grupo_cxs col-5" >
									<label class='lb_text' for="">Nome Cidade Remetente</label>
									<input class="cx_text" type="text" id="cx_nome_remetente">	
								</div>	
							</div>

							<div class="row">	
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Cód. Destinatário</label>
									<input class="cx_text" type="text" id="cx_id_destinatario">	
								</div>	
								<div class="grupo_cxs col-5" >
									<label class='lb_text' for="">Nome Cidade Destinatário</label>
									<input class="cx_text" type="text" id="cx_nome_destinatario">	
								</div>	
							</div>

							<div class="row">	
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Valor Nota fiscal R$</label>
									<input class="cx_text" type="text" id="cx_vlr_nf" maxlength="15">	
								</div>	
								<div class="grupo_cxs col-4" >
									<label class='lb_text' for="">Peso Nota Fiscal (Peso real - kg)</label>
									<input class="cx_text" type="text" id="cx_peso_nf" maxlength="10">	
								</div>	
								<div class="grupo_cxs col-1" >
									<label class='lb_text' for="">Tipo Frete</label>
									<select class="cx_text" name="" id="cx_tipo_frete">	
											<option value="CIF">CIF</option>
											<option value="FOB">FOB</option>
									</select>		
								</div>	
							</div>

							<h2>Cubagem *</h2>	
							<div class="row">									
								<div class="grupo_cxs col-2">
									<label class='lb_text' for="" >Altura</label>
									<input class="cx_text" type="text" id="cx_altura_cubagem" placeholder="cm" maxlength="5">	
								</div>	
								<div class="grupo_cxs col-2">
									<label class='lb_text' for="">Largura</label>
									<input class="cx_text" type="text" id="cx_largura_cubagem" placeholder="cm" maxlength="5">	
								</div>
								<div class="grupo_cxs col-2" >
									<label class='lb_text' for="">Comprimento</label>
									<input class="cx_text" type="text" id="cx_comprimento_cubagem" placeholder="cm" maxlength="5"	>	
								</div>
								<div class="grupo_cxs col-2" >
									<label class='lb_text' for="">Qtd. Itens</label>
									<input class="cx_text" type="text" id="cx_qtd_itens_cubagem">	
								</div>
								<div class="grupo_cxs col-2" >
									<label  class='lb_text' for="">Fator de Cubagem</label>
										<select class="cx_text" name="" id="cx_fator_cubagem">	
											<option value="150">Fator 150</option>
											<option value="200">Fator 200</option>
											<option value="250">Fator 250</option>
											<option value="300">Fator 300</option>
										</select>	
								</div>

							</div>	

							<div class="row">	
								<div class="grupo_btns" id='bt_ns_cal'>									
									<input onclick="inclui_item()" id='btn_inclui_item' class ='btns'type="button" value ="+ Incluir item">	
									<input onclick="calcula_frete()" id='btn_calcula' class ='btns'type="button" value ="Calcular">	
									<input onclick="limpa_cmpos()" id='btn_cancela_c' class ='btns' type="button" value ="Limpar">	
								</div>	
							</div>
							
							<div class='tabela_itens_calculo'>
								<table class='frmt_tabela_itens frmt_tabela_fretes'>	
								<!-- 	
									<tr>									
										<th>Cidade Remetente</th>		
										<th>Cidade Destinatário</th>		
										<th>Valor NF R$</th>		
										<th>Peso Nota Fiscal</th>		
										<th>Cubagem</th>		
										<th>Tabela</th>		
									</tr>
								 -->	
								</table>
							</div>	



							<div id='barra_divisao'></div>
								<p id='tit_resultado'>Detalhes sobre o Cálculo Realizado</p>	

			<section id='qdo_resutado_calc'>
		
			<div class="row_2">	
				<div class="titulo_result_unit">Cotação 1</div>	
					<div class="grupo_cxs_2 col-6" >
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Total Cubagem:</div><div id='vlr_cubagem' class='vlr_result'>0</div>
						</div>
					</div>

					<div class="grupo_cxs_2 col-6" >	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Peso Considerado:</div><div id='peso_considerado' class='vlr_result'>0</div>
						</div>					
					</div>
					
					<div class="grupo_cxs_2 col-6" >
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Faixa de Peso Cobrado:</div><div id='fx_peso_considerado'class='vlr_result'>0</div>
						</div>
					</div>	
			
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>		
							<div class='titulo_result'>Frete Valor:</div><div id='vlr_frete_valor' class='vlr_result'>0</div>
						</div>					
					</div>
			
			
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>		
							<div class='titulo_result'>Frete Peso:</div><div id='vlr_frete_peso' class='vlr_result'>0</div>
						</div>					
					</div>
				
				
					<div class="grupo_cxs_2 col-6">		
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Pedagio:</div><div id='vlr_pedagio'class='vlr_result'>0</div>
						</div>					
					</div>
				
					<div class="grupo_cxs_2 col-6">
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Gris:</div><div id='vlr_gris' class='vlr_result'>0</div>
						</div>
					</div>				
				
					<div class="grupo_cxs_2 col-6">		
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Trt:</div><div id='vlr_trt' class='vlr_result'>0</div>
						</div>					
					</div>		
					
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Tas:</div><div id='vlr_tas' class='vlr_result'>0</div>
						</div>					
					</div>
				
					<div class="grupo_cxs_2 col-6">			
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Cat:</div><div id='vlr_cat' class='vlr_result'>0</div>
						</div>
					</div>				
		
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Tde:</div><div id='vlr_tde'class='vlr_result'>0</div>
						</div>					
					</div>			
				
					<div class="grupo_cxs_2 col-6">			
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Aliqt ICMS:</div><div id='vlr_aliq_icms' class='vlr_result'>0</div>
						</div>
					</div>
				
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Valor ICMS:</div><div id='vlr_icms' class='vlr_result'>0</div>
						</div>
					</div>					
			
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Frete Total:</div><div id='vlr_frete_total' class='vlr_result'>0</div>
						</div>					
					</div>
			</div>	

			<div class="row_2">	
				<div class="titulo_result_unit">Cotação 2</div>	
					<div class="grupo_cxs_2 col-6" >
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Total Cubagem:</div><div id='vlr_cubagem_2' class='vlr_result'>0</div>
						</div>
					</div>

					<div class="grupo_cxs_2 col-6" >	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Peso Considerado:</div><div id='peso_considerado_2' class='vlr_result'>0</div>
						</div>					
					</div>
					
					<div class="grupo_cxs_2 col-6" >
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Faixa de Peso Cobrado:</div><div id='fx_peso_considerado_2'class='vlr_result'>0</div>
						</div>
					</div>	
			
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>		
							<div class='titulo_result'>Frete Valor:</div><div id='vlr_frete_valor_2' class='vlr_result'>0</div>
						</div>					
					</div>
			
			
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>		
							<div class='titulo_result'>Frete Peso:</div><div id='vlr_frete_peso_2' class='vlr_result'>0</div>
						</div>					
					</div>
				
				
					<div class="grupo_cxs_2 col-6">		
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Pedagio:</div><div id='vlr_pedagio_2'class='vlr_result'>0</div>
						</div>					
					</div>
				
					<div class="grupo_cxs_2 col-6">
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Gris:</div><div id='vlr_gris_2' class='vlr_result'>0</div>
						</div>
					</div>				
				
					<div class="grupo_cxs_2 col-6">		
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Trt:</div><div id='vlr_trt_2' class='vlr_result'>0</div>
						</div>					
					</div>		
					
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Tas:</div><div id='vlr_tas_2' class='vlr_result'>0</div>
						</div>					
					</div>
				
					<div class="grupo_cxs_2 col-6">			
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Cat:</div><div id='vlr_cat_2' class='vlr_result'>0</div>
						</div>
					</div>				
		
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Tde:</div><div id='vlr_tde_2'class='vlr_result'>0</div>
						</div>					
					</div>			
				
					<div class="grupo_cxs_2 col-6">			
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Aliqt ICMS:</div><div id='vlr_aliq_icms_2' class='vlr_result'>0</div>
						</div>
					</div>
				
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Valor ICMS:</div><div id='vlr_icms_2' class='vlr_result'>0</div>
						</div>
					</div>					
			
					<div class="grupo_cxs_2 col-6">	
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>Frete Total:</div><div id='vlr_frete_total_2' class='vlr_result'>0</div>
						</div>					
					</div>
			</div>	
			
			<div class="row_2">	
				<div class="titulo_result_unit">Resumo</div>	
					<div class="grupo_cxs_2 col-6" >
						<div class='grupo_qdo_result'>			
							<div class='titulo_result'>% Comparativo Cotações</div><div id='vlr_cubagem_2' class='vlr_result'>0</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>	


	</form>


			<h1 class='titulos'>Cálculo em Lote</h1> 	
			<h2 class ='sub_titulos'><div class='paragraf'>Essa</div> opção permite realizar os cáclulos com um grande volume de dados. Antes de inciar, baixe o modelo disponível (xlsx), e preencha os dados nos respectivos campos (Cod Rem, Cidade Remetente, Cod Dest, Cidade destinatario, Vlr. Nota Fiscal, Peso Real -NF-, Total Cubagem). Para o preenchimento dos dados númericos com casas decimais, deverá ser utilizado como separador, o ponto (.)(Exemplo Valor NF - 1284.30). Uma chave importante a ser preenchido é o código de cidade, conforme os códigos de cidades disponíveis na tabela cadastrada (tabela demonstrativa acima).</h2>	

			 <h2 class ='sub_titulos'><div class='paragraf'>Após</div> o preenchimento dos dados, salve o arquivo no formato 'csv',  e realize o upload. Será exibido em uma tabela todos os dados a serem calculados. Em caso de dúvidas nos Envie uma mensagem aceesando <a href="#">aqui</a></h2>
				
				<form enctype="multipart/form-data"  action='executa_import_arquivos_txt.php' method="POST" id="frm_registro" class="forms">						
					<div class="row">	
							<div class="grupo_cxs col-3" >
								<label class='lb_text' for="">Carregar Arquivo (*.CSV)</label>

								<input class="cx_text" type="file" name="arquivo_import" id="arquivo_import" autofocus>	
								
							</div>	
							<div class="grupo_cxs col-3" >

								<input type="button" value='Iniciar Upload'  class='btns_upload' id='btn_upload' onclick='envia_arquivo_upload()'>

								<a href="relatorios/Modelo_importacao_movimentacao.xlsx"><input type="button" value='Modelo Importação xlsx'  class='btns_upload' id='btn_modelo_export'></a>									

							</div>
							<div id='info_processamento'>Info</div>
					</div>	
					<div id='barra_divisao'></div>	
					
					<div class="row">	
							<div class="grupo_btns col-6" >	
									
									<input type="button" value="Calcular" class ='btns' onclick="calcula_frete_lotes()">
									<input type="button" value="Limpar" class ='btns' onclick='limpar_dados_lote()'>
									<input type='button' value='Exportar dados csv' id='btn_export_dados_csv' class='btn_export' onclick='export_arquivos_csv()'>
							</div>
					</div>			
				

					<div class="row" id='totalizador_table_demo'>	

						<div class='grupo_totalizador'>
							<div class='titulo_totalizador'>Qtd. Registros:</div>
							<div id='vlr_tot_qtd_reg'>000000</div>
						</div>

						<div class='grupo_totalizador'>
							<div class='titulo_totalizador'>Total de NF R$:</div>
							<div id='vlr_tot_nf'>00000</div>
						</div>

						<div class='grupo_totalizador'>
							<div class='titulo_totalizador'>Total de Peso:</div>
							<div id='vlr_tot_peso'>00000</div>
						</div>

						<div class='grupo_totalizador'>
							<div class='titulo_totalizador'>Total de Cubagem:</div>
							<div id='vlr_tot_cubagem'>00000</div>
						</div>

						<div class='grupo_totalizador'>
							<div class='titulo_totalizador'>Total de Fretes:</div>
							<div id='vlr_tot_fretes'>00000</div>
						</div>	
					</div>

					<div id='tb_lotes' class='container_table'>
						<table class='tabela_fretes_lotes frmt_tabela_fretes'>	
						</table>

					</div>	

				</form>

				



					<p id='msg_erro'>Preencha os Campos Obrigatórios!!!</p>
				

		</div>				

	<?php include("includes/footer.php"); ?> 	


	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
	<script type="text/javascript" src="js/frmt.js"></script>	
	<script type="text/javascript" src="js/requisicoes.js"></script>	

	<script type="text/javascript" DEFER="DEFER">

		let btn_upload = document.querySelector('#btn_upload')
		let btn_modelo_import =  document.querySelector('#btn_modelo_export')
		
		btn_upload.addEventListener('mouseover',aletera_color_btn)	
		btn_upload.addEventListener('mouseout',ret_color_btn)	

		btn_modelo_import.addEventListener('mouseover',aletera_color_btn)	
		btn_modelo_import.addEventListener('mouseout',ret_color_btn)	

		let cx_text = document.querySelector('#frm_registro')
		cx_text.addEventListener("focus",insere_foco_txt,true)
		cx_text.addEventListener("blur",retira_foco_txt,true)
		cx_text.addEventListener("keypress",frmt_campos,true)
		cx_text.addEventListener("keyup",formata_cmpos_real,true)
		

		window.addEventListener('load', start)



		function start(){
			$('#cx_tipo_tabela').val('modelo_1')
			load_table_cad_demo()
			define_pos()	
		}

	
		function define_pos() {
			window.scroll(0, 0);
			console.log('aaa')
	
		}
		
	</script>
		

	
</body>
</html>