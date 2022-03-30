<?php
require_once("config.php");
    // Sessões

    // session_start(); // Inicia a sessão

    $_SESSION["nome"] = "php7";

    echo session_save_path();