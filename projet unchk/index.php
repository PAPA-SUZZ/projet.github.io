<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSPORT EXPRESS </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Sen</span>Voyage</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#cars">Vehicules</a></li>
            <li><a href="#ARRET">Arret</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <button class="login_btn">  
            <a href="connexion.php">LOGIN</a>
            </button>  

    </header>
    <!-- section Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1>Dem <span>Dikk</span> Voyage</h1>
            <a href="#">Reserver</a>
        </div>
        <div class="right">
            <img src="images/bus 1.png">
        </div>
    </section>




    <!-- section vehicule -->

    <section id="cars">
        <h1 class="section_title">Nos destinations</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                       <img src="images/Screenshot_20221027-172037.png" alt="">
                   </div>
                   <span>Thies</span>
                   <span class="prix">2500F</span>
                   <a href="#">ACHETER UN BILLET</a>
                </li>
                <li class="car">
                    <div>
                        <img src="images/bus 1.png" alt="">
                    </div>
                    <span>Dakar</span>
                    <span class="prix">5000F</span>
                    <a href="#">ACHETER UN BILLET</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/Screenshot_20221027-172321.png" alt="">
                    </div>
                    <span>Tivaoune</span>
                    <span class="prix">1500F</span>
                    <a href="#">ACHETER UN BILLET</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/Screenshot_20221027-172037.png" alt="">
                    </div>
                    <span>Mbour</span>
                    <span class="prix">2000F</span>
                    <a href="#">ACHETER UN BILLET</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/Screenshot_20221027-173223.png" alt="">
                    </div>
                    <span>Kolda</span>
                    <span class="prix">7000F</span>
                    <a href="#">ACHETER UN BILLET</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/Screenshot_20221027-173324.png" alt="">
                    </div>
                    <span>Casamance</span>
                    <span class="prix">10000F</span>
                    <a href="#">ACHETER UN BILLET</a>
                 </li>
            </ul>
        </div>
    </section>

    <!-- section services -->

    <section id="services">
        <h1 class="section_title">Nos Services</h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Pour tout panne de voiture,SEN VOYAGE est prêt à vous offir ces services .</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Voyage</h3>
                <p>SEN VOYAGE assure tout vos voyages partout dans le Sénégal avec des voitures luxueuses et sécurisés.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Nettoyage</h3>
                <p>Pourt tout nettoyage de voiture , moto .. vous pouvez contactez SEN VOYAGE pour assurer la qualité</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
        </div>
    </section>
    
<!-- <section class="contact" id="contact">
	<div class="titre noir">
		<h2 class="titre-text"><span>C</span>ontact</h2>
		<p>Faites vos réservations.</p>

	</div> -->
<!-- 
	<div class="contactform">
		<h3>Envoyer un message</h3>

		<div class="inputboite">
			<input type="text" placeholder="Nom">

		</div>

		<div class="inputboite">
			<input type="text" placeholder="email">

		</div>

		<div class="inputboite">
			<textarea placeholder="message"></textarea>
		
		</div>

		<div class="inputboite">
			<input type="submit" value="envoyer">
		
		</div>
	
	</div>
</section> -->
    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Nos Services</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10499.966567606692!2d2.285747998068967!3d48.85836977022069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1644955637071!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="form_contact">
                <h3>envoyer un message</h3>
                <form action="" method="post">
                 <input type="text" name="text" placeholder="Nom">
                    <input type="email" name="email" placeholder="Adresse Mail">
                    <input type="text" name="objet" placeholder="Objet">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" name="envoyer" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
 

    <footer>
        <p>Groupe3 GT.42 2022 </p>
    </footer>

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
  
</body>
</html>

<?php 

if(isset($_POST['envoyer'])){
    if(!empty($_POST['text']) && !empty($_POST['email']) && !empty($_POST['objet']) && !empty($_POST['message'])){
        $text = htmlspecialchars($_POST['text']);
        $email = htmlspecialchars($_POST['email']);
        $objet = htmlspecialchars($_POST['objet']);
        $message = htmlspecialchars($_POST['message']);

        $insert = "INSERT INTO message (nom, email, objet, message) VALUES (?,?,?,?);";
        $prepare = $bdd->prepare($insert);
        $prepare->execute(array($text, $email, $objet, $message));

        if($insert){
            header('location:index.php');
        }
    }
}


?>