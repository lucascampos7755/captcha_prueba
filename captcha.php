<!DOCTYPE html>
<html lang ="es">
  <head>
      <meta charset="UTF-8">
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="procesa.php" method="POST">
        Nombre completo <input name="nombre" type="text" id="nombre completo"size="30" maxlength="100"> 
<br> 
Correo electronico <input name="email" type="text"> 
<br> 
      <input name= "com"></textarea><br>
       
      <div class="g-recaptcha" data-sitekey="6LcWBK4UAAAAAB4Pc-n8labJTC8Eo9laK2m4ardR"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>