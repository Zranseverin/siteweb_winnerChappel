<!-- ======= FOOTER ======= -->
<footer>
  <div class="container">
    <div class="footer-grid">

      <!-- Colonne 1 : Logo + description + réseaux -->
      <div class="footer-col footer-col-brand">
        <img src="assets/images/logo2-Photoroom.png" alt="Winners' Chapel Logo" class="footer-logo">
        <p class="footer-brand-desc">
          Église locale de la famille Winners' Chapel International,
          engagée à transformer des vies par la puissance de l'Évangile
          à Akouedo Goshen, Abidjan.
        </p>
        <div class="footer-social">
          <a href="#" class="footer-social-link"><i class="bi bi-facebook"></i></a>
          <a href="#" class="footer-social-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="footer-social-link"><i class="bi bi-youtube"></i></a>
          <a href="#" class="footer-social-link"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="footer-social-link"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Colonne 2 : Liens rapides -->
      <div class="footer-col">
        <h4 class="footer-col-title">Liens rapides</h4>
        <ul class="footer-links">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="a-propos.php">À propos</a></li>
          <li><a href="leadership.php">Leadership</a></li>
          <li><a href="cultes.php">Cultes &amp; Programmes</a></li>
          <li><a href="galerie.php">Galerie</a></li>
          <li><a href="evenements.php">Événements</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Colonne 3 : Ministères -->
      <div class="footer-col">
        <h4 class="footer-col-title">Ministères</h4>
        <ul class="footer-links">
          <li><a href="ministeres.php">Ministère des Enfants</a></li>
          <li><a href="ministeres.php">Jeunesse (WCI Youth)</a></li>
          <li><a href="ministeres.php">Ministère des Femmes</a></li>
          <li><a href="ministeres.php">Ministère des Hommes</a></li>
          <li><a href="ministeres.php">Louange &amp; Adoration</a></li>
          <li><a href="ministeres.php">Évangélisation</a></li>
        </ul>
      </div>

      <!-- Colonne 4 : Newsletter -->
      <div class="footer-col">
        <h4 class="footer-col-title">Newsletter</h4>
        <p class="footer-newsletter-text">
          Inscrivez-vous pour recevoir nos actualités et enseignements directement dans votre boîte mail.
        </p>
        <form class="footer-newsletter-form" action="#" method="POST">
          <div class="footer-newsletter-input-group">
            <input type="email" class="footer-newsletter-input" placeholder="Votre email" required>
            <button type="submit" class="footer-newsletter-btn">S'abonner</button>
          </div>
        </form>
      </div>

    </div><!-- /footer-grid -->

    <!-- Séparateur doré -->
    <div class="footer-divider"></div>

    <!-- Copyright -->
    <p class="footer-copyright">
      &copy; <?php echo date('Y'); ?> Winners' Chapel International Akouedo Goshen. Tous droits réservés.
    </p>

  </div>
</footer>

<!-- TOAST -->
<div id="toast">&#10003; Numéro copié !</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<?php if (isset($pageJS)): ?>
<script src="assets/js/<?php echo $pageJS; ?>"></script>
<?php endif; ?>
</body>
</html>