@include('restaurant')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h4{
            color: #ffffff;
            font-size: 70px;
            font-family: fangsong;
            margin-top: 250px;
        }
    </style>
</head>
<body>
    <h4 align="center">Hello {{Auth::user()->name}}</h4>
    <br>
</body>
</html>
@include('restrofooter')