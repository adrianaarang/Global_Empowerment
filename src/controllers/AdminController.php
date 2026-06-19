<?php
require_once __DIR__ . '/../config/database.php';

class AdminController {
    private PDO $db;
    public function __construct() { $this->db = conectarDB(); }
}
