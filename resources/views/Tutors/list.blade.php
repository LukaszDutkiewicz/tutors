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
        <div class="logo">

        </div>
        <div class="nav">
            <div style="display:inline-block; margin:3px;">
                <a href="/">Strona główna</a>
            </div>
            <div style="display:inline-block; margin:3px;">
                <a href="{{ route('tutors.create') }}">Dodaj korepetytora</a>
            </div>
        </div>
        <div class="tutors">
            <div class="filters">
                <form action="{{ route('tutors.list') }}" method="get">
                    <div style="display:inline-block;margin:3px;">
                        <label for="fisrt_name">Imie</label>
                        <input type="text" name="first_name" id="first_name"
                            value="{{ isset($_GET['first_name']) ? $_GET['first_name'] : '' }}">
                    </div>
                    <div style="display:inline-block;margin:3px;">
                        <label for="last_name">Nazwisko</label>
                        <input type="text" name="last_name" id="last_name"
                            value="{{ isset($_GET['last_name']) ? $_GET['last_name'] : '' }}">
                    </div>
                    <div style="display:inline-block;margin:3px;">
                        <label for="subject_id">Przedmiot</label>
                        <select name="subject_id" id="subject_id">
                            <option value="">wszystkie</option>
                            @foreach ($subjects as $subject)
                                @if (isset($_GET['subject_id']) && $subject->id == $_GET['subject_id'])
                                    {
                                    <option value="{{ $_GET['subject_id'] }}" selected="selected">
                                        {{ $subject->name }}
                                    </option>
                                    }
                                @else
                                    {
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    }
                                @endif
                            @endforeach
                        </select>
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
                            <td>{{ $tutor->subject->name }}</td>
                            <td>{{ $tutor->rate }}</td>
                            <td><a href="{{ route('tutors.show', ['id' => $tutor->id]) }}">Zobacz</a>
                            </td>
                            <td>
                                <form action="{{ route('tutors.destroy', ['id' => $tutor->id]) }}" method="post">
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
