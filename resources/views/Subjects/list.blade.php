<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przedmioty</title>
</head>

<body>
    <div class="container">
        <div class="logo">

        </div>
        <div class="nav">
            <div style="display:inline-block; margin:3px;">
                <a href="/">Strona główna</a>
            </div>
            <div style="display:inline-block; margin:3px;">
                <a href="{{ route('subjects.create') }}">Dodaj przedmiot</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Lp</th>
                    <th>Przedmiot</th>
                    <th>Usuń</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>
                            <form action="{{ route('subjects.destroy', ['id' => $subject->id]) }}" method="post">
                                @csrf
                                <button type="submit">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

</body>

</html>
