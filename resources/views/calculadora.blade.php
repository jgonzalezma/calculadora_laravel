<html>
<head>
	<title>CALCULADORA LARAVEL</title>
</head>
<body>
<center>
	<h1>CALCULADORA de {{$nombre}}</h1>
<form action="calcular" method="post">
@csrf
Numero 1: <input type="text" name="num1"><br>
Numero 2: <input type="text" name="num2"><br>
<button type="submit" name="operacion" value="sumar">+</button>
<button type="submit" name="operacion" value="restar">-</button>
<button type="submit" name="operacion" value="multiplicar">*</button>
<button type="submit" name="operacion" value="dividir">/</button><br>
@if(isset($resultado))
<h4>Resultado: {{$resultado}}</h4>
@endif
</form>
<br>
</center>
</body>
</html>