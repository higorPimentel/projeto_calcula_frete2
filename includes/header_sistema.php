<header id="container_header">
		
	<div id="info_menu">
		<figure>
			<a href="index.php"><img id="img_logo_sistema" src="img/logo3.JPG" alt="Logo Principal"></a>
		</figure>
	</div>

	

	<nav  id="menu_inicial">
		<ul>
			
		<li   id="capt_perfil"  onclick="abrir_sub()">
						<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 53 53" height="50px" style="enable-background:new 0 0 53 53;" xml:space="preserve">
							<path id="item3_perfil_cor1" style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
							c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
							c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
							c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
							c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
							C20.296,39.899,19.65,40.986,18.613,41.552z"/>
								<g>
							<path id="item3_perfil_cor2" style="fill: #828282;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
							c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
							c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
							s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
							c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
							c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z"/>
							</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
						</svg>				
						<div id='nome_perfil'> <?php echo($_SESSION['usuario_logado'])  ?> </div>
							
					</li>					
		</ul>
		
	</nav>
		
	<div id="menu_reduzido">
			<div id="btn_menu_reduzido">Opções Menu	&#9660;</div>

	</div>

	<div id='sub-opcoes' >
		<ul onmousemove='ativa_item_li()' onmouseleave='desativa_item_li()'>
			<div><li>Dados Usuário</li></div>
			<div><li onclick='executa_logoff()'>Sair</li><div>
		</ul>

	</div>

<script type="text/javascript" src="js/frmt.js"></script>	
<script>

		
	let element_sub_opc = document.querySelector('#sub-opcoes')
	let icone_perfil = document.querySelector('#capt_perfil')
	

	element_sub_opc.addEventListener('mouseout',teste1)
	icone_perfil.addEventListener('mousemove',altera_menu_3)
	icone_perfil.addEventListener('mouseleave',retorn_menu_3)	

	//element_sub_opc.addEventListener('mouseout',inibe_submenu)



</script>

</header>