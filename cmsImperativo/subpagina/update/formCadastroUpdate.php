<?php
/*
print "<pre>";
print_r($dados);
print "</pre>";
*/
?>
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
 <a href="cadastrar.php">visualizar cadastrados</a>
 &nbsp;&nbsp;&nbsp;
 <a href="cadastroDeUsuarioComum.php">adicionar Usuário Comum</a>
   </div>

<form method="post" action="controller/userController/update/updateUser.php?id=<?=$dados["idpessoa"]?>" >

  
     <fieldset>
     <legend>Dados Pessoais </legend>
      <label>Nome:<input id="nome" type="text" name="nome" value="<?=$dados["nome"]?>"/>
    </label>
  
   
    
  
   
      <label>Nacionalidade:<input id="nascionalidade" type="text" name="nascionalidade" value="<?=$dados["nacionalidade"]?>"/>
    </label>
  

   
      <label>Naturalidade:<input id="naturalidade" type="text" name="naturalidade" value="<?=$dados["naturalidade"]?>"/>
    </label>
  
   
      <label>Data de nascimento:<input id="nascimento" type="text" name="nascimento" value="<?=$dados["nascimento"]?>"/>

    </label>
  
   

  
   
      <label>Sexo 
        <select name="sexo" value="<?=$dados["sexo"]?>">
        <option value="masculino">masculino</option>
        <option value="feminino">feminino</option>
        </select>
     </label>
  
   
      <label>RG:<input id="rg" type="text" name="rg" value="<?=$dados["rg"]?>"/>

    </label>
  
   
      <label>Órgão emissor:<input id="orgaoemissor" type="text" name="orgaoemissor" value="<?=$dados["orgaoemissor"]?>"/>
    </label>
  
   
      <label>Data de expedição:<input id="expedicao" type="text" name="expedicao" value="<?=$dados["dataexpedicao"]?>"/>
    </label>
  
   
      <label>CPF </label><input id="cpf" type="text" name="cpf" value="<?=$dados["cpf"]?>"/>
    </label>
  

   
      <label>Estado civil:<input id="ec" type="text" name="estadociviluser" value="<?=$dados["estadocivil"]?>"/>
    </label>
	
	
</fieldset>
  
  <fieldset>
    <legend>Dados de contato </legend>
      <label>Endereço:<input id="endereco" type="text" name="enderecouser" value="<?=$dados["endereco"]?>"/>
    </label>
  

   
      <label>Cidade:<input id="cidade" type="text" name="cidadeuser" value="<?=$dados["cidade"]?>"/>
    </label>
  
   
      <label>Uf:<input id="uf" type="text" name="ufuser" value="<?=$dados["uf"]?>"/>

    </label>
  
   
      <label>CEP:<input id="cep" type="text" name="cepuser" value="<?=$dados["cep"]?>"/>
    </label>
  
   
      <label>Telefone residencial:<input id="telres" type="text" name="telresuser" value="<?=$dados["telresidencial"]?>"/>
    </label>
  
   
      <label>Celular:<input id="celular" type="text" name="celularuser" value="<?=$dados["telcelular"]?>"/>
    </label>
  

   
      <label>Email:<input id="email" type="text" name="emailuser" value="<?=$dados["email"]?>"/>
    </label>
   </fieldset>
  
  <fieldset>
    <legend>Dados Profissionais </legend>
	
	  <label> Filiação:<input id="filiacao" type="text" name="filiacao" value="<?=$dados["filiacao"]?>"/>
    </label>
	
	
      <label>CREF (obrigatório para profissionais da área de educação física):<input id="cref" type="text" name="cref" value="<?=$dados["cref"]?>"/>

    </label>
  
   
      <label>Grau de instrução:<input id="gi" type="text" name="grauinstrucao" value="<?=$dados["grauinstrucao"]?>"/>
    </label>
	
	  <label>Função:<input id="funcao" type="text" name="funcao" value="<?=$dados["funcao"]?>"/>

    </label>
  
   
      <label>Categoria:
       
        <input id="categoria" type="text" name="categoria" value="<?=$dados["categoria"]?>" />
    </label>
	
  
   </fieldset>
   
   
   <fieldset>
   <legend>Instituição</legend>
  <label>Formato da instituição:     
        <input id="fi" type="text" name="fi" value="<?=$dados["formatoinstituicao"]?>" />
    </label>
  
   
      <label>Uf:<input id="uf" type="text" name="uf3" value="<?=$dados["ufinst"]?>" />
    </label>
  

   
      <label>Carreira:      
        <input id="carreira" type="text" name="carreira" value="<?=$dados["carreirainst"]?>" />
    </label>
  
   
      <label>Ano da conclusão:<input id="ac" type="text" name="ac" value="<?=$dados["anoconclusaoinst"]?>"/>

    </label>
  
   
      <label>Local principal de trabalho:<input id="localtrabalho" type="text" name="localtrabalho" value="<?=$dados["localtrabalhoinst"]?>"/>
    </label>
  
   
      <label>Endereço:<input id="endereco" type="text" name="endereco" value="<?=$dados["enderecoinst"]?>"/>
    </label>
  
   
      <label>Cidade:<input id="cidade" type="text" name="cidade" value="<?=$dados["cidadeinst"]?>"/>
    </label>
  

   
      <label>Uf:<input id="uf" type="text" name="uf" value="<?=$dados["ufinst"]?>"/>
    </label>
  
   
      <label>CEP:<input id="cep" type="text" name="cep" value="<?=$dados["cepinst"]?>"/>

    </label>
  
   
      <label>Telefone residencial:<input id="telres" type="text" name="telres" value="<?=$dados["residencialinst"]?>"/>
    </label>
  
   
      <label>Celular:<input id="celular" type="text" name="celular" value="<?=$dados["celularinst"]?>"/>
    </label>
  
   
      <label>Email:<input id="email" type="text" name="email" value="<?=$dados["emailinst"]?>"/>
    </label>
  

   
      <label>Idade </label><input id="idade" type="text" name="idade" value="<?=$dados["nascimento"]?>"/>
    </label>
  
    </fieldset>
    
   <fieldset>
   <legend>Dados de Acesso</legend>
      <label>Login </label>

       
        <input id="login" type="text" name="login" value="<?=$dados["login"]?>"/>
    </label>
  
   
      <label>Senha </label>
       
        <input id="senha" type="text" name="senha" value="<?=$dados["senha"]?>"/>
    </label>
  
 </fieldset>
 <fieldset>
   
      <label>&nbsp;
       
        <input id="botao" type="submit" name="submit" value="cadastrar" class="botao"/>
    </label>
  
</fieldset>
</form>
