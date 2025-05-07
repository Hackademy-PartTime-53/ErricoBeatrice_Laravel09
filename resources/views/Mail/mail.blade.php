<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Nuova richiesta di contatto dal blog</h1>
    </div>
    <div>
        <p>Mittente: ..{{ $user_name }}</p>
        <p>Email mittente: ...{{ $user_email }} </p>
        <div>
        <p>Messaggio: ...{{ $user_message }} </p>
        </div>
    </div>
</body>
</html>