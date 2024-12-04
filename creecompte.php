<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/creecompte.css">
    <title>Document</title>
</head>

<body style="background-image:url('image/background/bg_2.jpg'); background-size:cover;">
    <div class="container" style="width:50%;">
        <form class="signup-form" method="POST" action="creecompte2.php">
        <h1>Créer Un Compte</h1>
        <div>
            <input type="text" placeholder="Nom" required name="nom" autocomplete="off">
        </div>
        <div>
            <input type="text" placeholder="Prénom" required name="prenom" autocomplete="off">
        </div>
        <div>
            <input type="email" placeholder="Email" required name="email" autocomplete="off">
        </div>
        <div>
            <input type="password" placeholder="Mot de passe" required name="mdp" autocomplete="off">
        </div>
        <div>
            <input type="submit" value="Créer">
        </div>
    </div>
	    </form>
    </body>

</html>