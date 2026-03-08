<?php
$pageTitle = "Winners' Chapel International – Akouedo Goshen – Accueil";
$currentPage = 'accueil';
include 'includes/head.php';
?>

<body>

<?php include 'includes/header.php'; ?>

<!-- ════════════════════════════════════════
     PAGE 1 — ACCUEIL
════════════════════════════════════════ -->

<!-- ── HERO : photo foule plein écran ── -->
<section class="hero-section" style="background-image: url('assets/images/photo3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="hero-content">
    <h1 class="hero-title">Bienvenue à la Chapelle des<br>Vainqueurs Akouedo Goshen</h1>
    <p class="hero-subtitle">Votre lieu de destiner, d'impact et de victoire en Christ.</p>
    <button class="btn btn-red btn-lg px-5 py-3 hero-btn" onclick="window.location.href='cultes.php'">
      Nos Horaires de Culte
    </button>
  </div>
</section>

<!-- ── WELCOME : photo pasteur + texte ── -->
<section class="welcome-section">
  <div class="container">
    <div class="row align-items-center justify-content-center g-5 welcome-container">

      <!-- Photo pasteur -->
      <div class="col-lg-4 col-md-5 fade-up">
        <div class="welcome-image-wrapper">
          <img src="assets/images/photo1.jpg" alt="Pasteur" class="welcome-image-photo"/>
        </div>
      </div>

      <!-- Texte -->
     <div class="col-lg-6 col-md-7 fade-up">
  <h2 class="welcome-title">Une Famille Vous Attend</h2>
  <p class="welcome-text">
    Bienvenue à Winners Chapel, une église où l’amour de Dieu transforme les vies. 
    Nous sommes une communauté de foi engagée à vous aider à grandir spirituellement, 
    découvrir votre destinée et vivre une vie de victoire en Jésus-Christ.
  </p>
  <a href="a-propos.php" class="welcome-link">
    En savoir plus sur nous <i class="bi bi-chevron-right"></i>
  </a>
</div>

    </div>
  </div>
</section>

<!-- ── HORAIRES : bande grise 3 blocs ── -->
<section class="horaires-section">
  <div class="container">
    <div class="row g-0 horaires-container">

      <!-- Dimanche -->
      <div class="col-md-3 fade-up">
        <div class="horaire-item">
          <div class="horaire-icon-wrapper">
            <i class="bi bi-clock-fill"></i>
          </div>
          <div>
            <p class="horaire-title">Dimanche</p>
            <p class="horaire-description"> Première Culte de Célébration</p>
            <p class="horaire-description">07h00 - 09h30</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 fade-up">
        <div class="horaire-item">
          <div class="horaire-icon-wrapper">
            <i class="bi bi-clock-fill"></i>
          </div>
          <div>
            <p class="horaire-title">Dimanche</p>
            <p class="horaire-description"> Deuxième Culte de Célébration</p>
            <p class="horaire-description">09h30 - 11h30</p>
          </div>
        </div>
      </div>

      <!-- Mercredi -->
      <div class="col-md-3 fade-up horaire-divider">
        <div class="horaire-item">
          <div class="horaire-icon-wrapper">
            <i class="bi bi-calendar-check-fill"></i>
          </div>
          <div>
            <p class="horaire-title">Mercredi</p>
            <p class="horaire-description">Culte de Communion</p>
            <p class="horaire-description">18h30 - 20h00</p>
          </div>
        </div>
      </div>

      <!-- Vendredi -->
      <div class="col-md-3 fade-up">
        <div class="horaire-item">
          <div class="horaire-icon-wrapper">
            <i class="bi bi-star-fill"></i>
          </div>
          <div>
            <p class="horaire-title">Vendredi</p>
            <p class="horaire-description">Veillée de Prière</p>
            <p class="horaire-description">22h00 - Aube</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="evenements-section">
  <div class="container">

    <!-- Titre -->
    <div class="evenements-header fade-up">
      <h2 class="evenements-title">Événements</h2>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center mt-2">

      <!-- Card 1 : EN COURS -->
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="event-card" style="background-image: url('assets/images/photo4.jpg'); background-size: cover; background-position: center;">
          <span class="event-badge badge-en-cours">En cours</span>
          <div class="event-body">
            <div class="event-info">
              <h4 class="event-name">21 Jours de Jeûne &amp; Prière</h4>
              <p class="event-date">Du 5 au 26 Janvier 2026</p>
              <p class="event-desc">Thème : "Dominer par la Puissance de l'Esprit".</p>
            </div>
          </div>
          <a href="media.php" class="btn btn-event-outline">En savoir plus</a>
        </div>
      </div>

      <!-- Card 2 : À VENIR -->
      <div class="col-lg-4 col-md-6 fade-up">
       <div class="event-card" style="background-image: url('assets/images/photo4.jpg'); background-size: cover; background-position: center;">
          <span class="event-badge badge-a-venir">À venir</span>
          <div class="event-body">
            <div class="event-info">
              <h4 class="event-name">Grand Culte de Pâques</h4>
              <p class="event-date">Dimanche 05 Avril 2026 – 08h00</p>
              <p class="event-desc">Une célébration glorieuse de la résurrection.</p>
            </div>
          </div>
          <a href="media.php" class="btn btn-event-outline">En savoir plus</a>
        </div>
      </div>

      <!-- Card 3 : PRÉCÉDENT -->
      <div class="col-lg-4 col-md-6 fade-up">
        <div class="event-card" style="background-image: url('assets/images/photo4.jpg'); background-size: cover; background-position: center;">
          <span class="event-badge badge-precedent">Précédent</span>
          <div class="event-body">
            <div class="event-info">
              <h4 class="event-name">Nuit de la Traversée</h4>
              <p class="event-date">31 Décembre 2025</p>
              <p class="event-desc">Retour en images sur notre passage vers l'année 2026.</p>
            </div>
          </div>
          <a href="media.php" class="btn btn-event-outline">En savoir plus</a>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</section>

<?php include 'includes/footer.php'; ?>
