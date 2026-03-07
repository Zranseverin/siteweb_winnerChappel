<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $pageTitle ?? 'Winners\' Chapel International – Akouedo Goshen'; ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo2.png"/>
  <link rel="shortcut icon" type="image/png" href="assets/images/logo2.png"/>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"/>
  
  <!-- Main Styles -->
  <link rel="stylesheet" href="assets/css/main.css"/>
  <!-- Header Styles -->
  <link rel="stylesheet" href="assets/css/header.css"/>
  <link rel="stylesheet" href="assets/css/accueil.css"/>
  <!-- Footer Styles -->
  <link rel="stylesheet" href="assets/css/footer.css"/>
  <?php if (isset($pageCSS)): ?>
  <link rel="stylesheet" href="assets/css/<?php echo $pageCSS; ?>"/>
  <?php endif; ?>
</head>
<body>
