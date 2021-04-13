


window.addEventListener('load', start)



function start(){
	
	dados_item_incluido = []
	identifica_inclusao_item = 0;
	itm_seq = 0;
	dados_upload = ""	
	dados_conf_cad = "";


}

function frmt_campos(event) {

	//trava prmite somente numeros
	if (event.srcElement.id === 'cx_vlr_nf' || event.srcElement.id === 'cx_peso_nf' 
		|| event.srcElement.id === 'cx_altura_cubagem' || event.srcElement.id === 'cx_largura_cubagem'
		|| event.srcElement.id === 'cx_comprimento_cubagem' || event.srcElement.id === 'cx_cpf_cnpj' 
		|| event.srcElement.id === 'cx_rg_inscricao_estadual' || event.srcElement.id === 'cx_celular' 
		|| event.srcElement.id === 'cx_cep' || event.srcElement.id === 'cx_numero_endereco'
		) {

			for (var i = 0; i < 11; i++) {
				
				if (parseInt(event.key) === i) {
					
					return
				}

			}


		event.returnValue = false
	}



}

function frmt_mascaras(event) {



	if(event.srcElement.id === 'cx_cpf_cnpj') { 
		
		//mascara cpf
		if(tipo_cadastro_usuario == 0) {	

			if(event.srcElement.selectionStart == 14) {
				event.returnValue = false
			}

					if(event.srcElement.selectionStart == 3) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '.')
				
					} else if(event.srcElement.selectionStart == 7) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '.')
				
					} else if(event.srcElement.selectionStart == 11) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '-')
					
					}
				
				//console.log(event.srcElement.textLength)

		} else {

			if(event.srcElement.selectionStart == 18) {
				event.returnValue = false
			}

					if(event.srcElement.selectionStart == 2) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '.')
				
					} else if(event.srcElement.selectionStart == 6) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '.') 
					
					} else if(event.srcElement.selectionStart == 10) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '/') 

					} else if(event.srcElement.selectionStart == 15) {
						$('#cx_cpf_cnpj').val($('#cx_cpf_cnpj').val() + '-')	
					
					
					}

		}

	
	} else if(event.srcElement.id == 'cx_rg_inscricao_estadual') { 


		if(tipo_cadastro_usuario == 0) {
			
			if(event.srcElement.selectionStart == 12) {
				event.returnValue = false
			}

			if(event.srcElement.selectionStart == 2) {
				$('#cx_rg_inscricao_estadual').val($('#cx_rg_inscricao_estadual').val() + '.')
		
			} else if(event.srcElement.selectionStart == 6) {
				$('#cx_rg_inscricao_estadual').val($('#cx_rg_inscricao_estadual').val() + '.')
		
			} else if(event.srcElement.selectionStart == 10) {
				$('#cx_rg_inscricao_estadual').val($('#cx_rg_inscricao_estadual').val() + '-')
			
			}

		} else {

			if(event.srcElement.selectionStart == 15) {
				event.returnValue = false
			}

				if(event.srcElement.selectionStart == 3) {
					$('#cx_rg_inscricao_estadual').val($('#cx_rg_inscricao_estadual').val() + '.')
			
				} else if(event.srcElement.selectionStart == 7) {
					$('#cx_rg_inscricao_estadual').val($('#cx_rg_inscricao_estadual').val() + '.')
			
				} else if(event.srcElement.selectionStart == 11) {
					$('#cx_rg_inscricao_estadual').val($('#cx_rg_inscricao_estadual').val() + '.')
				
				}


		}


	} else if(event.srcElement.id == 'cx_celular') { 
		
			
			if(event.srcElement.selectionStart == 15) {
				event.returnValue = false
			}

			if(event.srcElement.selectionStart == 0) {
				$('#cx_celular').val($('#cx_celular').val() + '(')
		
			} else if(event.srcElement.selectionStart == 3) {
				$('#cx_celular').val($('#cx_celular').val() + ') ')
		
			} else if(event.srcElement.selectionStart == 9) {
				$('#cx_celular').val($('#cx_celular').val() + '-')
			
			}	
			
	
		} else if(event.srcElement.id == 'cx_cep') { 
		
			
			if(event.srcElement.selectionStart == 10) {
				event.returnValue = false
			}

			if(event.srcElement.selectionStart == 5) {
				$('#cx_cep').val($('#cx_cep').val() + '-')
		
		
			}				
	



	}



}


function formata_cmpos_real(event) {
	var cmpo_id  = event.srcElement.id
	var vlr = event.srcElement.value
	var vlr2 = vlr.replace(".","")
	
		if (event.srcElement.id === 'cx_vlr_nf' || event.srcElement.id === 'cx_peso_nf' 
		|| event.srcElement.id === 'cx_altura_cubagem' || event.srcElement.id === 'cx_largura_cubagem'
		|| event.srcElement.id === 'cx_comprimento_cubagem' ) {


		if(vlr2.length < 2) {
			var valor_formatado = "0," +  vlr2
			prim_caract = valor_formatado.substr(2,1)

			$(`#${cmpo_id}`).val(valor_formatado)
		}


		if(vlr2.length > 4) { 
			var posicao = vlr2.indexOf(",")
			var caract = vlr2.substr(posicao + 1,1)
			var prt1 = vlr2.substr(0,posicao)
			var prt2 = vlr2.substr(posicao + 2,vlr2.length)
			
			valor_formatado = prt1 + caract + "," + prt2
		
			
				if(valor_formatado.substr(0,1) == 0 || valor_formatado.substr(0,1) === ".") {
					valor_formatado = valor_formatado.substr(1,vlr2.length)
				}
		


			$(`#${cmpo_id}`).val(valor_formatado)
		}


	}

}



function formatReal() {
			
			var vlr2 = $(`#${cmpo}`).val()
			var prt1 = "," + vlr2.substr(-2,2)
				var prt0 = ""
				prt3 = ""



				var cont_milhar = 0;
				for (var i =3; i < vlr2.length +1  ; i++) {
					var caract = vlr2.substr(-[i],1)
						

						if (caract != "," ) {
							
							prt0  += caract;
							cont_milhar ++
								
								if (cont_milhar == 3 ) {
									
									prt0 += "."
									cont_milhar = 0
								}								
							
						}	
					
				}


			for (var l = 1 ; l < prt0.length + 1; l++) {
					prt3 += prt0.substr(-[l],1)
					
				}	

			valor_formatado =  prt3 + prt1

			if (valor_formatado.substr(0,1) === "."){
				valor_formatado = valor_formatado.substr(1,valor_formatado.length)

			}
			
			$(`#${cmpo}`).val(valor_formatado)

}




function insere_foco_txt(event){


	if (event.srcElement.id != 'btn_calcula' && event.srcElement.id != 'btn_cancela_c') {
		
		$(`#${event.srcElement.id}`).css('boxShadow','0px 0px 5px  #8B7B8B')

			 if (event.srcElement.id === 'cx_vlr_nf') {	
					$('#cx_vlr_nf').val('')
		
			} 	else if (event.srcElement.id === 'cx_peso_nf') {	
					$('#cx_peso_nf').val('')
			
			}	else if (event.srcElement.id === 'cx_altura_cubagem') {	
					$('#cx_altura_cubagem').val('')
			
			}		else if (event.srcElement.id === 'cx_largura_cubagem') {	
					$('#cx_largura_cubagem').val('')
			
			}		else if (event.srcElement.id === 'cx_comprimento_cubagem') {	
					$('#cx_comprimento_cubagem').val('')
			
			}			

	}


}

function retira_foco_txt(event) {

if (event.srcElement.id != 'btn_calcula' && event.srcElement.id != 'btn_cancela_c') {

	$(`#${event.srcElement.id}`).css('boxShadow','none')

	}

		if (event.srcElement.id === 'cx_id_remetente')  {

						for (var i = 0; i < data.length ; i++) {
							if (data[i].id_cidade_origem === event.srcElement.value ) {
								$('#cx_nome_remetente').val(data[i].cidade_origem)						
							
								return;
							}

						}
						$('#cx_nome_remetente').val('Cidade não Localizada')

			
		} else if (event.srcElement.id === 'cx_id_destinatario') {

					for (var i = 0; i < data.length ; i++) {
							if (data[i].id_cidade_destino === event.srcElement.value ) {
								$('#cx_nome_destinatario').val(data[i].cidade_destino)												
								return;
							
							}
						}
						$('#cx_nome_destinatario').val('Cidade não Localizada')	

		
		} else if (event.srcElement.id === 'cx_nome_remetente') {

					for (var i = 0; i < data.length ; i++) {
							if (data[i].cidade_origem === event.srcElement.value ) {
								$('#cx_id_remetente').val(data[i].id_cidade_origem)												
								return;
							
							}
						}
						$('#cx_id_remetente').val('Remetente não Localizado')				



		} else if (event.srcElement.id === 'cx_nome_destinatario') {

					for (var i = 0; i < data.length ; i++) {
							if (data[i].cidade_destino === event.srcElement.value ) {
								$('#cx_id_destinatario').val(data[i].id_cidade_destino)												
								return;
							
							}
						}
						$('#cx_id_destinatario').val('Destinatário não Localizado')					


		}	else if (event.srcElement.id === 'cx_vlr_nf') {	
			cmpo = 'cx_vlr_nf'
			formatReal()
		
		} 	else if (event.srcElement.id === 'cx_peso_nf') {	
			cmpo = 'cx_peso_nf'
			formatReal()
		}		
			


}

function load_tables_uf() {

	let tipo_requisicao =  'load_tables_uf';
	limpar_cmb_municipios();


	$.ajax({
		method:'POST',
		url:'php/executa_functions_return.php',
		data:{
			tipo_requisicao,tipo_requisicao,
			pesquisa_uf:pesquisa_uf
		},
		success:function(retorno){

			
			
	
			var dados_municipios = JSON.parse(retorno)
			var combouf = document.getElementById("cx_cidade")

		
				
			for ( var i = 0; i < dados_municipios.length ; i ++) {				
				
				var opt0 = document.createElement("option");
				opt0.value = [i]
				opt0.text = dados_municipios[i].descricao_municipio
				combouf.add(opt0, combouf.options[0]);
		
			}

		
				console.log(retorno)
			

		}

	})


}


function limpar_cmb_municipios() {	
	var combouf = document.getElementById("cx_cidade");
	var qtd_itens = combouf.length 
		
		
		for ( var i = 0; i < qtd_itens ; i ++) {		
			combouf.remove(0);			
		}		
					
}



function load_table_cad_demo() {
	
//console.log(data)	
var tipo_tabela = $('#cx_tipo_tabela').val()


		$.ajax({
			method:'POST',
			url:'php/executa_acessa_tb_cadastradas.php',
			data:{usario_php:'1', tipo_tabela:tipo_tabela},
			success:function(retorno){

				 data = JSON.parse(retorno);


								
					
					var tab = document.querySelector('.tabela_fretes_demo')
					var new_table = '';	
						new_table +='<tr>'
						new_table +='<th>Cód Origem</th>'												
						new_table +='<th>Cód Destino</th>'
						new_table +='<th id="cmpo_cidade">Cidade Origem</th>'
						new_table +='<th id="cmpo_cidade2">Cidade Destino</th>'	
						new_table +='<th>Até 5 Kg</th>'
						new_table +='<th>Até 10 Kg</th>'
						new_table +='<th>Até 15 Kg</th>'
						new_table +='<th>Até 20 Kg</th>'
						new_table +='<th>Até 30 Kg</th>'
						new_table +='<th>Até 50 Kg</th>'
						new_table +='<th>Até 70 Kg</th>'
						new_table +='<th>Até 100 Kg</th>'	
						new_table +='<th>Excedente > 100 Kg</th>'								
						new_table +='<th>Frete Valor %</th>'								
						new_table +='<th>Pedágio</th>'								
						new_table +='<th>Gris %</th>'								
						new_table +='<th>Trt %</th>'								
						new_table +='<th>Tas</th>'								
						new_table +='<th>Cat</th>'								
						new_table +='<th>Tde</th>'								
						new_table +='<th>Aliqt. ICMS %</th>'								
						new_table +='<th>Nome Tabela</th>'								
						new_table +='</tr>'								
						

						var cod = 1	
						for (var i = 0; i < data.length; i++) {
								

								if (cod === 3) {
									cod = 1
								}
								

								if (cod === 1) {
									var cls = 'styline_line_table_2'
								} else if (cod === 2) {
									var cls = 'styline_line_table_1'
								}
								



					new_table +=`<tr class="${cls}">`
					new_table +=`<td>${data[i].id_cidade_origem}</td>`
					new_table +=`<td>${data[i].id_cidade_destino}</td>`
					new_table +=`<td>${data[i].cidade_origem}</td>`						
					new_table +=`<td>${data[i].cidade_destino}</td>`	
					new_table +=`<td>${data[i].fx_5.replace(".",",")}</td>`
					new_table +=`<td>${data[i].fx_10.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_15.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_20.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_30.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_50.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_70.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_100.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].fx_200.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].frete_valor.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].pedagio.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].gris.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].trt.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].tas.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].cat.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].tde.replace(".",",")}</td>`
					new_table +=`<td>${data[i].aliq_icms.replace(".",",")}</td>`	
					new_table +=`<td>${data[i].nome_tabela}</td>`	
					new_table +='</tr>'


						cod ++
							}	



						$('.tabela_fretes_demo').html(new_table);
								
			}
		

		})



}

function calcula_frete() {
	
	
	//valida_campos()

	if (dados_item_incluido.length == 0) {
		$('#msg_erro').html('Insira ao menos um item, para prosseguir com o cálculo!!!');
		exibe_erro()
		return
		
	}

/* 

let id_remetente = $('#cx_id_remetente').val()
let id_destinatario = $('#cx_id_destinatario').val()
let vlr_nf = $('#cx_vlr_nf').val().replace(".","").replace(",",".")
let peso_nf = $('#cx_peso_nf').val().replace(".","").replace(",",".")
let altura_cubagem = $('#cx_altura_cubagem').val().replace(".","").replace(",",".")
let largura_cubagem = $('#cx_largura_cubagem').val().replace(".","").replace(",",".")
let comprimento_cubagem = $('#cx_comprimento_cubagem').val().replace(".","").replace(",",".")
let qtd_itens_cubagem = $('#cx_qtd_itens_cubagem').val()
let fator_cubagem = $('#cx_fator_cubagem').val()

 */

let data_calculo = JSON.stringify(dados_item_incluido);
let data_table_demo = JSON.stringify(data);

	$.ajax({
		method:'POST',
		url:'php/executa_calcula_tb.php',
		data: {
			data_calculo:data_calculo,
			data_table_demo:data_table_demo
		},
		success:function(retorno){
			
			

		var data = JSON.parse(retorno);

			
			
				 $('#vlr_cubagem').html(data[0].cubagem.toFixed(2));
				 $('#peso_considerado').html(data[0].maior_peso_descricao);	
				 $('#fx_peso_considerado').html(data[0].faixa_peso_cobrada);
				 $('#vlr_frete_peso').html(data[0].frete_peso);
				 $('#vlr_frete_valor').html(data[0].frete_valor);
				 $('#vlr_pedagio').html(data[0].pedagio);
				 $('#vlr_gris').html(data[0].gris);
				 $('#vlr_tas').html(data[0].tas);
				 $('#vlr_cat').html(data[0].cat);
				 $('#vlr_tde').html(data[0].tde);
				 $('#vlr_aliq_icms').html(data[0].aliq_icms);
				 $('#vlr_icms').html(data[0].vlr_icms);
				 $('#vlr_frete_total').html(data[0].frete_total);
				 $('#vlr_trt').html(data[0].trt);
				 
				 if(data.length == 2) {
					 
				$('#vlr_cubagem_2	').html(data[1].cubagem.toFixed(2));	
				 $('#peso_considerado_2').html(data[1].maior_peso_descricao);	
				 $('#fx_peso_considerado_2').html(data[1].faixa_peso_cobrada);
				 $('#vlr_frete_peso_2').html(data[1].frete_peso);
				 $('#vlr_frete_valor_2').html(data[1].frete_valor);
				 $('#vlr_pedagio_2').html(data[1].pedagio);
				 $('#vlr_gris_2').html(data[1].gris);
				 $('#vlr_tas_2').html(data[1].tas);
				 $('#vlr_cat_2').html(data[1].cat);
				 $('#vlr_tde_2').html(data[1].tde);
				 $('#vlr_aliq_icms_2').html(data[1].aliq_icms);
				 $('#vlr_icms_2').html(data[1].vlr_icms);
				 $('#vlr_frete_total_2').html(data[1].frete_total);
				 $('#vlr_trt_2').html(data[1].trt);

				}	


				$('#qdo_resutado_calc').css('display','block')
				$('#tit_resultado').css('display','block')


		
				

		}
	})

}

function limpa_cmpos() {


$('#cx_id_remetente').val('')
$('#cx_nome_remetente').val('')
$('#cx_id_destinatario').val('')
$('#cx_nome_destinatario').val('')
$('#cx_vlr_nf').val('')
$('#cx_peso_nf').val('')
$('#cx_altura_cubagem').val('')
$('#cx_largura_cubagem').val('')
$('#cx_comprimento_cubagem').val('')
$('#cx_qtd_itens_cubagem').val('')
//$('#cx_fator_cubagem').val('')

		
		$('#qdo_resutado_calc').css('display','none')
		$('#tit_resultado').css('display','none')
		$('#cx_id_remetente').focus()
		
		
		

				if(identifica_inclusao_item == 0){
					dados_item_incluido = [];
					$('.frmt_tabela_itens').html('');
					$('.tabela_itens_calculo').css('display','none');	
					itm_seq = 0;
				}
	identifica_inclusao_item = 0;			
}


function valida_campos() {
validacao_cpos = 0

	if ($('#cx_id_remetente').val() === '' || $('#cx_id_destinatario').val() === '' || 
		$('#cx_vlr_nf').val() === '' || $('#cx_peso_nf').val() === '')   {
			validacao_cpos = 1
		} else {

			validacao_cpos = 0
		}
}

function exibe_erro() {
	inibe_msg_sucesso()
	$('#msg_erro').css('display','block')
	window.setTimeout(inibe_erro,5000)
}

function inibe_erro() {
	$('#msg_erro').css('display','none')
}

function exibe_msg_sucesso() {
	inibe_erro()
	$('#msg_sucesso').css('display','block')
	window.setTimeout(inibe_msg_sucesso,5000)
}

function inibe_msg_sucesso() {
	$('#msg_sucesso').css('display','none')
}


function inibe_msg_validacao() {
	$('#info_validacao_user').css('display','none')
}

function envia_arquivo_upload() {

	var ext_file = $('#arquivo_import').val()
	var ext_file = ext_file.substr(-3,3)


		if(ext_file != 'csv') {
				$('#msg_erro').html('É permitido somente arquivos CSV. Erro Upload');
				exibe_erro()
				return;
		}


	$('#info_processamento').html('Processando Upload...');
	$('#info_processamento').css('display','inline-block');

	var fd = new FormData();
	var arquivos = $('#arquivo_import')[0].files[0];	
	 fd.append ('arquivo', arquivos);

	


			$.ajax({
				url: 'php/executa_import_arquivos_csv.php',
				type:'POST',
				data:fd,
				contentType: false,
    			processData: false,
				success:function(retorna){
					
					 
					$("#tb_lotes").css('display','block')					
					$("#totalizador_table_demo").css('display','block')

					
					 dados_upload = JSON.parse(retorna)	
					 acesso_tb_upload = 1
					 create_table_upload()	
					 $('#info_processamento').html('Upload Realizado com Exito');
					 $('#info_processamento').css('color','#696969');

						
					}
			
			})




}

function calcula_frete_lotes(){

	if(dados_upload ===""){
		$('#msg_erro').html('Faça o Upload do arquivo, antes de inciar o cálculo !!!');
		exibe_erro()
		return
	}

					 $('#info_processamento').html('Calculando Tabela...');
					 $('#info_processamento').css('color','#8B4726');

let dados_upload1 = JSON.stringify(dados_upload);
let tabela_demo = JSON.stringify(data);


	$.ajax({
		method:'POST',
		url:'php/executa_calcula_tb_lote.php',
		data: {dados_upload_php:dados_upload1,
			tabela_demo_php:tabela_demo	
		},
		success:function(retorno){


			$("#btn_export_dados_csv").css('display','inline-block')
			
			dados_upload = JSON.parse(retorno)	
			acesso_tb_upload = 0
			create_table_upload()

			 		$('#info_processamento').html('Calculo Realizado com Exito');
					 $('#info_processamento').css('color','#696969');
			

		}

	

	})
	

}


function create_table_upload(){
var cod = 1	;
var total_nf = 0;
var total_peso = 0;
var total_cubagem = 0;
var total_fretes = 0;



						var new_table = '';	
						new_table +='<tr>'
						new_table +='<th>Cód Origem</th>'												
						new_table +='<th>Cód Destino</th>'
						new_table +='<th id="cmpo_cidade">Cidade Origem</th>'
			     		new_table +='<th id="cmpo_cidade2">Cidade Destino</th>'	
						new_table +='<th>Vlr. Nota Fiscal</th>'
						new_table +='<th>Peso Real</th>'
						new_table +='<th>Total Cubagem</th>'
						new_table +='<th>Peso Considerado</th>'
						new_table +='<th>Fx. Peso Cobrado</th>'
						new_table +='<th>Frete Peso</th>'
						new_table +='<th>Frete Valor</th>'
						new_table +='<th>Pedagio</th>'
						new_table +='<th>Gris</th>'
						new_table +='<th>Trt</th>'
						new_table +='<th>Tas</th>'
						new_table +='<th>Cat</th>'
						new_table +='<th>Tde</th>'
						new_table +='<th>Aliq. ICMS %</th>'
						new_table +='<th>Vlr. ICMS</th>'
						new_table +='<th>Frete Total</th>'
						new_table +='</tr>'


						
						for (var i = 0; i < dados_upload.length; i++) {
								

								if (cod === 3) {
									cod = 1
								}
								

								if (cod === 1) {
									var cls = 'styline_line_table_2'
								} else if (cod === 2) {
									var cls = 'styline_line_table_1'
								}
								



						if (acesso_tb_upload === 1) {
						

							dados_upload[i][7] = "Calcular..."	
							dados_upload[i][8] = "Calcular..."	
							dados_upload[i][9] = "Calcular..."	
							dados_upload[i][10] = "Calcular..."	
							dados_upload[i][11] = "Calcular..."	
							dados_upload[i][12] = "Calcular..."	
							dados_upload[i][13] = "Calcular..."	
							dados_upload[i][14] = "Calcular..."	
							dados_upload[i][15] = "Calcular..."	
							dados_upload[i][16] = "Calcular..."	
							dados_upload[i][17] = "Calcular..."	
							dados_upload[i][18] = "Calcular..."	
							dados_upload[i][19] = "Calcular..."	


						}		




					new_table +=`<tr class="${cls}">`
					new_table +=`<td>${dados_upload[i][0]}</td>`
					new_table +=`<td>${dados_upload[i][2]}</td>`
					new_table +=`<td>${dados_upload[i][1]}</td>`						
					new_table +=`<td>${dados_upload[i][3]}</td>`						
					new_table +=`<td>${dados_upload[i][4]}</td>`						
					new_table +=`<td>${dados_upload[i][5]}</td>`						
					new_table +=`<td>${dados_upload[i][6]}</td>`						
					new_table +=`<td>${dados_upload[i][7]}</td>`						
					new_table +=`<td>${dados_upload[i][8]}</td>`						
					new_table +=`<td>${dados_upload[i][9]}</td>`						
					new_table +=`<td>${dados_upload[i][10]}</td>`						
					new_table +=`<td>${dados_upload[i][11]}</td>`						
					new_table +=`<td>${dados_upload[i][12]}</td>`						
					new_table +=`<td>${dados_upload[i][13]}</td>`						
					new_table +=`<td>${dados_upload[i][14]}</td>`						
					new_table +=`<td>${dados_upload[i][15]}</td>`						
					new_table +=`<td>${dados_upload[i][16]}</td>`						
					new_table +=`<td>${dados_upload[i][17]}</td>`						
					new_table +=`<td>${dados_upload[i][18]}</td>`						
					new_table +=`<td>${dados_upload[i][19]}</td>`						
					new_table +='</tr>'	
					




					cod ++;
				total_peso = total_peso + parseFloat(dados_upload[i][5]);
				total_nf = total_nf + parseFloat(dados_upload[i][4]);
				total_cubagem = total_cubagem + parseFloat(dados_upload[i][6]);
				total_fretes = total_fretes + parseFloat(dados_upload[i][19]);
				}


					$('.tabela_fretes_lotes').html(new_table);
					$('#vlr_tot_qtd_reg').html(dados_upload.length.toLocaleString('pt-br', {minimumFractionDigits: 0}));
					$('#vlr_tot_peso').html(total_peso.toLocaleString('pt-br', {minimumFractionDigits: 0}));
					$('#vlr_tot_nf').html(total_nf.toLocaleString('pt-br', {minimumFractionDigits: 0}));
					$('#vlr_tot_cubagem').html(total_cubagem.toLocaleString('pt-br', {minimumFractionDigits: 0}));
				

			if (acesso_tb_upload === 0) {	

					$('#vlr_tot_fretes').html(total_fretes.toLocaleString('pt-br', {minimumFractionDigits: 2}));		

		}			

}

function limpar_dados_lote() {

					$("#tb_lotes").css('display','none')
					$("#btn_export_dados_csv").css('display','none')
					$("#totalizador_table_demo").css('display','none')
					$("#info_processamento").css('display','none')
					$("#arquivo_import").val('')
					dados_upload = ""
}


function export_arquivos_csv() {

$('#info_processamento').html('Gerando Relatório...');
$('#info_processamento').css('color','#8B4726');
var dt = JSON.stringify(dados_upload);

			$.ajax({
				url:'executa_export_arquivos_csv.php',
				method:'POST',
				data:{dados_calculo_lote_php:dt},
				success:function(retorna){

					location.href = retorna
					 $('#info_processamento').html('Relatório exportado com Exito');
					 $('#info_processamento').css('color','#696969');
					//console.log(retorna)			
				}

			})


}

function valida_usuario_cliente_exist(){
		


	let tipo_requisicao = 'valida_user_exist'
	let login =  $('#cx_login').val()


	$.ajax({
		method:'POST',
		url:'php/executa_functions_return.php',
		data: {
			login:login,
			tipo_requisicao:tipo_requisicao
			},
			success:function(retorno){
				
					if(retorno == 1) {
						$('#msg_erro').html('O nome de usuário já esta sendo utilizado!!!');
						exibe_erro()	
					
					} else {
						exibe_pg_confirm_cad()
					}

				 				
				
			
			}

		})


}

function cadastrar_novo_usuario(){
	

		//if(user_vallid == 1) {
		//	$('#info_validacao_user').html('Erro no envio do Email');
		//	$('#info_validacao_user').css('display','inline-block')
		//	return
		 if (user_vallid == 2) {
			$('#info_validacao_user').html('Senha não confere com a enviada ao email');
			$('#info_validacao_user').css('display','inline-block')
			window.setTimeout(inibe_msg_validacao,3000)
			return
		}

		console.log(user_vallid)


	let id_cliente =  $('#cx_id_cliente').val()
	let tipo_cadastro =  $('#cx_tipo_cadastro').val()
	let nome_cliente =  $('#cx_nome_cliente').val()
	let cpf_cnpj =  $('#cx_cpf_cnpj').val()
	let rg_inscricao_estadual =  $('#cx_rg_inscricao_estadual').val()
	let dt_nascimento =  $('#cx_dt_nascimento').val()
	let nome_mae =  $('#cx_nome_mae').val()
	let nome_pai =  $('#cx_nome_pai').val()
	let celular =  $('#cx_celular').val()
	let email =  $('#cx_email').val()
	
	let cep =  $('#cx_cep').val()
	let logradouro =  $('#cx_logradouro').val()
	let numero_endereco =  $('#cx_numero_endereco').val()
	let complemento_endereco =  $('#cx_complemento_endereco').val()
	let bairro_endereco =  $('#cx_bairro_endereco').val()
	let uf =  $('#cx_uf').val()
	let cidade =  $('#cx_cidade').val()
	
	let login =  $('#cx_login').val()
	let senha =  $('#cx_senha').val()
	let confirmacao_senha =  $('#cx_confirmacao_senha').val()
	

	$.ajax({
		method:'POST',
		url:'php/executa_cadastra_usuario.php',
		data: {
			id_cliente:id_cliente,
			tipo_cadastro:tipo_cadastro,
			nome_cliente:nome_cliente,
			cpf_cnpj:cpf_cnpj,
			rg_inscricao_estadual:rg_inscricao_estadual,
			dt_nascimento:dt_nascimento,
			nome_mae:nome_mae,
			nome_pai:nome_pai,
			celular:celular,
			email:email,
			cep:cep,
			logradouro:logradouro,
			numero_endereco:numero_endereco,
			complemento_endereco:complemento_endereco,
			bairro_endereco:bairro_endereco,
			uf:uf,
			cidade:cidade,
			login:login,
			senha:senha,
			confirmacao_senha:confirmacao_senha
			
		},
		success:function(retorno){
			
				dados_retorno = JSON.parse(retorno)

				

										

				if (dados_retorno.status == 'success') {
					
					clear_fields_novo_usuario()					
					$('#msg_sucesso').html('Seu cadastro foi realizado com Exito');
				    $('#cx_id_cliente').val(dados_retorno.next_id)
					$('#container_conf_cad').css('display','none');
				
				 	 exibe_msg_sucesso()						
					
				} else {
					
					$('#msg_erro').html(dados_retorno.msg_erro);
					exibe_erro()
				}
			
			 

		}
	})


}


function valida_campos_cad () {

	trava_execucao = false;

	let tipo_cadastro =  $('#cx_tipo_cadastro').val()
	let nome_cliente =  $('#cx_nome_cliente').val()
	let cpf_cnpj =  $('#cx_cpf_cnpj').val()
	let rg_inscricao_estadual =  $('#cx_rg_inscricao_estadual').val()
	let dt_nascimento =  $('#cx_dt_nascimento').val()
	let nome_mae =  $('#cx_nome_mae').val()
	let nome_pai =  $('#cx_nome_pai').val()
	let celular =  $('#cx_celular').val()
	let email =  $('#cx_email').val()
	
	let cep =  $('#cx_cep').val()
	let logradouro =  $('#cx_logradouro').val()
	let numero_endereco =  $('#cx_numero_endereco').val()
	let bairro_endereco =  $('#cx_bairro_endereco').val()
	let uf =  $('#cx_uf').val()
	let cidade =  $('#cx_cidade').val()
	
	let login =  $('#cx_login').val()
	let senha =  $('#cx_senha').val()
	let confirmacao_senha =  $('#cx_confirmacao_senha').val()


	if(tipo_cadastro == '' || nome_cliente == '' || cpf_cnpj =='' || rg_inscricao_estadual =='' || dt_nascimento =='' 
	|| nome_mae =='' || nome_pai =='' || celular =='' || email =='' || cep =='' || logradouro ==''	 || numero_endereco ==''
	|| bairro_endereco =='' || login =='' || senha =='' || confirmacao_senha == '') {
			
			
			$('#msg_erro').html('Cadastro incompleto. Preencha os campos Obrigatórios (*) !!!');
			exibe_erro()
			trava_execucao = true;

			
		}

				

		 if (senha != confirmacao_senha) {
			$('#msg_erro').html('As senhas digitadas são divergentes !!!');
				exibe_erro()
				trava_execucao = true; 
		}

}

function clear_fields_novo_usuario(){

	
let nome_cliente =  $('#cx_nome_cliente').val("")
let cpf_cnpj =  $('#cx_cpf_cnpj').val("")
let rg_inscricao_estadual =  $('#cx_rg_inscricao_estadual').val("")
let dt_nascimento =  $('#cx_dt_nascimento').val("")
let nome_mae =  $('#cx_nome_mae').val("")
let nome_pai =  $('#cx_nome_pai').val("")
let celular =  $('#cx_celular').val("")
let email =  $('#cx_email').val("")
let cep =  $('#cx_cep').val("")
let logradouro =  $('#cx_logradouro').val("")
let numero_endereco =  $('#cx_numero_endereco').val("")
let complemento_endereco =  $('#cx_complemento_endereco').val("")
let bairro_endereco =  $('#cx_bairro_endereco').val("")
let login =  $('#cx_login').val("")
let senha =  $('#cx_senha').val("")
let confirmacao_senha =  $('#cx_confirmacao_senha').val("")
let cx_valida_user =  $('#cx_valida_user').val("")
$('#cx_nome_cliente').focus()

}



function  verifica_pass() {

	let cx_valida_user = $('#cx_valida_user').val()

	//if(dados_conf_cad['sts'] == 8) { 
	// status sucess	
	//}
		

		if(dados_conf_cad['pss'] == cx_valida_user) {
			user_vallid = 3
		} else {
			user_vallid = 2
		}
	
	
		
		cadastrar_novo_usuario()

	

}



function exibe_pg_confirm_cad() {
	


	//console.log(trava_execucao)	
	valida_campos_cad ()
			if(trava_execucao == true) {
					
				return
			}

		
			
	let email =  $('#cx_email').val()
	
	$('#container_conf_cad').css('display','block')	
	$('#msg_confirma').html('Acabmos de enviar um código de verificação para o email <div id="email_confirma">' + email +'</div>. Digite o Código recebido para concluir o seu cadastro. (Verifique a caixa de spam)')	

	



	$.ajax({
		method:'POST',
		url:'php/executa_envio_emails.php',
		data: {
			email:email, 
		},
		success:function(retorno){
			
			 dados_conf_cad = JSON.parse(retorno)
			
			
		}
	})




}

function fechar_conf_cad() {
	$('#container_conf_cad').css('display','none')	
	clear_fields_novo_usuario()
}

function return_next_id_cliente(){


	let tipo_requisicao =  'next_id_cliente';
	

	$.ajax({
		method:'POST',
		url:'php/executa_functions_return.php',
		data: {
				tipo_requisicao:tipo_requisicao
			},
			success:function(retorno){
			
				$('#cx_id_cliente').val(retorno)

			}

		})
	}


function executa_login() {

	let valor_usuario =  $('#cx_usuario').val();
	let valor_senha  =  $('#cx_senha').val();
	let tipo_requisicao = 'executa_login_cliente'

		$.ajax({
			method:'POST',
			url:'php/executa_functions_return.php',
			data: {
				valor_usuario:valor_usuario,
				valor_senha:valor_senha,
				tipo_requisicao:tipo_requisicao
				},
				success:function(retorno){
					
					dados_retorno = JSON.parse(retorno)

				
					 
					if (dados_retorno.status == 'success') {
						location.href = dados_retorno.link_redireciona
						
					} else {
						$('#msg_erro').html(dados_retorno.msg_erro);
						exibe_erro()
						$('#cx_usuario').focus();						
					}					

				
				}
	
			})
		

	
}

function exporta_table_demo(){

	var tipo_tabela = $('#cx_tipo_tabela').val()
	
		if(tipo_tabela == 'modelo_1'){
			location.href="relatorios/Modelo_tabela_demonstrativo.xlsx"
		} else {
			location.href="relatorios/Modelo_tabela_demonstrativo_2.xlsx"	
		}

}

function inclui_item () {
	
	valida_campos()

	if (validacao_cpos === 1) {
		$('#msg_erro').html('Preencha os Campos Obrigatórios!!!');
		exibe_erro()
		return
		
	}



	if (dados_item_incluido.length == 2 ){
		$('#msg_erro').html('É possível incluir somente dois itens para fazer o cálculo!!');
		exibe_erro()
		return
	}


	var cx_nome_remetente = $('#cx_nome_remetente').val()
	var cx_nome_destinatario = $('#cx_nome_destinatario').val()
	var cx_vlr_nf = $('#cx_vlr_nf').val()
	var	cx_peso_nf = $('#cx_peso_nf').val()
	var tabela = $('#cx_tipo_tabela').val()
	var id_remetente = $('#cx_id_remetente').val()
	var id_destinatario =  $('#cx_id_destinatario').val()

	let altura_cubagem = $('#cx_altura_cubagem').val().replace(".","").replace(",",".")
	let largura_cubagem = $('#cx_largura_cubagem').val().replace(".","").replace(",",".")
	let comprimento_cubagem = $('#cx_comprimento_cubagem').val().replace(".","").replace(",",".")
	let qtd_itens_cubagem = $('#cx_qtd_itens_cubagem').val()
	let fator_cubagem = $('#cx_fator_cubagem').val()
	var cubagem = altura_cubagem * largura_cubagem *  comprimento_cubagem *  qtd_itens_cubagem * fator_cubagem

	itm_seq ++;

	var dados_incluir = [
		itm_seq,
		cx_nome_remetente,
		cx_nome_destinatario,
		cx_vlr_nf,
		cx_peso_nf,
		cubagem,
		tabela,
		id_remetente,
		id_destinatario	
	]

	//console.log(tabela)

	dados_item_incluido.push(dados_incluir)

 


	var tab = document.querySelector('.frmt_tabela_itens')
	var new_table = '';	
		new_table +='<tr>'
		new_table +='<th>Item seq.</th>'	
		new_table +='<th>Cidade Remetente</th>'												
		new_table +='<th>Cidade Destinatário</th>'												
		new_table +='<th>Valor NF R$</th>'
		new_table +='<th>Peso Nota Fiscal</th>'
		new_table +='<th>Cubagem</th>'
		new_table +='<th>Tabela</th>'
		new_table +='</tr>'								
		

		var cod = 1	
		for (var i = 0; i < dados_item_incluido.length; i++) {
				

				if (cod === 3) {
					cod = 1
				}
				

				if (cod === 1) {
					var cls = 'styline_line_table_2'
				} else if (cod === 2) {
					var cls = 'styline_line_table_1'
				}
				
			new_table +=`<tr class="${cls}">`
			new_table +=`<td>${dados_item_incluido[i][0]}</td>`
			new_table +=`<td>${dados_item_incluido[i][1]}</td>`						
			new_table +=`<td>${dados_item_incluido[i][2]}</td>`						
			new_table +=`<td>${dados_item_incluido[i][3]}</td>`						
			new_table +=`<td>${dados_item_incluido[i][4]}</td>`						
			new_table +=`<td>${dados_item_incluido[i][5].toFixed(2)}</td>`	
			new_table +=`<td>${dados_item_incluido[i][6]}</td>`						
			new_table +='</tr>'

				cod ++
			}	


			
		$('.tabela_itens_calculo').css('display','block');	
		$('.frmt_tabela_itens').html(new_table);
		identifica_inclusao_item = 1	
		limpa_cmpos();		
				
}

 
function dados_sugestoes(){

	let cx_nome_contato = $('#cx_nome_contato').val()
	let email_contato = $('#email_contato').val()
	let  telefone_contato = $('#telefone_contato').val()
	let assunto = $('#assunto').val()
	let cx_mensagem_contato = $('#cx_mensagem_contato').val()

	if(cx_nome_contato == '' || email_contato == '' || telefone_contato == '' || assunto == ''
	|| cx_mensagem_contato == '' ){
		$('#msg_erro').html('Preencha todos os campos para enviar a mensagem');
				exibe_erro()
	
		return;
		
	}


	$.ajax({
		method:'POST',
		url:'php/executa_functions_return.php',
		data: 
		{
			cx_nome_contato:cx_nome_contato,
			email_contato:email_contato,
			telefone_contato:telefone_contato,
			assunto:assunto,
			cx_mensagem_contato:cx_mensagem_contato	,
			tipo_requisicao:'cadastra_dados_sugestoes'	
		},
		success:function(retorno)
		{

				if(retorno == 1){
					$('#msg_sucesso').html('Sua mensagem foi enviado com sucesso!!!');
					exibe_msg_sucesso()

				     $('#cx_nome_contato').val('')
					 $('#email_contato').val('')
					 $('#telefone_contato').val('')
				     $('#assunto').val('')
					 $('#cx_mensagem_contato').val('')
					 $('#cx_nome_contato').focus()
					
				} else{

				}
			

		}

	})




}

function fechar_confirmacao() {
	//cx_valida_user
	clear_fields_novo_usuario()
	$('#container_conf_cad').css('display','none');

}


function executa_logoff() {	



	$.ajax({
		method:'POST',
		url:'php/executa_functions_return.php',
		data: 
		{
			tipo_requisicao:'executa_logoff'	
		},
		success:function(retorno)
		{

				window.location.href = 'login.php'


		}

	})

}