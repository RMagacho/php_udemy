<?php
require_once("config.php");
print_r($_SESSION['nome']);

session_unset();   // limpa variável de sessões
session_destroy(); // variável deixa de existir