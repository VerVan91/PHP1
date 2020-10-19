<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
</head>
<body>
	<h1>Калькулятор</h1>
	<form action='' method='post' class="calculate-form">
		<input type="text" name="number1" placeholder="Первое число">
		<select class="operations" name="operation">
			<option value='+'>+</option>
			<option value='-'>-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="number2" placeholder="Второе число">
		
		<input type="submit" name="submit" value="Получить ответ">
	</form>

    <?php $result = include 'server.php'; ?>
</body>
</html>


