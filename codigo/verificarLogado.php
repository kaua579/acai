<?php
// NÃO deixar espaço antes desta tag
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['logado']) or $_SESSION['logado'] !== 'sim') {
    header("Location: index.php");
    exit;
}
?>
