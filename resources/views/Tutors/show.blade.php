<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szczegóły</title>
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('tutors.list') }}">Powrót</a>
        </div>
        <div class="tutor">
            <h1>Korepetytor</h1>
            <h2>{{ $tutor->first_name }} {{ $tutor->last_name }}</h2>
            <br>
            <strong>Przedmiot: </strong>{{ $tutor->subject->name }}
            <h3>Szczegóły</h3>
            <ul>
                <li><strong>Telefon: </strong>{{ $tutor->phone }}</li>
                <li><strong>Mail: </strong>{{ $tutor->email }}</li>
            </ul>
            <strong>Opinie: </strong>
            <br>
            <a href="">Kontakt</a>
        </div>
        <a href="{{ route('tutors.update', ['id' => $tutor->id]) }}">Edytuj</a>
    </div>

</body>

</html>
