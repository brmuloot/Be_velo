<?php

    if(!empty($_POST['nom']) && !empty($_POST['mail'])){


        require('bdd.php');
        $req = $bdd->prepare('INSERT INTO contact(nom, mail, sujet, msg_contact) VALUES(:nom, :mail, :sujet, :msg_contact)');
        $req->execute([
            'nom'=>$_POST['nom'],
            'mail'=>$_POST['mail'],
            'sujet'=>$_POST['sujet'],
            'msg_contact'=>$_POST['msg_contact']
        ]);
        header('Location: /Be_velo/front-end');
    } 


    else{
        echo 'Veuillez renseigner tous les champs!';
    }
?>