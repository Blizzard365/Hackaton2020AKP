<?php 
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$otchestvo = $_POST['otchestvo'];
	$year = $_POST['year'];
	$adres = $_POST['adres'];
	$fact_adres = $_POST['fact_adres'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$work = $_POST['work'];
	$doljnost = $_POST['doljnost'];
	$pol = $_POST['pol'];
	$time = $_POST['time'];
	$date = $_POST['date'];
	$datenow = $_POST['datenow'];
	$prestupnik = $_POST['prestupnik'];
	$prestupnikadres = $_POST['prestupnikadres'];
	$place = $_POST['place'];
	$message  = $_POST['message'];

 ?>
 <?php
$data='';
foreach ($_POST as $key => $value) {
  $data .= $key . ' = ' . $value . '
';
}
//echo $data;
$str='';
$str1='';
$str2='';
$str3='';
$str4='';
$str5='';
$str6='';
$str7='';
$str8='';
$str9='';
$str10='';
$str11='';
$str12='';
$str13='';
$str14='';
$str15='';
$str16='';
$str17='';
$str18='';
foreach ($_POST as $key => $value) {
  // добавим в переменную $data имя и значение ключа
  $data .= $key . ' = ' . $value . '
';
if($value == 1){
	$str='статье 245 УК РФ. "Жестокое обращение с животными"';
}
if($value == 2){
	$str1='статье 158 УК РФ. "Кража"';
}
if($value == 3){
	$str2='статье 29 ЗоЗПП. "Права потребителя при обнаружении недостатков выполненной работы (оказанной услуги)"';
}
if($value == 4){
	$str3='статье 1139 ГК РФ. "Завещательное возложение"';
}
if($value == 5){
	$str4='';
}
if($value == 6){
	$str5='статье 285.1. УК РФ "Нецелевое расходование бюджетных средств"';
}
if($value == 7){
	$str6=' и по статье 20.13. КоАП РФ "Стрельба из оружия в отведённых для этого местах с нарушением установленных правил или в не отведённых для этого местах"
';
}
if($value == 8){
	$str7=' и по статье 245 УК РФ. "Жестокое обращение с животными и статье 119 УК РФ Угроза убийством или причинением тяжкого вреда здоровья"';
}
if($value == 9){
	$str8=' и по статье 245 УК РФ. "Жестокое обращение с животными и статье 119 УК РФ Угроза убийством или причинением тяжкого вреда здоровья"';
}
if($value == 10){
	$str9=' и по статье 245 УК РФ. "Жестокое обращение с животными и статье 119 УК РФ Угроза убийством или причинением тяжкого вреда здоровья"';
}
if($value == 11){
	$str10='Действие происходило в населённом пункте. ';
}
if($value == 12){
	$str11='';
}
if($value == 13){
	$str12=' в присутствии детей';
}
if($value == 14){
	$str13='';
}
if($value == 15){
	$str14='Собака была домашней. ';
}
if($value == 16){
	$str15='Собака была дикой. ';
}
if($value == 17){
	$str16='Это была породистая собака. ';
}
if($value == 18){
	$str17='Это была не породистая собака. ';
}
if($value == m){
	$str18='';
}
if($value == zh){
	$str18 = 'а';
}
}
?>
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
					<p>Проверка вашего заявления</p>
				</div>
			</div>
		</div>
 	</header>
 <h3 class="h3">Проверте корректность введённых данных и отредактируйте, если это необходимо</h3>
 <form class="otpravka" method="POST" action="otpravka.php">
 <textarea name="message_otpravka" rows="30" cols="90" class="form-control" >
 
Начальнику __________________________кого РУВД
_____________________________________________,
(указать специальное звание фамилию и инициалы)
<?php echo $lastname; echo " "; echo $name; echo " ";echo $otchestvo; echo ", "; echo $year;?> года рождения,
<?php echo "Адрес прописки: "; echo $adres;echo "\n";echo "Адрес проживания: ";echo $fact_adres;echo "\n";echo "Тел. "; echo $tel;echo "\n";echo "E-mail: "; echo $email; ?>,
<?php echo "Место работы: "; echo $work; echo ", ";echo "Дожность: "; echo $doljnost;?>,

										ЗАЯВЛЕНИЕ.
<?php echo $datenow; ?> я стал<?php echo $str18;?> свидетелем жестокого обращения с животным. События происходили в <?php echo $time; ?> в <?php echo $place; ?>.
Гражданин <?php echo $prestupnik; ?>, проживающий по адресу <?php echo $prestupnikadres;?> издевался над животным <?php echo $str12; echo $str13; ?>.<?php echo"\n"; ?><?php echo $str10; echo $str11; echo $str14; echo $str15; echo $str16; echo $str17;?> <?php echo "\n"; ?>

<?php echo $message; echo "\n";?>

Прошу принять меры к задержанию указанных лиц и возбуждении уголовного дела по <?php echo $str; echo $str1; echo $str2; echo $str3; echo $str4; echo $str5; echo $str6; echo $str7; echo $str8; echo $str9; ?>
Предупрежден<?php echo $str18;?> об ответственности по ст. 306 УК РФ, за заведомо ложный донос – будьте готовы подтвердить все ваши свидетельства.

<?php  echo $datenow;?>

 </textarea>
 <p class="vernost">Если всё верно, нажмите кнопку "Отправить на рассмотрение" заявление придёт вам на почту.</p>
 <input type="submit" value="Отправить на рассмотрение" class="btn btn-success button">
 </form> 
 <footer class="container-fluid footer">
 	

 </footer>
</body>
</html>
 
 	

