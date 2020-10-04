<?php 
include "database.php";

$result = mysqli_query($link, "SELECT * FROM `oblasti`"); 

$oblasti = mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Сервис для подачи заявлений</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-3 logo_block">
					<img src="img/logo.png" class="logo"> 
				</div>
				<div class="zagolovok col-9">
					<p>Подача заявления по жестокому обращению с животными</p>
				</div>
			</div>
		</div>
	</header>

	<main>
		<div class="container container-fluid main">
			<div class="row">
				<form  id="submit_form" method="POST" action="prosmotr.php">
					<h2 class="h2">Уважаемый пользователь, введите свои данные:</h2>
			            <label class="label">Имя:</label>
			            	<input  name="name" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Фамилия:</label>
			        		<input  name="lastname" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Отчество:</label>
			            	<input  name="otchestvo" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Год рождения:</label>
			           		<input  name="year" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Адрес прописки:</label>
			           		 <input  name="adres" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6 " > 
			            <label class="label">Адрес фактического проживания:</label>
			           		<input  name="fact_adres" type="text" class="form-control select col-xs-12 col-sm-12 col-md-6 col-lg-6" >
			            <label class="label">Ваш номер телефон:</label>
			           	 	<input  name="tel" type="tel" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Ваш email:</label>
			           		<input  name="email" type="email" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Ваше место работы:</label>
			            	<input  name="work" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <label class="label">Ваша должность:</label>
			            	<input  name="doljnost" type="text" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" >
			            <p>Укажите пол:</p>
			            <p><label class="label">М<input type="radio" name="pol" value="m" ></label><label>Ж<input type="radio" name="pol" value="zh"></label></label></p>


					<label class="label">1. Укажите, что случилось.</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="wgo" name="wgo" >
						<option></option>
						<option value="1">Животное пострадало, но осталось в живых</option>
						<option value="2">У меня украли питомца</option>
						<option value="3">Из-за некачественных услуг ветклиники у меня пострадало животное</option>
						<option value="4">Я хочу включить своего питомца в завещание, но не знаю как</option>
						<option value="5">У нас в городе появился контактный зоопарк (цирк, дельфинарий и т.п.), в котором животных содержат в ужасных условиях</option>
						<option value="6">Служба отлова работает с нарушениями</option>
					</select>
					<label class="label">2. Как пострадало животное?</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="how" name="how">
						<option></option>
					    <option value="7">Ранили из огнестрельного оружия</option>
					    <option value="8">Ранили другими видами оружия</option>
					    <option value="9">Ранили ножом</option>
					    <option value="10">Отравили(яд разбрасывали с приманкой по двору</option>
					</select>

					<label class="label">3. Произошло ли это в черте города?</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="city" name="city">
						<option></option>
					    <option value="11" id="city">Да</option>
					    <option value="12" id="city">Нет</option>
					</select>

					<label class="label">4. Свидетелем этой ситуации были дети?</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="child" name="child">
						<option></option>
					    <option value="13">Да</option>
					    <option value="14">Нет</option>
					</select>

					<label class="label">5. Была ли это домашняя собака?</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="hd" name="hd">
						<option></option>
					    <option value="15">Да</option>
					    <option value="16">Нет</option>
					</select>

					<label class="label">6. Была ли это породистая собака с документами?</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="pd" name="pd">
						<option></option>
					    <option value="17">Да</option>
					    <option value="18">Нет</option>
					</select>
					<label class="label">7. Выберите свой регион.</label>
					<select class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6" id="region" name="region">
						<?php 
						while ($oblasti = mysqli_fetch_assoc($result)) {
							
							?>
							<option><?php echo $oblasti['name']; ?></option>
							<?php } ?>
						
				</select>
				<label class="label">8. Укажите дату и приблизительное время проишествия.</label>
					<input type="date" name="date" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<input type="time" name="time" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<label class="label">9. Укажите сегодняшнюю дату.</label>
					<input type="date" name="datenow" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6">
				<label class="label">10. Укажите адрес проишествия</label>
						<input type="text" name="place" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<label class="label">11. Укажите ФИО преступника</label>
						<input type="text" name="prestupnik" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<label class="label">12. Укажите адрес преступника</label>
						<input type="text" name="prestupnikadres" class="form-control select col-xs-12 col-sm-12 col-md-12 col-lg-6">

				<label class="label">13. Расскажите,что случилось. Излагайте мысли чётко и убедительно, избегая фраз «мне кажется», «возможно» и т.д. Заявление не должно быть длинным – две страницы и не более.</label>
					<textarea name="message" placeholder="Опишите ситуацию..." class="form-control" rows="6"></textarea>
					<p class="label">14. Нажмите на кнопку на "Предварительный просмотр"</p>
					<input type="submit"  id="submit" name="prosmotr"  class="btn btn-success button col-xs-6 col-sm-6 col-md-4 col-lg-3" value="Предварительный просмотр">
				</form>
			</div>
		</div>
	</main>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 footer_block">
					<p class="p_footer">Мы в соц. сетях:</p>	
					<a href="https://vk.com" target="_blank"><img src="img/vk.png" class="img_footer"></a>
					<a href="https://www.instagram.com" target="_blank"><img src="img/inst.png" class="img_footer"></a>
					<a href="https://twitter.com" target="_blank"><img src="img/twit.png" class="img_footer"></a>
					<a href="https://www.facebook.com" target="_blank"><img src="img/face.png" class="img_footer"></a>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</body>
</html>

<script>
$(function() {
  $('#orderCallBack input[type="submit"]').click(function(e) {
    e.preventDefault();
    var $data;
    if ($(this).attr('data-method') == 'serialize') {
      $data = $(this).parent('form').serialize();
    } else {
      $data = $(this).parent('form').serializeArray();
    }
    $.ajax({
      url: $(this).parent('form').attr('action'),
      type: 'POST',
      data: $data,
      success: function(result) {
        $('#form_result').html(result);
      }
    })
  });
});
</script>

