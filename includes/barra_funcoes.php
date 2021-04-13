<div id='container_barr_funcoes'>

        <h2 id='titulo_menu_cad'>
             <?php 
                  
                    echo($_SESSION['nome_opcao']);
             ?>
        </h2>
          <div id='btns_menu_funcoes'>
               <input type="button" value="Cadastrar" class ='btns_tipo2' onclick='valida_usuario_cliente_exist()'>
               <input type="button" value="Cancelar" class ='btns_tipo2' onclick='clear_fields_novo_usuario()'>
          </div>	

</div>
