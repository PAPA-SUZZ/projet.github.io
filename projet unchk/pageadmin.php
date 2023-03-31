<?php 

session_start();
if(!$_SESSION['passwor']){
    header('location:connexion.php');
}

require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <button><a href="deconnexion.php">Deconnexion</a></button>
    </div>
    <div>
        <div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Objet</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <?php
                    
                    $select = "SELECT * FROM message";
                    $prepare = $bdd->query($select);
                    while($aff = $prepare->fetch()){ 
                        ?>

                        <tbody>
                            <tr>
                                <td><?php echo $aff['id'];?></td>
                                <td><?php echo $aff['nom'];?></td>
                                <td><?php echo $aff['email'];?></td>
                                <td><?php echo $aff['objet'];?></td>
                                <td><?php echo $aff['message'];?></td>
                                <td><a href="supprimer.php?id=<?php echo $aff['id']?>">Supprimer</a></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                    
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>