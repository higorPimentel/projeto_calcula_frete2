
<?php
	session_start();
	$_SESSION['nome_opcao'] = 'Pagina Inicial';
	require_once('includes/topo.php');
?>

<body>

<?php 
//valida permissão


	if (!$_SESSION['usuario_log'] == 1) {
		echo "<script>location.href = 'login.php';</script>";	
	}
 
			require_once("includes/header_sistema.php");
			require_once("includes/sidebar.php"); 

?>


		<div id="container_conteudo_pg" class='flex-box'>
				
					
			<p id='msg_inicial' >
			  <?php echo("Bem Vindo " . $_SESSION['usuario_logado'] . ".Selecione uma opção de Módulo.")  ?>  
			
			</p>
					
						<p id='msg_erro'>Preencha os Campos Obrigatórios!!!</p>
						<p id='msg_sucesso'>Processo ok</p>
					
		</div>	

	


		<?php
			require_once('includes/import_script.php');
		?>


	<script>
		
		let menu_opcoes = document.querySelector('#menu_opcoes')
		

		menu_opcoes.addEventListener('click',redimensiona_menu_sidebar)	

	
	</script>
			
</body>
</html>