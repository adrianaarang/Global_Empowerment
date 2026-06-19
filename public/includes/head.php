<?php
// Variables que cada página puede definir antes de incluir este archivo:
// $pageTitle    → título de la pestaña
// $pageDesc     → meta description (opcional)
// $rootPath     → ruta relativa a /public  ('.' desde index, '..' desde /pages, '../..' desde /pages/blog)
$rootPath = $rootPath ?? '.';
$pageTitle = isset($pageTitle) ? $pageTitle . ' · The Global Empowerment' : 'The Global Empowerment';
$pageDesc  = $pageDesc ?? 'ONG de cooperación internacional comprometida con el empoderamiento de mujeres y niñas.';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <title><?= htmlspecialchars($pageTitle) ?></title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- Google Fonts: Quicksand -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= $rootPath ?>/assets/css/variables.css">
  <link rel="stylesheet" href="<?= $rootPath ?>/assets/css/main.css">
  <?php if (isset($extraCss)): ?>
    <link rel="stylesheet" href="<?= $rootPath ?>/assets/css/<?= $extraCss ?>">
  <?php endif; ?>
</head>
<body>
