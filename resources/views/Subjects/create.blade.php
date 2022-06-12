<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodaj korepetytora</title>
</head>

<body>
    <div class=container>
        <h1>Dodaj korepetytora</h1>
        <div class="nav">
            <div><a href="/">Strona główna</a></div>
            <br>
            <div><a href="{{ route('subjects.list') }}">Przedmioty</a></div>
            <br>
        </div>

        <form action="{{ route('subjects.create') }}" method="post">
            <div>
                <label for="name">Przedmiot</label>
                <input type="text" name="name" id="name">
            </div>
            @csrf
            <button type="submit">Dodaj</button>
        </form>
    </div>
</body>

</html>
