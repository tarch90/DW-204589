<!DOCTYPE html>
<html xmlns ="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Indie Heart</title
        <meta http-equiv="Content-Type"; content="text/html;
        charset=utf-8"/>
        <link rel="stylesheet" href="css/contacto.css"/>
    </head>
    
    <body>
         <header>
      <nav class="main-nav">
        <ul class="nav__list">
          <li class="nav__list-item">
            <a href="index.html" class="nav__link">Home</a></li>
          <li class="nav__list-item">
            <a href="acerca.html" class="nav__link">Acerca</a>
          </li>
          <li class="nav__list-item">
            <a href="contacto.php" class="nav__link">Contacto</a>
        </ul>
      </nav>

    </header>
        <main>
        <h2>Contacto</h2>

        <form class="clientes" action="guardar.php" method="POST"
        id="contact_form" runat="server" enctype="multipart/form-data">

            <label for="Nombre">Nombre:</label><br>
            <input type="text" id="Nombre" name="Nombre"
            maxlength="30" require><br>

            <label for="Apellidos">Apellidos:</label><br>
            <input type="text" id="Apellidos" name="Apellidos"
            maxlength="60" require><br>

            <label for="Calle">Calle:</label><br>
            <input type="text" id="Calle" name="Calle"
            maxlength="60" require><br>

            <label for="Telefono">Telefono:</label><br>
            <input type="text" id="Telefono" name="Telefono"
            maxlength="20" require><br>

            <label for="Correo">Correo:</label><br>
            <input type="text" id="Correo" name="Correo"
            maxlength="60" require><br>

            <button class="submit" type="submit">Enviar</button>
        </form>
        </main>
        
    </body>
</html>