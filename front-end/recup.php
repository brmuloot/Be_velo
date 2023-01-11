<?php
require('bdd.php');
$req = $bdd->prepare('SELECT * from avis');
$req->execute();
$datas= $req->fetchAll();

foreach($datas as $data){
    echo '<div>';
    echo '<p>Pseudo: '.$data['pseudo'].'</p>';
    echo '<p>Message: '.$data['msg_avis'].'</p>';
    echo '<p>Heure: '.$data['date_avis'].'</p><br>';
    echo '</div>';
}