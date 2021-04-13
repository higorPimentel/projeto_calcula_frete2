<header id="container_header">
		
	<div id="info_menu">
		<figure>
			<a href="index.php"><img id="img_logo" src="img/logo4.png" alt="Logo Principal"></a>
		</figure>
	</div>

	

	<nav  id="menu_inicial">
	
			<ul>
				<a href="index.php"><li class ='opc_menu_incio' id="btn_pg_inicial">Inicio</li></a>
				<a href="demonstracoes.php"><li  class ='opc_menu_incio' id="btn_calculo_frete">Simulador</li></a>
				<a href="contato.php"><li class ='opc_menu_incio' id="btn_contato">Contato</li></a>
				<a href="login.php"><li class ='opc_menu_incio' id="btn_login">Login</li></a>
			</ul>
	</nav>


	<div id="menu_reduzido">
			<div id="btn_menu_reduzido">Opções Menu	&#9660;</div>

	</div>

	<script type="text/javascript" src="js/frmt.js"></script>	
	<script>

		let header = document.querySelector('#container_header')

		header.addEventListener('mouseover',aplica_foco_menu)	
 		header.addEventListener('mouseout',remove_foco_menu)	


	</script>

</header>