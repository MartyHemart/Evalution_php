<?php
    $id= $_POST["id"];
    $name= $_POST["name"];
    $price= $_POST["price"] ;
    $s_file = 'article.json';

    try {
        // On essayes de récupérer le contenu existant
        $s_fileData = file_get_contents($s_file);

        if( !$s_fileData || strlen($s_fileData) == 0 ) {
            // On crée le tableau JSON
            $tableau_pour_json = array();
        } else {
            // On récupère le JSON dans un tableau PHP
            $tableau_pour_json = json_decode($s_fileData, true);
        }

        // On ajoute le nouvel élement
        array_push( $tableau_pour_json, array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
        ));
        // On réencode en JSON
        $contenu_json = json_encode($tableau_pour_json);

        // On stocke tout le JSON
        file_put_contents($s_file, $contenu_json);

        echo "Vos informations ont été enregistrées";
    }
    catch( Exception $e ) {
        echo "Erreur : ".$e->getMessage();
    }
