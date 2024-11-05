<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        h1{
            text-align: center;

        }
    </style>
    <h1>{{ $documents->titre}}</h1>
    <p>{{ $documents->contenu }}</p>
</body>
</html>
