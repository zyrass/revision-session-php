<?php
    session_start();

    session_unset(); // session_unset() est une fonction native de PHP, elle correspond exactement à :
    // $_SESSION = array(); --> On vide notre tableau $_SESSION
    // OU
    // $_SESSION = []; --> On vide également notre tableau $_SESSION avec l'autre syntaxe.

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();

    header("Location: index.php");