
//
//let btn_mais = document.querySelector('#container_cn2')



window.addEventListener('scroll',exec_tst)



function exec_tst(event){
	if (window.scrollY > 50 ) {
		$('#container_header').css('backgroundColor','rgba(250, 250, 250, 0.9)')
		$('#container_header').css('boxShadow','1px 1px 10px 5px  gray')
		$('#container_header').css('transition','0.5s')
		$('.opc_menu_incio').css('color','#4682B4')

		$('#img_logo').attr('src','img/logo_transp.png')

	} else {
		$('#container_header').css('backgroundColor','rgba(46, 46, 54, 1)')
		$('#container_header').css('boxShadow','none')
		$('#Menu_inicial').css('color','#B0C4DE')
		$('.opc_menu_incio').css('color','#B0C4DE')

		$('#img_logo').attr('src','img/logo4.png')
	}
}


function ativa_item_li() {
	elemt_item = 1
	
}

function desativa_item_li() {
	elemt_item = 0
	
}

function teste1(event){


if(elemt_item == 0) {


	let  exit = 0;
	
	if(event.offsetY < 0 || event.offsetY > 95 ) {
		  exit = 1;
	} 

	if(event.offsetX < 0 || event.offsetX > 164 ) {
		  exit = 1;
	} 

	if(exit == 1) {
		$('#sub-opcoes').css('display','none')
		
	}


}

console.log(event.offsetX) 

}


window.addEventListener('load', start)
	   	



function start(){
window.scrollTo(0, 0);
cont_inicio = 0
cont_tabelas = 0
cont_gest_fretes = 0	
cont_cadastros = 0
cont_ajuda = 0
info_btn_max  = 0
tipo_cadastro_usuario = 0
elemt_item = 0

}



function define_tipo_cadastro(){

	if(tipo_cadastro_usuario == 0) {
		$('#lb_nome').html("Razão Social")
		$('#lb_cpf').html("CNPJ")
		$('#lb_rg').html("Inscrição Estadual")
		$('#lb_dt_nasc').html("Data Fundação")
		$('#lb_mae').html("Nome Responsável")
		$('#lb_pai').html("Razão Social")
		
		
		tipo_cadastro_usuario = 1
	} else {
		$('#lb_nome').html("Nome Completo")
		$('#lb_cpf').html("CPF")
		$('#lb_rg').html("RG")
		$('#lb_dt_nasc').html("Data Nascm.")
		$('#lb_mae').html("Nome Mãe")
		$('#lb_pai').html("Nome Pai")
		
		
		tipo_cadastro_usuario = 0
	}

	clear_fields_novo_usuario()		
}

function aplica_foco_menu(event){

	let elemnt = event.srcElement.id
	let inicio_element = elemnt.substring(0,3)			

	if(inicio_element == "btn"){
		document.getElementById(elemnt).style.padding = '10px 8px 10px 8px';		
		document.getElementById(elemnt).style.borderBottom = "1px grey solid";
		document.getElementById(elemnt).style.backgroundColor = "rgba(0,0,0,0.3)";
		document.getElementById(elemnt).style.transition = "0.5s";

				if (window.scrollY > 50 ) { 
					document.getElementById(elemnt).style.color = '#363636';
				}
	
	
	}

			
}



function remove_foco_menu(event){

		let elemnt = event.srcElement.id
		let inicio_element = elemnt.substring(0,3)			
			
			

			if(inicio_element == "btn"){
				
				document.getElementById(elemnt).style.borderBottom = "none";
				document.getElementById(elemnt).style.backgroundColor = "rgba(0,0,0,0)";

				if (window.scrollY > 50 ) { 
					document.getElementById(elemnt).style.color = '#4682B4';
				}


			}
	}








function aletera_color_btn(event){
	let itm = event.srcElement.id	
		
	
					document.getElementById(itm).style.transition =  '0.5s'
					document.getElementById(itm).style.backgroundColor =  'rgba(0,0,0,0.2)'
					document.getElementById(itm).style.color =  'black'
		
	
}

function ret_color_btn(event){

		let itm = event.srcElement.id
		
					document.getElementById(itm).style.transition =  '0.5s'
					document.getElementById(itm).style.backgroundColor =  ' #363636'
					document.getElementById(itm).style.color =  '#CDCDC1'
}


function altera_menu_3 () {


	$('#item3_perfil_cor1').css('fill','rgba(20,0,20,0.8)');
	$('#item3_perfil_cor1').css('transition','0.5s');
	$('#item3_perfil_cor2').css('fill','#696969');
	$('#item3_perfil_cor2').css('transition','0.8s');
	$('#capt_perfil	').css('transition','0.8s');
	$('#capt_perfil').css('color','#8B8378	');
	$('#item3_perfil_cor2').css('cursor','pointer');
	$('#item3_perfil_cor1').css('cursor','pointer');
	$('#capt_perfil').css('cursor','pointer');	
	$('#nome_perfil').css('color','#696969');	
	$('#nome_perfil').css('transition','0.5s');	

	//desativa_sub_menu_atualizacoes()


}

function retorn_menu_3(event) {
	$('#item3_perfil_cor1').css('fill','#E7ECED');
	$('#item3_perfil_cor1').css('transition','0.5s');
	$('#item3_perfil_cor2').css('fill','#828282');
	$('#item3_perfil_cor2').css('transition','0.8s');	
	$('#capt_perfil').css('color','white');
	$('#nome_perfil').css('color','white');	
	$('#nome_perfil').css('transition','0.5s');	
	


  

}

function redimensiona_menu_sidebar(event){

if (info_btn_max == 0) {

let elemnt = event.srcElement.id


			if (elemnt == "opc_tabelas") {
				cont_tabelas ++
					if (cont_tabelas == 2) {						
						cont_tabelas = 0		
					}
				} else if (elemnt == "opc_gest_fretes") {
					cont_gest_fretes ++
						if (cont_gest_fretes == 2) {						
							cont_gest_fretes = 0		
						}
				}	 else if (elemnt == "opc_cadastros") {
					cont_cadastros ++
						if (cont_cadastros == 2) {						
							cont_cadastros = 0		
						}
				}	else if (elemnt == "opc_ajuda") {
					cont_ajuda ++
						if (cont_ajuda == 2) {						
							cont_ajuda = 0		
						}
				}			




			if (cont_tabelas == 0) {
				$("#opc_gest_fretes").css("marginTop",0)
				$("#menu_sub_opcoes_1").css('display','none')
				$("#seta_tabelas").css('transform','rotate(0deg)')	
				$("#seta_tabelas").css('transition','0.5s')

			} else {
				$("#opc_gest_fretes").css("marginTop","125px")	
				$("#menu_sub_opcoes_1").css('display','block')	
				$("#seta_tabelas").css('transform','rotate(90deg)')	
				$("#seta_tabelas").css('transition','0.5s')		
				
			}

			
			if (cont_gest_fretes == 0) {
				$("#opc_cadastros").css("marginTop",0)
				$("#menu_sub_opcoes_2").css('display','none')	
				$("#seta_gest_fretes").css('transform','rotate(0deg)')	
				$("#seta_gest_fretes").css('transition','0.5s')		
			} else {
				$("#opc_cadastros").css("marginTop","255px")
				$("#menu_sub_opcoes_2").css('display','block')	
				$("#seta_gest_fretes").css('transform','rotate(90deg)')	
				$("#seta_gest_fretes").css('transition','0.5s')		
				
			}
			
			if (cont_cadastros == 0) {
				$("#opc_ajuda").css("marginTop",0)
				$("#menu_sub_opcoes_3").css('display','none')
				$("#seta_cadastros").css('transform','rotate(0deg)')
				$("#seta_cadastros").css('transition','0.5s')			
			} else {
				$("#opc_ajuda").css("marginTop","125px")
				$("#menu_sub_opcoes_3").css('display','block')
				$("#seta_cadastros").css('transform','rotate(90deg)')
				$("#seta_cadastros").css('transition','0.5s')			
				
			}

			if (cont_ajuda == 0) {
				$("#seta_ajuda").css('transform','rotate(0deg)')
				$("#seta_ajuda").css('transition','0.5s')	
				$("#menu_sub_opcoes_4").css('display','none')		
			} else {
				$("#seta_ajuda").css('transform','rotate(90deg)')
				$("#seta_ajuda").css('transition','0.5s')			
				$("#menu_sub_opcoes_4").css('display','block')
			}
		
			


		
	let pos_tabelas = $("#opc_tabelas").offset().top
	let pos_gest_fretes = $("#opc_gest_fretes").offset().top
	let pos_cadastros = $("#opc_cadastros").offset().top
	let pos_ajuda = $("#opc_ajuda").offset().top	
			

	$("#menu_sub_opcoes_1").offset({top:pos_tabelas +40})	
	$("#menu_sub_opcoes_2").offset({top:pos_gest_fretes +40})	
	$("#menu_sub_opcoes_3").offset({top:pos_cadastros +40})	
	$("#menu_sub_opcoes_4").offset({top:pos_ajuda +40})	
				 
} else {
	alert('Exibir Menu ao lado')
}

}

function altera_btn_max() {
	$(".barra_btn_min").css("backgroundColor","lightgray");

}

function ret_btn_max() {
	$(".barra_btn_min").css("backgroundColor","grey");
	
}

function move_sidebar(){
	
		if(info_btn_max == 0 ) {
			$("#container_saidebar").css("width","60px");
			$("#saidebar").css("width","60px");
			$(".text_sidebar").css("display","none");
			$(".setas_menu").css("display","none");
			$(".icones_sidebar").css("display","inline-block");

			$("#container_barr_funcoes").css("margin-left","60px");
			
			info_btn_max ++	
		} else  {

			$("#container_saidebar").css("width","250px");
			$("#saidebar").css("width","250px");
			$(".text_sidebar").css("display","inline-block");
			$(".setas_menu").css("display","inline-block");
			$(".icones_sidebar").css("display","none");	

			$("#container_barr_funcoes").css("margin-left","250px");


			info_btn_max  = 0	
		}

}


function executa_teste(){
	x = 0;
	y = 0;
	inibe_msg ()
	//teste()
	

}


function teste(){
	
	mtz_tst = ['higor','maria','paola']
	
	mtz_tst.push('osvaldo')

	console.log(mtz_tst)

}


function inibe_msg(){

	if(x == 30) {
		x = 0;
		y = 0;
		$('#caract_digit').css('visibility','hidden') ;
		$('#caract_digit2').css('display','inline-block');
		inibe_msg_2()
		return
	}

	
	setTimeout(() => {
		exibe_msg()
	}, 100);
	x++;
	y++;
	monta_text ()
	manipula_caract()
}

function exibe_msg(){			
	
	setTimeout(() => {
		
		inibe_msg()
	}, 100);
	x++;
	y++;
	monta_text ()
	manipula_caract()
	
}




function inibe_msg_2(){

	if(x == 130) {
		$('#container_btns_inicio').css('display','block')
		return
	}


	setTimeout(() => {
		exibe_msg_2()
	}, 100);
	x++;
	y++;
	monta_sub_text ()
	manipula_caract2()
}


	function exibe_msg_2(){			

	setTimeout(() => {
		
		inibe_msg_2()
	}, 100);
	x++;
	y++;
	monta_sub_text ()
	manipula_caract2()

	}



		function manipula_caract(){

			if(y == 3){
				$('#caract_digit').css('visibility','hidden') 
			} else if (y == 6) {
					$('#caract_digit').css('visibility','visible')
					y = 0			
				}

		}

		function manipula_caract2(){

				if(y == 3){
					$('#caract_digit2').css('visibility','hidden') 
				} else if (y == 6) {
						$('#caract_digit2').css('visibility','visible')
						y = 0			
					}

		}
		
		function monta_text (){

			array_caract_titulo = ['F','A','S','T',' ','A','N','A','L','Y','Z','E']	
			array_titulo = []

			for (let i = 0 ; i < x - 10; i++) {
				array_titulo.push(array_caract_titulo[i])
				
			}

				$('#text_titulo').html(array_titulo)
									
					
		}

		//Disponibiliza um conjunto de ferramentas e soluções para análise e gestão de fretes com uma maior praticidade e eficiência.
		function monta_sub_text (){

		array_caract_titulo = ['D','i','s','p','o','n','i','b','i','l','i','z','a',' ','u','m',' ','c','o','n','j','u','n','t','o'
		,' ','d','e',' ','f','e','r','r','a','m','e','n','t','a','s',' ','e',' ','s','o','l','u','ç','õ','e','s',' ','p','a','r','a'
		,' ','a','n','á','l','i','s','e',' ','e',' ','g','e','s','t','ã','o',' ','d','e',' ','f','r','e','t','e','s',' ','c','o','m'
		,' ','p','r','a','t','i','c','i','d','a','d','e',' ','e',' ','e','f','i','c','i','ê','n','c','i','a'	
		]	
		array_titulo = []

		for (let i = 0 ; i < x - 10; i++) {
			array_titulo.push(array_caract_titulo[i])

				if ([i] > 35 ) {
					$('#caract_digit2').css('display','none') ;
				}
			
		}

			$('#text_subtitulo').html(array_titulo)
								
		
}




function inibe_submenu(event) {

	let  exit = 0;

		if(event.clientY < 50 || event.clientY > 124 ) {
			  exit = 1;
		} 

		if(event.clientX < 1728 || event.clientX > 1884 ) {
			  exit = 1;
		} 

		if(exit == 1) {
			$('#sub-opcoes').css('display','none')
			
		}



}

function abrir_sub() {
	$('#sub-opcoes').css('display','block')
}