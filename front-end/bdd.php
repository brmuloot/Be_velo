<?php
try {
    $bdd = new PDO("mysql:host=localhost:8889;dbname=be_velo","root","root");
} catch (\Exception $e) {
    die("Erreur:" . $e->getMessage());
}

?>