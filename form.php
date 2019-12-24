<!--<!DOCTYPE HTML>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>Тег FORM, атрибут method</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="handler.php" method="post">-->
<!--    <p><input type="text" name="str"></p>-->
<!--    <p><input type="submit" value="Отправить"></p>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
<?php
$url = "https://beybegi.ru/curl/handler.php";

$post_data = array (
"str" => "123",
"query" => "Nettuts",
"action" => "Submit"
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// указываем, что у нас POST запрос
curl_setopt($ch, CURLOPT_POST, 1);
// добавляем переменные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

$output = curl_exec($ch);

curl_close($ch);