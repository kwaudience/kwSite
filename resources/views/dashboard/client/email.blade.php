<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Message de contact</h2>

<p><strong>Nom :</strong> {{ $data['nom'] }}</p>
<p><strong>Email :</strong> {{ $data['email'] }}</p>
<p><strong>Objet :</strong> {{ $data['objet'] }}</p>
<p><strong>Message :</strong><br>{{ $data['message'] }}</p>

</body>
</html>
