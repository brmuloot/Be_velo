<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/header.css">
    <link rel="stylesheet" href="static/main.css">
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
                <a href="#">STATIONS</a>
                <a href="#">AVIS</a>
                <a href="#">CONTACT</a>
            </nav>
        </header>
        
        <section class="section_1">
            <div class="container">
                <div id="map"></div>

                <div class="status-square">
                    <h1>INFO STATION</h1>
                    <h2>Nom de la station :</h2>
                    <p>Nom de la station</p>
                    <h2>État :</h2>
                    <p>Actif</p>
                    <h2>Vélos disponibles :</h2>
                    <p>5</p>
                <h2>Places disponibles :</h2>
                    <p>2</p>
                </div>
            </div>
        </section>
        <section class="section_2">

            <H1>LES AVIS</H1>

            <div class="container_2">
                <form class="formulaire">
                    <label for="pseudo"></label>
                    <input type="text" id="pseudo" for="pseudo" placeholder="Pseudo" required>
                    <label for="message"></label>
                    <textarea type="message" id="message" for="message" placeholder="Message..." required></textarea>
                    <input type="submit" value="Envoyer" onclick="submitForm()">
                </form>
                <div id="response-box">
                    <h4>Réponse</h4>
                    <div id="response-pseudo"></div>
                    <div id="response-message"></div>
                </div>
            </div>
        </section>
            
        <section class="section_3">
            <H1>CONTACT</H1>
            <div class="contact">
                <H2>Formulaire de contact</H2>
                <form>
                    <div class="form-group">
                      <label for="name"></label>
                      <input type="text" id="name" name="name" placeholder="Nom" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="email"></label>
                      <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject"></label>
                      <input type="text" id="subject" name="subject" placeholder="Sujet" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="message"></label>
                      <textarea id="message" name="message" placeholder="Message..." class="form-control"></textarea>
                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-primary">
                </form>                  
            </div>
        </section>
    </main>


    <footer>

    </footer>
<script src="map.js"></script>
</body>
</html>
