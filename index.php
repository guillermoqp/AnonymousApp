<?php
session_start();
$cap = 'notEq';
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // Verificamos si el captcha es correcto
    if ($_POST['captcha'] == $_SESSION['cap_code']) 
    {
  	$mensaje= "Captcha Correcto";
        $cap = 'Eq';
    } 
    else
    {
        $mensaje= "Captcha Incorrecto";
        $cap = '';
    }
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Ejercicio 2 con Captcha - PHP y Jquery Easy</title>
</head>
<body>
<div class="cabecera"><img src="http://www.jqueryeasy.com/application/views/templates/colorvoid/static/images/logo.gif"/></div>
    <div style='margin:0 auto'>
    <h4>Captcha con PHP</h4>
        <form action="index.php" method="post">
            <div id="form">
                <table border="0" width="100%">
                <tr>
                   <td colspan="2"><label>Nombres:</label><label class="mandat"> *</label><br/>
                   <input type="text" name="name" id="name"/></td>
                </tr>
                <tr>
                    <td colspan="2"><label>Mensaje:</label><label class="mandat"> *</label><br/>
                    <textarea  name="msg" id="msg"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><label>Ingrese el contenido de la imagen</label><label class="mandat"> *</label></td>
                </tr>
                <tr>
                    <td width="60px">                           
                    <input type="text" name="captcha" id="captcha" maxlength="4" size="4"/></td>
                    <td><img src="captcha.php"/></td>
                </tr>
                <tr>
                  <td><input type="submit" value="Submit" id="submit"/></td>
                </tr>
                </table>
            </div>
        </form>
    <p class="error"><?php echo $mensaje; ?></p>
</div>
</body>
</html>
