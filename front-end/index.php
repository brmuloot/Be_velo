<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/header.css">
    <link rel="stylesheet" href="static/main.css">
    <link rel="stylesheet" href="static/footer.css">
    <title>Be velo</title>
    <!--lien vers la librairie leaflet, important le lien css et le lien js doivent être collés l'un après l'autre-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
</head>
<body>
    <main>
        <header>
            <div id="logo">
                <img src="static/logo_1.PNG" alt="Logo Be velo">
            </div>
            <nav>
                <a href="#">ACCUEIL</a>
                <a href="#section_1">STATIONS</a>
                <a href="#avis">AVIS</a>
                <a href="#contacte">CONTACT</a>
            </nav>
        </header>
        
        <section class="section_1" id="section_1">
            <div class="container">
                <div id="map"></div>

                <div class="status-square">
                    <h1>INFO STATION</h1>
                    <h2>Nom de la station :</h2>
                    <p></p>
                    <h2>État :</h2>
                    <p></p>
                    <h2>Vélos disponibles :</h2>
                    <p></p>
                <h2>Places disponibles :</h2>
                    <p></p>
                </div>
            </div>
        </section>
        <section class="section_2">

            <H1 id="avis">LES AVIS</H1>

            <div class="container_2">
                <form class="formulaire" action="verif.php" method="POST">
                    <label for="pseudo"></label>
                    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                    <label for="msg_avis"></label>
                    <textarea type="msg_avis" id="msg_avis" name="msg_avis" placeholder="Message..." required></textarea>
                    <input type="submit" value="Envoyer">
                </form>
                <?php
                include('recup.php');
                 ?>
                <div id="response-box">
                    <h4>Réponse</h4>
                    <div id="response-pseudo"></div>
                    <div id="response-message"></div>
                </div>
            </div>
        </section>
            
        <section class="section_3">
            <H1 id="contacte">CONTACT</H1>
            <div class="contact">
                <H2>Formulaire de contact</H2>
                <form action="verif_contact.php" method="POST">
                    <div class="form-group" >
                      <label for="name"></label>
                      <input type="text" id="name" name="nom" placeholder="Nom" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="email"></label>
                      <input type="text" id="email" name="mail" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject"></label>
                      <input type="text" id="subject" name="sujet" placeholder="Sujet" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="message"></label>
                      <textarea id="message" name="msg_contact" placeholder="Message..." class="form-control"></textarea>
                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-primary">
                </form>                  
            </div>
        </section>
    </main>


    <footer>
        <div id="logo2">
            <img src="static/logo_2.PNG" alt="Logo Be velo">
        </div>
        <div class="menu_footer">
            <p>© Cosmo crème</p>
            <p>La manufacture des talents</p>
            <p>63000 Clermont-Ferrand</p>
            <p>+33 (0)6 15 15 15 15</p>
            <p>Site fictif dans le cadre d'un projet</p>

        </div>
        <div class="reseau">
            <a href="https://fr-fr.facebook.com/t" target="blank"><img src="static/facebook.png" alt="Facebook logo"></a>
            <a href="https://twitter.com/home?lang=fr" target="blank"><img src="static/twitter.png" alt="Twitter logo"></a>
            <a href="https://www.instagram.com/?hl=fr" target="blank"><img src="static/instagram.png" alt="Instagram logo"></a>
        </div>
        <div class="newsletter">
            <p>Newsletter : </p>
            <input type="submit" value="S'abonner" class="btn btn-primary">
        </div>
    </footer>

<script src="map.js"></script>
</body>
</html>
