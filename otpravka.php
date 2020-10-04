 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>
 	<header class="container-fluid header">
 	<div class="row">
				<div class="col-3 logo_block">
					<img src="img/logo.png" class="logo"> 
				</div>
				<div class="zagolovok col-9">
					<p>Отправка сообщения на почту</p>
				</div>
			</div>
		</div>
 </header>
 <main class="container main">
 	<?php 
$message_otpravka  = $_POST['message_otpravka'];
$email = $_POST['email'];

$result = mail("$_POST[email]","Готовое заявление о жёстком обращении с животными","Ваше заявление: \n $_POST[message_otpravka] \n\n С уважением ваш web-сервис");
if ($result==1) {
	echo "<p>Сообщение отправлено!</p>";
}
else {
	echo "<p>Сообщение НЕ отправлено!</p>";
}
 ?>
 </main>
 <footer class="container-fluid footer">
 	
 </footer>
 </body>
 </html>
 
 