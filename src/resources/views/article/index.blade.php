<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    index.blade.php
    <x-message message="属性を利用して値を渡しています"></x-message>
    <x-message :message=$message></x-message>
</body>

</html>
