<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

</body>
<div class="container">
    <form method="post" action="contact">
        <div>
            <div>
                <label> Imie i Nazwisko </label>
                <input type="text" placeholder="Name" name="name">
            </div>
            <div>
                <label> Email </label>
                <input type="text" placeholder="Email" name="email">
            </div>
            <div>
                <label> Telefon </label>
                <input type="text" placeholder="Phone Number" name="phone_number">
            </div>
            <div>
                <label> Temat </label>
                <input type="text" placeholder="Subject" name="subject">
            </div>
            <div>
                <label> Message </label>
                <textarea placeholder="Message" name="message"></textarea>
            </div>
            @csrf
            <button type="submit">Wyślij</button>

        </div>
</div>

</html>
