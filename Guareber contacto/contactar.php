<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Contactanos</title>
<link rel="stylesheet" type="text/css" href="estilo_boton.css">
</head>

<body>
<div align="center">
<p style="font-family:Arial, Helvetica, sans-serif; font-size:15px;">Deseas enviar un mensaje.</p>
<section class="formulario">
    <form action="contacto.php" method="post">
<table align="center">
  <tr>
    <td><label for="nombre">Nombre:</label></td> 
        <td><input id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required /></td>
    </tr>
    
     <tr>
    <td><label for="apellido">Apellido:</label></td> 
        <td><input id="apellido" type="text" name="apellido" placeholder="Apellido" required /></td>
    </tr>

  <tr>
      <td><label for="email">Email:</label></td>
<td> <input id="email" type="email" name="email" placeholder="ejemplo@correo.com" required /></td>
  </tr>
  <tr> 
      <td><label for="mensaje">Mensaje:</label></td>
    <td><textarea id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea></td>
    </tr>
    
    <tr>
    <td><input id="submit" type="submit" name="submit" value="Enviar" /></td>
    </tr>
</table>
</form>
  </section>

</div></div></div>

<div class='social_bookmarks_container'>
<ul class='social_bookmarks'>
<li class='iconrss'>
<a href='/atom.xml'>
RSS
</a>
</li>
<li class='iconrssmail'>
<a href='http://feedburner.google.com/fb/a/mailverify?uri=NombreDelFeed'>
RSS Mail
</a>
</li>
<li class='icontwitter'>
<a href='https://twitter.com/GuareberTech'>
Twitter
</a>
</li>
<li class='iconfacebook'>
<a href='https://www.facebook.com/groups/681018908619134/' target="_blank">
Facebook
</a>
</li>
<li class='iconyoutube'>
<a href='https://www.youtube.com/channel/UC2F9yTEkV7-1JSBjAgaLIbQ'>
YouTube
</a>
</li>
</ul>
</div>
</html>