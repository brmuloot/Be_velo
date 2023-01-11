<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=be_velo","root","");
} catch (\Exception $e) {
    die("Erreur:" . $e->getMessage());
}

?>