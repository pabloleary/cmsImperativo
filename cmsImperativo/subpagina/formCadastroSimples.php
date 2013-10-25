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
