<!DOCTYPE html>
<html lang="Pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fast Analyze - Cadastro Tabelas</title>

	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="css/form-flex-responsive.css">
	<link rel="stylesheet" href="css/frmt_index.css">
	<link rel="stylesheet" href="css/frmt_program.css">
	
</head>
<body>



<?php 


//valida permissão
session_start();

if (!$_SESSION['usuario_log'] == 1) {
	echo "<script>location.href = 'login.php';</script>";	
}
 
?>



<?php include("includes/header_sistema.php") ?>
<?php include("includes/sidebar.php") ?>

		<div id="container_conteudo_pg" class='flex-box'>
				
					


			<h4 class ='incia_info_progrm' >Cadastro Tabelas</h4>








						<p id='msg_erro'>Preencha os Campos Obrigatórios!!!</p>
						<p id='msg_sucesso'>Processo ok</p>
					
		</div>	

	
<?php //include("includes/footer.php"); ?> 

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
	<script type="text/javascript" src="js/frmt.js"></script>	
	<script type="text/javascript" src="js/requisicoes.js"></script>	

	<script>
		
		let menu_opcoes = document.querySelector('#menu_opcoes')
		

		menu_opcoes.addEventListener('click',redimensiona_menu_sidebar)	

	
	</script>
			
</body>
</html>