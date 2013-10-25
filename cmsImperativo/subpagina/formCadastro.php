<style>
form{
margin:0;
padding:0;
width:500px;
}

label{
font-size:12px;
}

form fieldset label{
display:block;
padding:3px;

}

form fieldset input{
width:150px;
padding:1px;
display:block;
}

form fieldset select{
width:150px;
padding:1px;
display:block;
}

form fieldset input{
width:150px;
padding:0px;
display:block;

}


form fieldset select{
margin:0px;

}

form fieldset input.botao{
float:right;
background-color:#99CC00;
}


</style>
<br />
<div class="acao">
 <a href="cadastrar.php">View Users</a>
 &nbsp;&nbsp;&nbsp;

<form method="post" action="controller/userController/insereUsuario.php" >

  
     <fieldset>
     <legend>Dados Pessoais </legend>
      <label>Nome:<input id="nome" type="text" name="nome" />
    </label>
  
   
    
  
   
      <label>Nacionalidade:<input id="nascionalidade" type="text" name="nascionalidade" />
    </label>
  

   
      <label>Naturalidade:<input id="naturalidade" type="text" name="naturalidade" />
    </label>
  
   
      <label>Data de nascimento:<input id="nascimento" type="text" name="nascimento" />

    </label>
  
   

  
   
      <label>Sexo 
        <select name="sexo">
        <option value="masculino">masculino</option>
        <option value="feminino">feminino</option>
        </select>
     </label>
  
   
      <label>RG:<input id="rg" type="text" name="rg" />

    </label>
  
   
      <label>Órgão emissor:<input id="orgaoemissor" type="text" name="orgaoemissor" />
    </label>
  
   
      <label>Data de expedição:<input id="expedicao" type="text" name="expedicao" />
    </label>
  
   
      <label>CPF </label><input id="cpf" type="text" name="cpf" />
    </label>
  

   
      <label>Estado civil:<input id="ec" type="text" name="estadociviluser" />
    </label>
	
	
</fieldset>
  
  <fieldset>
    <legend>Dados de contato </legend>
      <label>Endereço:<input id="endereco" type="text" name="enderecouser" />
    </label>
  

   
      <label>Cidade:<input id="cidade" type="text" name="cidadeuser" />
    </label>
  
   
      <label>Uf:<input id="uf" type="text" name="ufuser" />

    </label>
  
   
      <label>CEP:<input id="cep" type="text" name="cepuser" />
    </label>
  
   
      <label>Telefone residencial:<input id="telres" type="text" name="telresuser" />
    </label>
  
   
      <label>Celular:<input id="celular" type="text" name="celularuser" />
    </label>
  

   
      <label>Email:<input id="email" type="text" name="emailuser" />
    </label>
   </fieldset>
  
  <fieldset>
    <legend>Dados Profissionais </legend>
	
	  <label> Filiação:<input id="filiacao" type="text" name="filiacao" />
    </label>
	
	
      <label>CREF (obrigatório para profissionais da área de educação física):<input id="cref" type="text" name="cref" />

    </label>
  
   
      <label>Grau de instrução:<input id="gi" type="text" name="grauinstrucao" />
    </label>
	
	  <label>Função:<input id="funcao" type="text" name="funcao" />

    </label>
  
   
      <label>Categoria:
       
        <input id="categoria" type="text" name="categoria" />
    </label>
	
  
   </fieldset>
   
   
   <fieldset>
   <legend>Instituição</legend>
  <label>Formato da instituição:     
        <input id="fi" type="text" name="fi" />
    </label>
  
   
      <label>Uf:<input id="uf" type="text" name="uf3" />
    </label>
  

   
      <label>Carreira:      
        <input id="carreira" type="text" name="carreira" />
    </label>
  
   
      <label>Ano da conclusão:<input id="ac" type="text" name="ac" />

    </label>
  
   
      <label>Local principal de trabalho:<input id="localtrabalho" type="text" name="localtrabalho" />
    </label>
  
   
      <label>Endereço:<input id="endereco" type="text" name="endereco" />
    </label>
  
   
      <label>Cidade:<input id="cidade" type="text" name="cidade" />
    </label>
  

   
      <label>Uf:<input id="uf" type="text" name="uf" />
    </label>
  
   
      <label>CEP:<input id="cep" type="text" name="cep" />

    </label>
  
   
      <label>Telefone residencial:<input id="telres" type="text" name="telres" />
    </label>
  
   
      <label>Celular:<input id="celular" type="text" name="celular" />
    </label>
  
   
      <label>Email:<input id="email" type="text" name="email" />
    </label>
  

   
      <label>Idade </label><input id="idade" type="text" name="idade" />
    </label>
  
    </fieldset>
    
   <fieldset>
   <legend>Dados de Acesso</legend>
      <label>Login </label>

       
        <input id="login" type="text" name="login" />
    </label>
  
   
      <label>Senha </label>
       
        <input id="senha" type="text" name="senha" />
    </label>
  
 </fieldset>
 <fieldset>
   
      <label>&nbsp;
       
        <input id="botao" type="submit" name="submit" value="cadastrar" class="botao"/>
    </label>
  
</fieldset>
</form>
