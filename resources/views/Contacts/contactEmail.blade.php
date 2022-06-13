<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Dzień dobry,</h2>
    Dostałeś wiadomność od : {{ $name }}
    Szczegóły
    <b>Imie i Nazwisko:</b> {{ $name }}
    <b>Email:</b> {{ $email }}
    <b>Telefon:</b> {{ $phone }}
    <b>Temat:</b> {{ $subject }}
    <b>Wiadomość:</b> {{ $message }}
    Dziękuję
</body>

</html>
