<?php

// fonction de validation
function est_vide(string $valeur): bool {
    return empty($valeur);
}

function est_entier($valeur): bool {
   // $entier = (int) $valeur;
    return is_numeric($valeur);
}

function est_superieur(int $valeur): bool {
    return $valeur > VAL;
}


function verif_taille(string $valeur):bool{
    return strlen($valeur)<=25;
}
function est_mail($valeur):bool{
    if(filter_var($valeur, FILTER_VALIDATE_EMAIL)){
        return true;
    }else {
        return false;
    }
}
function validation_password($valeur, string $key,array &$arrayError,int $min=6,int $max=10){
    if(est_vide($valeur)){
        $arrayError[$key] = "le password est obligateur";
    }elseif(strlen($valeur)<$min || strlen($valeur)>$max){
        $arrayError[$key] = "le password doit etre entre $min et $max";
    }
}
function validation_login($valeur, string $key,array &$arrayError){
    if(est_vide($valeur)){
        $arrayError[$key] = "le login est obligateur";
        }elseif (!est_mail($valeur)){
        $arrayError[$key] ="le login doit etre un mail";
        }
    }
    function form_valid($arrayError): bool {
        if (count($arrayError) == 0);{
            return true;
        }
        return false;
    }
?>