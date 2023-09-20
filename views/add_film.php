<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/asset/css/style.css">
    <title>formulaire film</title>
</head>

<body>
    <form action="traitement/action.php" method="post">
        <div>
            <label for="">title</label><br>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">number_main_actor</label><br>
            <input type="number" name="number_main_actor">
        </div>
        <div>
            <label for="">number_total_actor</label><br>
            <input type="number" name="number_total_actor">

            <button name="submit">connexion</button>
        </div>
    </form>
</body>

</html>