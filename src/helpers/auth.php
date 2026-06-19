<?php
function verificarAdmin(): void {
    if (empty($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
        header('Location: /admin/index.php');
        exit;
    }
}
