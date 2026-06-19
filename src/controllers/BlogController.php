<?php
require_once __DIR__ . '/../config/database.php';

class BlogController {
    private PDO $db;
    public function __construct() { $this->db = conectarDB(); }
}
