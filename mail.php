
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Meridian</title>
	<style>
   .fig {
    text-align: center; /* Выравнивание по центру */ 
   }
  </style>
	
	<link rel="stylesheet" type="text/css" href="styleMail.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet"> -->
</head>

<body>
	
<!--********************блок header начало*******************************-->
	<!--<div class="backgroundd">-->


<div class="backgroundd">
<main>

	<div class="main__welcome">
			<h1>Форма обратной связи заполнена</h1>
			<h2> <span class="babyshop">Меридиан</span></h2>
			<p>Производство и реализация шпонированных плит</p>
		</div>

<div class="php_cod">
<?php
$to = "meridian.shpon@gmail.com"; // емайл получателя данных из формы
$tema = "Форма обратной связи c cайта MERIDIAN"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'From: Your name <dmitriy.glushko@shponmeridian.ml>' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента 
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
$name_dashboard = $_POST['name'];
  //$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
//echo $_POST['name'].', <div class = b> Ваше сообщение отправлено, спасибо!</div>';
//echo $_POST['name']."<p align='center'> <font color=blue  size='6pt'>+$'name'+Ваше письмо отправлено</font> </p>";
echo "<p align='center'> <font color=#6c6c6c  size='5pt'>$name_dashboard, Ваше письмо отправлено</font> </p>";
echo "<p align='center'> <font color=#6c6c6c  size='5pt'> Наш менеджер свяжется с Вами в ближайшее время</font> </p>";
?>
</div>
	<div class="ide">
<a href="index.html">На главную страницу</a>
</div>

<p class="fig"><img src="img/fb2.png" 
   width="30%"  alt="Фотография"></p>
</div>


</main>
</div>