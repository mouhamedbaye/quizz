<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['views'])){
        if($_GET['views']=='connexion'){
            require_once (ROUTE_DIR. 'views/security/connexion.html.php');

        }elseif ($_GET['views']=='inscription'){
            require_once (ROUTE_DIR. 'views/security/inscription.html.php');
        
        }else {
            require_once (ROUTE_DIR. 'views/security/connexion.html.php');
        }
    }
}elseif($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['action'])){
        if($_POST['action']=='connexion'){
            connexion($_POST['login'],$_POST['password']);
        }elseif ($_POST['action']== 'inscription') {
            //inscription ;
        }
}
}

    function connexion(string $login, string $password):void{
        $arrayError=[];
        validation_login($login, 'login', $arrayError);
        validation_password($password, 'password', $arrayError);
        if(form_valid($arrayError)){
            //appel  du model
            $user = find_login_password($login, $password);
            if (count($user)==0){
                $arrayError['erreurConnexion'] = "login ou password incorrecte";
                $_SESSION['arrayError'] = $arrayError;
                header('location:'.WEB_ROUTE. '?controlleurs=security&views=connexion');
        }else {
            if($user['role'] == 'ROLE_ADMIN'){
                header('location:'.WEB_ROUTE. '?controlleurs=admin&views=liste.question');
            }elseif($user['role'] == 'ROLE_JOUEUR'){
                header('location:'.WEB_ROUTE. '?controlleurs=joueur&views=joueur');
            }
        }

    }else {
        $_SESSION['arrayError'] = $arrayError;
                header('location:'.WEB_ROUTE. '?controlleurs=security&views=connexion');
    }
}
function Deconnexion():void{
    
}
?>