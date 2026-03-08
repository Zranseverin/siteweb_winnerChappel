<?php
$pageTitle = "Galerie Photo – Winners' Chapel International Akouedo Goshen";
$currentPage = 'galerie';
$pageCSS = 'galerie.css';
$pageJS = 'galerie.js';
include 'includes/head.php';
?>

<body>

<?php include 'includes/header.php'; ?>

<!-- ════════════════════════════════════════
     PAGE 7 — GALERIE
════════════════════════════════════════ -->
<div class="page-header" style="background-image: url('assets/images/photo3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 300px;">
  <h1>Galerie Photo</h1>
  <p>Immortalisez les moments forts de notre église</p>
</div>
<section style="padding:80px 0;">
  <div class="container">
    <!-- Filtres -->
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-5 fade-up gallery-filters">
      <button class="btn btn-red btn-sm px-4" data-filter="all">Tous</button>
      <button class="btn btn-outline-red btn-sm px-4" data-filter="cultes">Cultes</button>
      <button class="btn btn-outline-red btn-sm px-4" data-filter="evenements">Événements</button>
      <button class="btn btn-outline-red btn-sm px-4" data-filter="ministeres">Ministères</button>
      <button class="btn btn-outline-red btn-sm px-4" data-filter="conventions">Conventions</button>
    </div>
    <div class="row g-3">
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="cultes"><img src="assets/images/photo1.jpg" alt="Culte 1"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="cultes"><img src="assets/images/photo2.jpg" alt="Culte 2"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="cultes"><img src="assets/images/photo3.jpg" alt="Culte 3"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="cultes"><img src="assets/images/photo4.jpg" alt="Culte 4"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="evenements"><img src="assets/images/unnamed.jpg" alt="Événement 1"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="evenements"><img src="assets/images/unnamed (1).jpg" alt="Événement 2"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="evenements"><img src="assets/images/unnamed (2).jpg" alt="Événement 3"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="evenements"><img src="assets/images/unnamed (3).jpg" alt="Événement 4"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="ministeres"><img src="assets/images/chapel.jpg" alt="Ministère 1"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="ministeres"><img src="assets/images/lmm.jpg" alt="Ministère 2"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="ministeres"><img src="assets/images/lmo.jpg" alt="Ministère 3"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="ministeres"><img src="assets/images/mpl.jpg" alt="Ministère 4"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="conventions"><img src="assets/images/mediat.jpg" alt="Convention 1"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="conventions"><img src="assets/images/marqueytte.jpg" alt="Convention 2"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="conventions"><img src="assets/images/winner.png" alt="Convention 3"></div></div>
      <div class="col-6 col-md-4 col-lg-3 fade-up"><div class="gallery-item" data-category="conventions"><img src="assets/images/logo.png" alt="Convention 4"></div></div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
