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
 

<form method="post" action="controller/insertUserRegister.php" >  
     <fieldset>
     <legend>User Info</legend>
      <label>E-mail:<input id="email" type="text" name="emailuser" />
    </label>  
      <label>Password</label>       
        <input id="password" type="text" name="password" />
    </label>
  
 </fieldset>
 <fieldset>   
      <label>&nbsp;       
        <input id="botao" type="submit" name="submit" value="Done" class="botao"/>
    </label>  
</fieldset>
</form>
