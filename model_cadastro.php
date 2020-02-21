<?php
require ("header.php");
?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  

    <br>
    <section class="img_cadastros">
  
     <div class="container font">


      
        <div class=" font">
        <form action="exe/cadastro_escola_exe.php" method="post">
           
          <div class="form-group">
            <label for="exampleInputPassword1">Nome da Escola</label>

            <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome da Escola">

          </div>

  
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">CNPJ</label>

              <input type="text" name="cnpj" class="form-control" placeholder="Digite seu CNPJ">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Telefone</label>
              <input type="text" name="telefone" class="form-control" placeholder="Digite seu Telefone">

          </div>
          </div>
    
        <br>
    
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Endereço</label>

              <input type="text" name="endereco" class="form-control" placeholder="Digite seu Enderço">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Nº</label>
              <input type="text" name="numero" class="form-control" placeholder="Digite o número da Residência">

          </div>
          </div>
 
        <br>

          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Cidade</label>

              <input type="text" name="cidade" class="form-control" placeholder="Digite sua Cidade">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Estado</label>
              <input type="text" name="estado" class="form-control" placeholder="Digite seu Estado">

          </div>
          </div>
   
        <br>

          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">País</label>

              <input type="text" class="form-control" placeholder="Digite seu Pais" name="pais">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">CEP</label> 
              <input type="text" class="form-control" placeholder="Digite seu CEP" name="cep">

          </div>
          </div>
      <br>     
     
         <div class="row">
         <div class="col">
            <label for="exampleFormControlSelect1">Tipo de Escola</label>
            <select class="form-control" id="exampleFormControlSelect1" name="tipo_escola">
              <option>Escolher...</option>
              <option>Particular</option>
              <option>Pública</option>
              
            </select>
          </div>

          <div class="col">

            <label for="exampleFormControlSelect1">Tipo de Ensino</label>

            <select class="form-control" id="exampleFormControlSelect1">
              <option>Escolher...</option>
              <option>Fundamental 01</option>
              <option>Fundamental 02</option>
              <option>Médio</option>
              <option>Fundamental 02 / Médio</option>
              <option>Fundamental 01 / Fundamental 02 / Médio</option>
              <option>Fundamental 01 / Fundamental 02</option>
              <option>Ensino Superior</option>
              <option>Pós-Graduação</option>
              <option></option>
            </select>
          </div>
          </div>
          <br>
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Nome de usuário</label>
              <input type="text" class="form-control" placeholder="Digite seu nome de usuário" name="usuario">
          </div>
          <div class="col">
              <label for="exampleInputPassword1">Senha</label> 
              <input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
          </div>
          </div>
         
          <br>
          <div class="right_button">
              <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          <br>
        </div>

        </form>
      
  </div>
  </section>      
 
  </main>
<?php
require ("footer.php");
?>
