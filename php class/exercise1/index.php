<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Churrasco</title>
    <script type="text/javascript" src="script/main.js"></script>
</head>
<body>
    <form name="pessoa">
        <input type="text" name="nome" placeholder="insira o nome" />
        <input type="number" name="idade" placeholder="insira a idade" />
        <input type="radio" name="sexo" value="homem" checked> Masculino<br>
        <input type="radio" name="sexo" value="mulher"> Feminino<br>
        <select name="vegetariana">
            <option value="false">Não vegetariano</option>
            <option value="true">Vegetariano</option>
        </select>
    </form>
    <button id="enviar">Enviar</button>
    <div id="resp"></div>
</body>
</html>