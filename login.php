<!DOCTYPE html>
<html lang="Pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fast Analyze - Demonstrações</title>

	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="css/form-flex-responsive.css">
	<link rel="stylesheet" href="css/frmt_login.css">

	
</head>
<body>
	

		<div id="container_conteudo">
					
				

			<div id='bloco_form' class='flex-box'>					

					<a href="index.php"><img id="img_logo" src="img/logo3.JPG" alt="Logo Principal"></a>

					<p id='titulo_inicial'>Autenticação de Usuário</p>
					
					<form id="frm_registro" >						

							<div class="row">	
								<div class="grupo_cxs col-6" >
									<label class='lb_text'>Usuário</label>
									<input class="cx_text" type="text" id="cx_usuario" autofocus>	
								</div>	
							</div>	
							<div class="row">	
								<div class="grupo_cxs col-6" >
									<label class='lb_text' for="">Senha</label>
									<input class="cx_text" type="password" id="cx_senha">	
								</div>	
							</div>

							<div class="row">	
								<div class="grupo_cxs col-6" >
									<input class="btns" type="button" id='btn_login' value='Acessar' onclick='executa_teste_log()'>
								</div>
							</div>		
					</form>	

					<div id="info_novo_usuario">
						<p id='link_novo_usuario' >Novo Usuário ? </p><a href="register_user.php">Criar uma Conta</a>
					</div>
				</div>	

				<p id='msg_erro'>000</p>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
	<script type="text/javascript" src="js/requisicoes.js"></script>	
	<script>

	
		let frm_registro_contato = document.querySelector('#frm_registro')
		frm_registro_contato.addEventListener("focus",insere_focus,true)
		frm_registro_contato.addEventListener("blur",remove_focus,true)



		function insere_focus(event){
			$(`#${event.srcElement.id}`).css('boxShadow','0px 0px 5px #8B7B8B')	
	
		}

 
		function remove_focus(event){
				$(`#${event.srcElement.id}`).css('boxShadow','none')
		}




/*  AO FINALIZAR, EXCLUIR TRECHO */

function executa_teste_log() {
	  executa_login()
	//	$('#msg_erro').html('Login não permitido. Solicite a liberação ao Desenvolvedor');
	//	exibe_erro()


	}



function exibe_erro() {
	$('#msg_erro').css('display','block')
	window.setTimeout(inibe_erro,5000)
}

function inibe_erro() {
	$('#msg_erro').css('display','none')
}
	
	


	</script>	
</body>
</html>