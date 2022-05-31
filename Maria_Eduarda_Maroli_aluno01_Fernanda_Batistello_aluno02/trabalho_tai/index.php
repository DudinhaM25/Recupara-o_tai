<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <html>
    <title>Sis Agenda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 
 <style>
.inputBox{
   width: 100%; 
    margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;

}
.box{
  width: 35%;
  display: inline-block;

}
legend {
  margin-left: 20px;
}
.conteudo{
    border: solid;
    border-width:1px;
    border-color: #808080;
    box-sizing: border-box;
  height: 180px;
    display: table;
width: 80%;
}

.imagem{
    display:table-cell;
float:left;
}

.contatos1{
    display:table-cell;
float: left;
width: 300px;
margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;
   font-size: small;
}
.conteudo1{
    border: solid;
    border-width:1px;
    border-color: #808080;
    box-sizing: border-box;
  height: 180px;
    display: table;
    width: 70%;
  }

.imagem1{
    display:table-cell;
float:left;
}

.contatos{
    display:table-cell;
float: left;
width: 300px;
margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;
   font-size: small;
   
  }
.box1{
 width: 41%;
float: right;
margin-right: 460px;
}

</style> 
<legend><b>Telas</b></legend>
         <br>
       </fieldset>
       <div class="box">
       <div class="inputBox">
       
       <div class="conteudo">
       
       <div class="imagem">
       <img src="./images/contato.png" width=110><br>
       </div>
      
   <div class="contatos1">
       <h3>
Meus Contatos
       </h3>
     
       <p>
Cadastre e Gerencie todos os seus contatos
       </p>
    
       <button class="btn btn-primary" type="submit" onclick="window.location.href = './pagina/contatolista.php'">Ver</button>
      
       
    </div>
       </div>
       </div>
    </div>   
    <div class="box1">   
      <div class="conteudo1">
    
       <div class="imagem1">
       <img src="./images/agenda.png" width=110><br>
       </div>
      
   <div class="contatos">
       <h3>
Minha Agenda
       </h3>
     
       <p>
       Cadastre e Gerencie todos os seus compromissos na sua Agenda
       </p>
    
       <button class="btn btn-primary" type="submit" onclick="window.location.href = './pagina/agendalista.php'">Ver</button>
      
       
    </div>
       </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d26ae53813.js" crossorigin="anonymous"></script>
  </body>
</body>
  <?php echo '<p> </p>'; ?> 
  </body>
</html>