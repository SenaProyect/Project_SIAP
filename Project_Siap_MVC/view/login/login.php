</head>

<body>

<header class="content_login">

<div class="tab" >
  <button class="tablinks" onclick="openCity(event, 'username')">Usuario</button>
  <button class="tablinks" onclick="openCity(event, 'contraseña')">Administrador</button>
</div>

<div id="username" class="tabcontent1">
<form>
  <center>  
    <h1>Login Usuario<h1>
    <img src="assets/img/logo.png" style="width: 150px;height: 150px">
    <input type="text" name=""  placeholder="N° Documento" > <br>
    <input type="password" name=""  placeholder="Password"> <br> 
    <input type="submit" name="" value="Iniciar Sesion" class="btn-info"><br><br>
     <a href="registro.php" style="color: #424242; font-size: 20px;">Registrarse</a><br><br>
    <hr>
  </center>
  </form>
</div>

<div id="contraseña" class="tabcontent">
<form>
  <center>  
    <h1>Login Admin<h1>
        <img src="assets/img/logo.png" style="width: 150px;height: 150px">
    <input type="text" name=""  placeholder="N° Documento" > <br>
    <input type="password" name=""  placeholder="Password"><br>
    <input type="submit" name="" value="Iniciar Sesion" class="btn-danger"><br><br>
    <a href="registro.php" style="color: #424242; font-size: 20px;">Registrarse</a><br>
   <br> 
    <hr>
  </center>
</form>

</div>
 </header>