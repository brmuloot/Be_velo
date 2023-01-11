<?php
    if(!empty($_POST['pseudo']) && !empty($_POST['msg_avis'])){
try {

        require('bdd.php');
        $req = $bdd->prepare('INSERT INTO avis(pseudo, msg_avis, date_avis) VALUES(:pseudo, :msg_avis, :date_avis)');
        $req->execute([
            'pseudo'=>$_POST['pseudo'],
            'msg_avis'=>$_POST['msg_avis'],
            'date_avis'=>date('y/m/d H:i:s')
        ]);
        header('Location: /Be_velo/front-end');
    } catch (Exception $e) {
        die("Erreur:" . $e->getMessage());

    }
    }else{
        echo 'Veuillez renseigner tous les champs!';
    }
?>