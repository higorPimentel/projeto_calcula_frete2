<!DOCTYPE html>
<html lang="Pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fast Analyze - Registro Usuário</title>

	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="css/form-flex-responsive.css">
	<link rel="stylesheet" href="css/frmt_index.css">
	
</head>
<body>


<?php include("includes/header.php") ?>

		<div id='menu_opcoes_cad_user'>

			<h2 id='titulo_menu_cad'>Registro de Usuário</h2>
				<div id='btns_menu_cad'>
					<input type="button" value="Cadastrar" class ='btns_tipo2' onclick='valida_usuario_cliente_exist()'>
					<input type="button" value="Cancelar" class ='btns_tipo2' onclick='clear_fields_novo_usuario()'>
				</div>	

		</div>


		<div id="container_conteudo" >
				
					
				<form id="frm_registro" >						

						<h2 id='titulo_cad_inicio'>Dados Pessoais</h2>
							<div class="row">								
							<!-- 
								<div class="grupo_cxs col-2" >
									<label class='lb_text' for="">Cód. Registro</label>
									<input class="cx_text" type="text" id="cx_id_cliente" disabled value='1'>	
								</div>
							 -->	
															
								<div class="grupo_cxs col-3" >
									<label  class='lb_text' for="">Tipo Cadastro</label>
										<select class="cx_text" name="" id="cx_tipo_cadastro">	
											<option value="PF">Pessoa Fisica</option>
											<option value="PJ">Pessoa Jurídica</option>
										</select>
								</div>
							</div>	
							<div class="row">	
								<div class="grupo_cxs col-6" >
									<label class='lb_text' id='lb_nome' for="">Nome Completo *</label>
									<input class="cx_text" type="text" id="cx_nome_cliente">	
								</div>
							</div>	
							
							<div class="row">	
								<div class="grupo_cxs col-3" >
									<label  class='lb_text' id='lb_cpf' for="">CPF *</label>
									<input class="cx_text" type="text" id="cx_cpf_cnpj">	
								</div>
								<div class="grupo_cxs col-3" >
									<label class='lb_text' id='lb_rg' for="">RG *</label>
									<input class="cx_text" type="text" id="cx_rg_inscricao_estadual">	
								</div>	
								<div class="grupo_cxs col-3" >
									<label class='lb_text' id='lb_dt_nasc' for="">Data Nascm. *</label>
									<input class="cx_text" type="date" id="cx_dt_nascimento">	
								</div>								
							</div>		
							
							<div class="row">	
								<div class="grupo_cxs col-6" >
									<label class='lb_text' id='lb_mae' for="">Nome Mãe *</label>
									<input class="cx_text" type="text" id="cx_nome_mae">	
								</div>
							</div>	
							<div class="row">	
								<div class="grupo_cxs col-6" >
									<label class='lb_text'  id='lb_pai' for="">Nome Pai *</label>
									<input class="cx_text" type="text" id="cx_nome_pai">	
								</div>
							</div>

							
							
							<div class="row">	
								<div class="grupo_cxs col-4" >
									<label class='lb_text' for="">Celular *</label>
									<input class="cx_text" type="text" id="cx_celular">	
								</div>
								<div class="grupo_cxs col-4" >
									<label class='lb_text' for="">Email *</label>
									<input class="cx_text" type="text" id="cx_email">	
								</div>
							</div>

						

						<h2>Endereço</h2>
							
							<div class="row">	
								<div class="grupo_cxs col-2" >
									<label class='lb_text' for="">Código Postal *</label>
									<input class="cx_text" type="text" id="cx_cep" >	
								</div>
							</div>
							<div class="row">								
								<div class="grupo_cxs col-5" >
									<label class='lb_text' for="">Rua * </label>
									<input class="cx_text" type="text" id="cx_logradouro">	
								</div>
							
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Número *</label>
									<input class="cx_text" type="text" id="cx_numero_endereco" >	
								</div>								
							</div>	
							<div class="row">
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Complemento</label>
									<input class="cx_text" type="text" id="cx_complemento_endereco" >	
								</div>	 
						
								<div class="grupo_cxs col-5" >
									<label class='lb_text' for="">Bairro *</label>
									<input class="cx_text" type="text" id="cx_bairro_endereco" >	
								</div>							
							</div>

							<div class="row">
								<div class="grupo_cxs col-2" >
										<label class='lb_text' for="">Estado</label>
										<select class="cx_text" id="cx_uf">										
											<option value="1">Acre</option>
											<option value="2">Alagoas</option>
											<option value="3">Amazonas</option>
											<option value="4">Amapá</option>
											<option value="5">Bahia</option>
											<option value="6">Ceará</option>
											<option value="7">Distrito Federal</option>
											<option value="8">Espírito Santo</option>
											<option value="9">Goiás</option>
											<option value="10">Maranhão</option>
											<option value="11">Minas Gerais</option>
											<option value="12">Mato Grosso do Sul</option>
											<option value="13">Mato Grosso</option>
											<option value="14">Pará</option>
											<option value="15">Paraíba</option>
											<option value="16">Pernambuco</option>
											<option value="17">Piauí</option>
											<option value="18">Paraná</option>
											<option value="19">Rio de Janeiro</option>
											<option value="20">Rio Grande do Norte</option>
											<option value="21">Rondônia</option>
											<option value="22">Roraima</option>
											<option value="23">Rio Grande do Sul</option>
											<option value="24">Santa Catarina</option>
											<option value="25">Sergipe</option>
											<option value="26">São Paulo</option>
											<option value="27">Tocantins</option>

									</select>	
								</div>
								<div class="grupo_cxs col-3" >
										<label class='lb_text' for="">Cidade</label>
										<select class="cx_text" id="cx_cidade">										
										</select>	
								</div>
							</div>

					<h2>Dados de Acesso</h2>
							
							<div class="row">	
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Nome Usuário / Login *</label>
									<input class="cx_text" type="text" id="cx_login" >	
								</div>
							</div>
							<div class="row">	
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Senha *</label>
									<input class="cx_text" type="password" id="cx_senha" onkeyup='valida_senha()'>	
								</div>
								<div class="grupo_cxs col-3" >
									<label class='lb_text' for="">Confirmar Senha *</label>
									<input class="cx_text" type="password" id="cx_confirmacao_senha" onkeyup='valida_senha()'>	
								</div>
								<div class="grupo_cxs col-3" >
									<label id='inf_confirma_senha'>Senha Confirmada &#10004;</label>
								</div>
							</div>							

						</form>				


					<div id='container_conf_cad'>

						<form class='fmr_conf_cad'>
            
								<div class="row">	
									<div id ='btn_fechar' onclick='fechar_confirmacao()'>&#10008;</div>
								</div>


					  
								<div class="row">	
								
								<p id='msg_confirma'>Acabamos de enviar um código de verificação para o email. Digite o Código
										recebido para concluir o seu cadastro. (Verifique a caixa de spam)
									</p>
										
									<div class="grupo_cxs col-4" >
										<label class='lb_text' for="">Código de Verificação</label>
										<input class="cx_text" type="text" id="cx_valida_user">	
									</div>

									<div id='btns_confirma_user'>
										<input  type="button" value="Confirmar" class ='btns_tipo2' onclick='verifica_pass()'>
										<label id='info_validacao_user'>Código incorreto</label>
									</div>

              				  </div>
					  
					  
					  
					 		 </form>

			
						
						</div>

					
						<p id='msg_erro'>Preencha os Campos Obrigatórios!!!</p>
						<p id='msg_sucesso'>Processo ok</p>
					
			</div>	

	
			<?php include("includes/footer.php"); ?> 	

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
	<script type="text/javascript" src="js/frmt.js"></script>	
	<script type="text/javascript" src="js/requisicoes.js"></script>	

	<script>
		
		window.addEventListener('load', start)

		
		let cmb_uf  = document.querySelector('#cx_uf')
		let cx_text = document.querySelector('#frm_registro')
		cx_text.addEventListener("focus",insere_foco_txt,true)
		cx_text.addEventListener("blur",retira_foco_txt,true)
		cx_text.addEventListener("keypress",frmt_campos,true)
		cx_text.addEventListener("keyup",formata_cmpos_real,true)
		cx_text.addEventListener("keypress",frmt_mascaras,true)
		cmb_uf.addEventListener("change",acessa_municipio,true)

		let cx_tipo_cadastro = document.querySelector('#cx_tipo_cadastro') 	
		cx_tipo_cadastro.addEventListener("change", define_tipo_cadastro,true)
		
		
		function acessa_municipio(){
			
			pesquisa_uf = $("#cx_uf").val()
		//	console.log(pesquisa_uf)
			load_tables_uf();

		}	

	
		function start(){
			pesquisa_uf = "1"

			$('#cx_nome_cliente').focus()
			return_next_id_cliente();
			load_tables_uf();
			trava_execucao = false;

		}


		function valida_senha(){
			
			
				if($('#cx_senha').val() != $('#cx_confirmacao_senha').val() ) {
					$('#inf_confirma_senha').html('Senhas Divergentes  &#10008;')
					$('#inf_confirma_senha').css('color','red')
				} else {
					$('#inf_confirma_senha').html('Senha Confirmada &#10004;')
					$('#inf_confirma_senha').css('color','#698B69')

				}

		}	



	
	</script>
			
</body>
</html>