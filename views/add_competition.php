<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/asset/css/style.css">
    <title>formulaire competition</title>
</head>

<body>
    <form action="traitement/action.php" method="post">
        <div class="div1">
            <div class="div2">
                <div><h1>best movie</h1></div>
                <div>
                    <label for="">film</label><br>
                    <input type="text" name="film">
                    <label for="pet-select">choisir un film:</label>

                    <select name="film" id="film-select">
                        <option value="dog">leon</option>
                        <option value="cat">pretty derby</option>
                        <option value="hamster">batman</option>
                        <option value="parrot">the prestige</option>
                        <option value="spider">futur world</option>
                    </select>
                </div>
                <div>
                    <label for="">release_date</label><br>
                    <input type="date" name="release_date">
                </div>
                <div>
                    <label for="">best_actor</label><br>
                    <input type="text" name="best_actor">

                    <button name="submit">connexion</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>