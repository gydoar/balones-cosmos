<?php 

    if(trim($_POST['nombre']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['nombre']);
    }
    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }
    if(trim($_POST['asunto']) === '') {
        $asuntoError = 'Por favor ingrese un asunto.';
        $hasError = true;
    } else {
        $asunto = trim($_POST['asunto']);
    }
    
    if(!isset($hasError)) {
        $subject = '[Contacto balones cosmos] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfono: $telefono \n\nAsunto: $asunto";
        $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
        mail($email, $subject, $body, $headers);
        $emailSent = true;
    } 


	 if(isset($emailSent) && $emailSent == true) {
		echo "yes";

     } 

    if(isset($hasError) || isset($captchaError)) {

    	if(isset($nameError)) 
    		{echo $nameError;}
		elseif(isset($emailError)) 
			{echo $emailError;}
		elseif(isset($telError)) 
			{echo $telError;}
		elseif(isset($asuntoError)) 
			{echo $asuntoError;}
		elseif (isset($captchaError)) 
			{echo $captchaError;}
     } 
?>

<!-- Google Code for Form-COTIZA-BCosmos Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 940467947;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "HNIRCLK6h2AQ6825wAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/940467947/?label=HNIRCLK6h2AQ6825wAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

									