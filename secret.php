<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Codes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php

// Faire une condition qui dit que : 

// Si le mot de passe récupéré est saisi et qu'il est différent de kangourou, 
// refuser l'acces
// si le mot de passe n'est pas saisi,
// message d'erreur l'invitant a ressaisir le mdp
// si le mot de passe est le bon,
// autorisé l'acces afficher les codes.

if (isset($_POST['mdp']) AND $_POST['mdp'] !== "kangourou"){
    echo "Mauvais mot de passe, l'accès vous est refusé.";
}

else if (empty($_POST['mdp'])) {
    echo "Vous devez saisir un mot de passe";
}

else {
    echo "L'accès vous est autorisé. <br>
    <h1>Voici les codes d'accès :</h1>
<p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p> ";
}

?>

</body>
</html>