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
                        <label for="name">Imie i Nazwisko</label>
                        <input type="text" name="name" id="name">
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
                        <th>Imie i Nazwisko</th>
                        <th>Przedmiot</th>
                        <th>Telefon</th>
                        <th>Mail</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutors as $tutor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tutor->name }}</td>
                            <td>{{ $tutor->subject }}</td>
                            <td>{{ $tutor->phone }}</td>
                            <td>{{ $tutor->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
