<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/main.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="script/main.js"></script>
</head>
<body>
    <div id="form">
        I have now <input type="number" name="current" id="current" placeholder="eg: 1000" />
        I earn weekly <input type="number" name="income" id="income" placeholder="eg: 500" />
        My weekly expenses are <input type="number" name="expense" id="expense" placeholder="eg: 200" />
        I want to know how much I'll have in <input type="number" name="weeks" id="weeks" placeholder="eg: 8" /> weeks
        <br>
        <button id="submit">Submit</button>
    </div>
    
    <div id="result"></div>
</body>
</html>