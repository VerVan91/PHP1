<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
</head>
<body>
	<h1>Калькулятор</h1>
	<form action='' method='post' class="calculate-form">
		<input type="text" name="number1" placeholder="Первое число">
		<input type="text" name="number2" placeholder="Второе число">
		<input type="submit" name="operation" value="Сложение">
        <input type="submit" name="operation" value="Вычитание">
        <input type="submit" name="operation" value="Умножение">
        <input type="submit" name="operation" value="Деление">
	</form>

    <?php $result = include 'server.php'; ?>

</body>
</html>


