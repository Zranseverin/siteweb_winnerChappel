<!-- ======= FOOTER ======= -->
<footer>
  <div class="container">
    <!-- Newsletter Section -->
    <div class="footer-newsletter">
      <h3 class="footer-newsletter-title">Abonnez-vous à notre newsletter</h3>
      <p class="footer-newsletter-text">Recevez nos dernières actualités et enseignements directement dans votre boîte mail.</p>
      <form class="footer-newsletter-form" action="#" method="POST">
        <div class="footer-newsletter-input-group">
          <input type="email" class="footer-newsletter-input" placeholder="Votre adresse email" required>
          <button type="submit" class="footer-newsletter-btn">
            <i class="bi bi-envelope-check"></i> S'abonner
          </button>
        </div>
      </form>
    </div>
    
    <!-- Copyright centré -->
    <p class="footer-copyright">
      © <?php echo date('Y'); ?> Winners' Chapel International Akouedo Goshen. Tous droits réservés.
    </p>
    <!-- Réseaux sociaux centrés -->
    <div class="footer-social">
      <a href="#" class="footer-social-link"><i class="bi bi-instagram"></i></a>
      <a href="#" class="footer-social-link"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="footer-social-link"><i class="bi bi-facebook"></i></a>
      <a href="#" class="footer-social-link"><i class="bi bi-youtube"></i></a>
      <a href="#" class="footer-social-link"><i class="bi bi-linkedin"></i></a>
    </div>
    <!-- Étoile décorative -->
    <div class="footer-decorative-star">✦</div>
  </div>
</footer>

<!-- TOAST -->
<div id="toast">✓ Numéro copié !</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<?php if (isset($pageJS)): ?>
<script src="assets/js/<?php echo $pageJS; ?>"></script>
<?php endif; ?>
</body>
</html>
