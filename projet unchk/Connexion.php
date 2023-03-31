<?php  require_once 'config.php';  ?>
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
        <div>
            <form action="config.php" method="POST">
                <label for="">Email</label>
                <input type="email" name="email">
                <label for="">Mot de Passe</label>
                <input type="password" name="password">
                <input type="submit" name="connect">
            </form>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['connect'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $select = "SELECT email, password FROM users WHERE email = ?";
        $prepare = $bdd->prepare($select);
        $prepare->execute(array($email));
        $data = $prepare->fetch();
        $row = $prepare->rowCount();

        if($row=1){
            if($data['password']===$password){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location:pageadmin.php');
            }else header('location:connexion.php');
        }else header('location:connexion.php');
        }else header('location:connexion.php');
}else header('location:connexion.php');

?>