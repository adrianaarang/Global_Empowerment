CREATE DATABASE IF NOT EXISTS global_empowerment CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE global_empowerment;

CREATE TABLE entradas_blog (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  slug VARCHAR(255) UNIQUE NOT NULL,
  contenido TEXT NOT NULL,
  imagen VARCHAR(255),
  publicado_en DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  descripcion TEXT,
  precio DECIMAL(10,2) NOT NULL,
  imagen VARCHAR(255),
  artesana VARCHAR(255),
  impacto TEXT,
  activo TINYINT(1) DEFAULT 1
);

CREATE TABLE socios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  tipo ENUM('individual','empresa','colegio') DEFAULT 'individual',
  alta_en DATE
);

CREATE TABLE colaboradores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  organizacion VARCHAR(255),
  email VARCHAR(255),
  notas TEXT
);

CREATE TABLE usuarios_admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  rol ENUM('admin','editor') DEFAULT 'editor',
  creado_en DATETIME DEFAULT CURRENT_TIMESTAMP
);
