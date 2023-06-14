<?php
if (!isset($_SESSION)) {
    session_start();
}
session_unset();
session_destroy();

header("Location: telaLoginCadastro.php");
?>