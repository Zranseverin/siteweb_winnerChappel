<!-- ======= TOP BAR ======= -->
<div class="topbar d-none d-md-block">
  <div class="container d-flex justify-content-between align-items-center">
    <span><i class="bi bi-geo-alt-fill me-1"></i>Akouedo Goshen, Abidjan – Côte d'Ivoire</span>
    <div class="d-flex gap-3">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-youtube"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-twitter-x"></i></a>
    </div>
  </div>
</div>

<!-- ======= NAVBAR ======= -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="d-flex align-items-stretch w-100">
    <a href="index.php" class="logo-container">
      <!-- Logo Image -->
      <img src="assets/images/logo1.png" alt="Winners' Chapel International Logo" class="logo-image"/>
      <!-- Texte -->
      <div class="logo-text">
        <strong class="logo-title">Winners' Chapel International</strong>
        <small class="logo-subtitle">Akouedo Goshen</small>
      </div>
    </a>
    <!-- LIENS ZONE : fond rouge WCI -->
    <div class="nav-container">
      <!-- Hamburger mobile -->
      <button class="navbar-toggler border-0 d-lg-none ms-auto" type="button"
              data-bs-toggle="collapse" data-bs-target="#navMenuWci">
        <i class="bi bi-list"></i>
      </button>

      <!-- Liens desktop -->
      <div class="collapse navbar-collapse d-lg-flex" id="navMenuWci">
        <ul class="navbar-nav align-items-lg-stretch mb-0 ms-auto">
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'accueil' ? 'active-wci' : ''; ?>" href="index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'apropos' ? 'active-wci' : ''; ?>" href="a-propos.php">À propos</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'leadership' ? 'active-wci' : ''; ?>" href="Leadership.php">Leadership</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'cultes' ? 'active-wci' : ''; ?>" href="cultes.php">Cultes</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'ministeres' ? 'active-wci' : ''; ?>" href="ministere.php">Ministères</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'medias' ? 'active-wci' : ''; ?>" href="media.php">Médias</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'galerie' ? 'active-wci' : ''; ?>" href="galerie.php">Galerie</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'don' ? 'active-wci' : ''; ?>" href="fait_don.php">Faire un don</a></li>
          <li class="nav-item"><a class="nav-link-wci <?php echo ($currentPage ?? '') === 'contact' ? 'active-wci' : ''; ?>" href="Contact.php">Contact</a></li>
        </ul>
      </div>
    </div>

  </div>
</nav>
