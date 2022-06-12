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
            <div><a href="{{ route('tutors.list') }}">Korepetytorzy</a></div>
            <br>
        </div>

        <form action="{{ route('tutors.update', ['id' => $tutor->id]) }}" method="post">
            <div>
                <label for="first_name">Imię</label>
                <input type="text" name="first_name" id="first_name" value="{{ $tutor->first_name }}">
            </div>
            <div>
                <label for="last_name">Nazwisko</label>
                <input type="text" name="last_name" id="last_name" value="{{ $tutor->last_name }}">
            </div>
            <div>
                <label for="subject_id">Przedmiot</label>
                <select name="subject_id" id="subject_id">
                    @foreach ($subjects as $subject)
                        {
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        }
                    @endforeach

                </select>
            </div>
            <div>
                <label for="rate">Ocena</label>
                <input type="number" name="rate" id="rate" value="{{ $tutor->rate }}">
            </div>
            <div>
                <label for="phone">Telefon</label>
                <input type="text" name="phone" id="phone" value="{{ $tutor->phone }}">
            </div>
            <div>
                <label for="email">Mail</label>
                <input type="text" name="email" id="email" value="{{ $tutor->email }}">
            </div>
            @csrf
            <button type="submit">Zaktualizuj</button>
        </form>
    </div>
</body>

</html>
