<?php include("inc/header.php"); ?> <!-- Includes the header.php file (Black Header with Title of Page) -->

<?php
    $to = 'info@quicklang.net';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
    $text= $_POST["message"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Email: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {	
		echo "<style> body { background-image: url(../img/contact-bg.jpg); } </style>" ?>
		<div class = "container"></div>
		<div class="row justify-content-center text-center"></div>
		<div class="col-lg-3 col-md-6">
			<h2 class="text-white">Your message <span>has been sent!</span></h2>
			<p class="text-white">
		</div>
			
<?php
        
    }else{
        echo 'failed';
    }

?>
