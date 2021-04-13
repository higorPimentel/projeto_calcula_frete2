
<?php
	session_start();
	$_SESSION['nome_opcao'] = 'Simulação Fretes';
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
			require_once("includes/barra_funcoes.php"); 
			
		

?>


		<div id="container_conteudo_pg" class='flex-box'>	
              
				<div class='conteudo_cont' >
				
					


				</div>					
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