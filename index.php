<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()


http://php.net/manual/fr/function.mt-rand.php
*/


    if (isset($_GET['error']) && $_GET['error'] === '1') {
        echo "Il y a une erreur!";
    }

?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaires nombres aléatoires</title>
</head>
<body>

    <h1>But : Donner un chiffre alétoire.</h1>
    <form method="post" action="script.php">
        <div>
            <label for="minimum">Chiffre minimum : </label>
            <input id="minimum" name="minimum" required>
        </div>
        <div>
            <label for="maximum">Chiffre maximum: </label>
            <input id="maximum" name="maximum" required>
        </div>
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>