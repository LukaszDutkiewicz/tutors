<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mail</title>
</head>

<body>
    <h1>Wyślij wiadomość do {{ $tutorName }}</h1>
    <form action="{{ route('email.send') }}">
        <input type="text" name="emailAdress" id="emailAdress" value="{{ $emailAdress }}" hidden>
        <div>
            <label for="username">Nazwa użytkownika</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="title">Tytuł</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="message">Treść</label>
            <textarea name="message" id="message"></textarea>
        </div>
        @csrf
        <button type="submit">Wyślij</button>
    </form>
</body>

</html>
