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

        <form action="{{ route('tutors.create') }}" method="post">
            <div>
                <label for="first_name">Imię</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div>
                <label for="last_name">Nazwisko</label>
                <input type="text" name="last_name" id="last_name">
            </div>
            <div>
                <label for="subject">Przedmiot</label>
                <select name="subject" id="subject">
                    <option value="j.polski">j.polski</option>
                    <option value="j.angielski">j.angielski</option>
                    <option value="j.niemiecki">j.niemiecki</option>
                    <option value="matematyka">matematyka</option>
                    <option value="fizyka">fizyka</option>
                    <option value="informatyka">informatyka</option>
                    <option value="chemia">chemia</option>
                    <option value="biologia">biologia</option>
                    <option value="geografia">geografia</option>
                    <option value="historia">historia</option>
                </select>
            </div>
            <div>
                <label for="rate">Ocena</label>
                <input type="number" name="rate" id="rate">
            </div>
            <div>
                <label for="phone">Telefon</label>
                <input type="text" name="phone" id="phone">
            </div>
            <div>
                <label for="email">Mail</label>
                <input type="text" name="email" id="email">
            </div>
            <button type="submit">Dodaj</button>
        </form>
    </div>
</body>

</html>
