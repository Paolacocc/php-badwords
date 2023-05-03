<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="badwords.php" method="GET">
        <label for="textarea">scrivi qui il tuo testo</label>
        <input type="textarea" id="textarea" name="text" >

        <label for="badword">scrivi qui la parola da censurare</label>
        <input type="text" id="badword" name="censured" >

        <button type="submit">Invia</button>
    </form>
</body>
</html>