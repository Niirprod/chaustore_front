<?php
require_once('user_creation.php');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Cahustore - Formulaire d'inscription</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>

    <?php
    if(!empty($msg)){
    ?>
        <p><?php echo $msg; ?></p>
    <?php
    }

    
    if(empty($error) && !empty($msg)){
    ?>
        <a href="créer_un_compte.php" title="Retour à la page d'accueil">Retour à la page d'accueil</a>
    <?php
    }
    else{ 
    ?>
    <form method="post" action="créer_un_compte.php">
        <p>
            <label for="lastname">Votre nom*</label>
            <input type="text" id="lastname" name="lastname" value="<?php if(!empty($_POST['lastname'])) echo $_POST['lastname'];?>"/>
        </p>
        <p>
            <label for="firstname">Votre prénom*</label>
            <input type="text" id="firstname" name="firstname" value="<?php if(!empty($_POST['firstname'])) echo $_POST['firstname'];?>"/>
        </p>
        <p>
            <label for="email">Votre email*</label>
            <input type="text" id="email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>"/>
        </p>
        <!-- <p>
            <label for="mdp">Vuillez chosir un mode passe*</label>
            <input type="text" id="mdp" name="mdp" value="<?php //if(!empty($_POST['mdp'])) echo $_POST['mdp'];?>"/>
        </p>
        <p>
            <label for="mdp_conf">Vuillez confirmer votre mode passe*</label>
            <input type="text" id="mdp_conf" name="mdp_conf" value="<?php //if(!empty($_POST['mdp_conf'])) echo $_POST['mdp_conf'];?>"/>
        </p> -->

        <input type="submit" value="créer mon compte"/>
    </form>
    <?php
    }
    ?>
</body>
</html>


