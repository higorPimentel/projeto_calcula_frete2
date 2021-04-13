<div id='container_saidebar'>
	<div id='saidebar'>	

		<div id='btn_maximizar' onmousemove='altera_btn_max()' onmouseleave='ret_btn_max()' onclick='move_sidebar()'>
				<div class='barra_btn_min'></div>
				<div class='barra_btn_min'></div>
				<div class='barra_btn_min'></div>
		</div>
		
		<div id='conteudo_saidebar'>	
		<!-- 	<p>Menu Opções</p>   
			FUNÇÃO redimensiona_menu_sidebar, Excuta mov. side
		-->
				<nav id='menu_opcoes'>
					<ul class='oopc'> 
					<a href="pg1_inicio.php"><li id='opc_inicio'><div class='text_sidebar'>	Inicio</div> </a>	
							<img  class='icones_sidebar' src="ico/home.svg">
							<div class='setas_menu' id='seta_inicio'></div>
						</li>
						
						<li id='opc_tabelas'>Consulta Rápida
							<img  class='icones_sidebar' src="ico/database.svg">
							<img  id='seta_tabelas' class='setas_menu' src="ico/seta.svg">							
						</li>
						
						<li id='opc_gest_fretes'>Gestão Fretes 
							<img  class='icones_sidebar' src="ico/caixa-de-entrega.svg">	
							<img  id='seta_gest_fretes' class='setas_menu' src="ico/seta.svg">									
						</li>
						
						<li id='opc_cadastros'>Relatórios
							<img  class='icones_sidebar' src="ico/cadastros.svg">
							<img  id='seta_cadastros' class='setas_menu' src="ico/seta.svg">
						</li>
					
						<li id='opc_ajuda'>Ajuda
							<img  class='icones_sidebar' src="ico/ajuda.svg">
							<img  id='seta_ajuda' class='setas_menu' src="ico/seta.svg">
						</li>	
					</ul>
				</nav>

			


				<!-- consulta rapida -->
				<nav class = 'sub_menu' id='menu_sub_opcoes_1'>
					<ul>
					<li>Transportadoras</li>		
					<a href="tabelas_cadastro.php"><li>Tabelas</li></a>
					<li>Cidades Cadastradas</li>				
					</ul>
				</nav>

				<!-- gestao fretes -->
				<nav class = 'sub_menu' id='menu_sub_opcoes_2'>
					<ul>
					 <a href="gest_cad_transportadora.php"><li>Cadastro Transportadoras</li></a>
					 <a href="gest_cad_tabelas.php"> <li>Cadastro Tabelas</li></a>
					 <a href="gest_sim_fretes.php">  <li>Simulações fretes</li></a>
				     <a href="gest_prazo_cidades.php">	<li>Prazo cidades</li></a>
					 <a href="gest_comparat_transportadora.php"><li>Comparativo Transportadoras</li></a>
					 <a href="gest_consulta_detalhada.php">	<li>Consulta Detalhada</li></a>					
					</ul>
				</nav>

				<!-- relatorios -->
					<nav class = 'sub_menu' id='menu_sub_opcoes_3'>
					<ul>
					    <li>Prazo Cidades</li>
						<li>Transportadoras</li>
						<li>Tabelas</li>
							
					</ul>
				</nav>

				<!-- ajuda -->
				<nav class = 'sub_menu' id='menu_sub_opcoes_4'>
					<ul>
					    <li>Funcionalidades</li>
						<li>Dados Usuário</li>
						<li onclick='executa_logoff()'>Sair</li>
							
					</ul>
				</nav>
		
		
		</div>	
	</div>	

</div>
