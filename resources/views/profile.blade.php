<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Profile Page
    @foreach ($datas as $data)
        <h1>Name: {{ $data['name'] }}</h1>
        <h1>Age: {{ $data['age'] }}</h1>
        <br>
    @endforeach
</body>

</html>
