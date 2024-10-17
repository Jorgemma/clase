<!DOCTYPE html>
<html= lang="en">
   <head>
      <title>KevinDev</title>
      <meta charset="UTF-8">
      <meta name ="viewport" content="width=divice-width, initial-scale=1.0">
      <meta name="description" content="pagina personal de KTML">
      <meta name ="keywords" content=" UNAM, Fes Aragón la mejor">
      <link rel="stylesheet" href="./adjuntos/css/css.css">
      <script src="./adjuntos/js/cliente.js"></script>
    <title>Document</title>
   </head>
<body">
   <header>
        <h1 style="color: green; font-size: 24px; background-color: darkseagreen;"> Mi pagina personal </h1>
        <nav>
            <UL>
                <li><a href="index.html">Home</a></li>
                <li><a href="http://aragon.unam.mx">FES Aragón</a></li>
                <li><a href="http://www.google.com">Google</a></li>
                <li>
                        <ul>
                            <li><a href="code.html">Code</a></li>
                            <li><a href="listas.html">Listas</a></li>
                            <li><a href="enlaces.html">Enlaces e imagenes</a></li>
                            <li><a href="tablas.html">Tablas</a></li>
                            <li><a href="formularios.html">Formularios</a></li>
                        </ul>
                </li>
            </UL>
        </nav>
   </header>
   <main>
        <?php
            $usuariodb="admin";
            $contraseñadb="patito123";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $usr=$_POST['usuario'];
                $pass=$_POST['password'];
                if($pass ===$contraseñadb && $usuariodb === $usr){
                    echo "<h3> Bienvenido, $usr !</h3>";
                }else{
                    echo "<h3> Datos incorrectos </h3>";
                }
            }

        ?>

   </main>
 
   <footer>
        <p> Todos los derechos reservados Fes Aragón 2024</p>
   </footer>
</body>
</html>