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
    <form name="budget">
        Weekly Income: <input type="number" name="income" id="income" placeholder="Weekly income" />
        Weekly expense: <input type="number" name="expense" id="expense" placeholder="Weekly expense" />
        Amount of Weeks: <input type="number" name="weeks" id="weeks" placeholder="Amount of weeks" />
    </form>
    <button id="submit">Submit</button>
    
    <div id="result"></div>
</body>
</html>