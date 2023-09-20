<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/asset/css/style1.css">
    <title>formulaire actor</title>
</head>

<body>
    <form action="traitement/action.php" method="post">
        <div class="div1">
            <div class="div2">
                <label for="">name</label><br>
                <input type="text" name="name">
                <label for="pet-select">choisir un acteur</label>

                <select name="film" id="film-select">
                    <option value="Christian Bale">Christian Bale</option>
                    <option value="Christian Bale">Christian Bale</option>
                    <option value="Natalie Portman">Natalie Portman</option>
                    <option value="Tokai Teio">Tokai Teio</option>
                    <option value="Hugh Jackman">Hugh Jackman</option>
                    <option value="John Doe">John Doe </option>
                </select>
            </div>
            <div>
                <label for="">email</label><br>
                <input type="text" name="email">
                <label for="pet-select">choisir un email</label>

                <select name="film" id="film-select">
                    <option value="christian.bale@exemple1.com">christian.bale@exemple1.com</option>
                    <option value="jean.reno@exemple2.com">jean.reno@exemple2.com</option>
                    <option value="natalie.portman@exemple3.com">natalie.portman@exemple3.com</option>
                    <option value="tokai.teio@exemple4.com">tokai.teio@exemple4.com</option>
                    <option value="hugh.jackman@exemple5.com ">hugh.jackman@exemple5.com </option>
                    <option value="john.doe@exemple6.com">john.doe@exemple6.com </option>
                </select>

                <button name="actor_submit">connexion</button>
            </div>
        </div>
    </form>
</body>

</html>