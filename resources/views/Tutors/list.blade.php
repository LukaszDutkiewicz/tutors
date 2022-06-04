<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>korepetytorzy</title>
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="/">Strona główna</a>
        </div>
        <div class="tutors">
            <div class="filters">
                <form action="{{ route('tutors.list') }}" method="get">
                    <div style="display:inline-block;margin:3px;">
                        <label for="fisrt_name">Imie</label>
                        <input type="text" name="first_name" id="first_name">
                    </div>
                    <div style="display:inline-block;margin:3px;">
                        <label for="last_name">Nazwisko</label>
                        <input type="text" name="last_name" id="last_name">
                    </div>
                    <div style="display:inline-block;margin:3px;">
                        <label for="subject">Przedmiot</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div style="display: inline-block; margin: 3px;">
                        <button type="submit">Filtruj</button>
                    </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Imie</th>
                        <th>Nazwisko</th>
                        <th>Przedmiot</th>
                        <th>Ocena</th>
                        <th>Szczegóły</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutors as $tutor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tutor->first_name }}</td>
                            <td>{{ $tutor->last_name }}</td>
                            <td>{{ $tutor->subject }}</td>
                            <td>{{ $tutor->rate }}</td>
                            <td><a href="{{ route('tutors.show', ['id' => $tutor->id]) }}">Zobacz</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
