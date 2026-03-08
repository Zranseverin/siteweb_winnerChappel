<?php
$pageTitle = "Faire un don – Winners' Chapel International Akouedo Goshen";
$currentPage = 'don';
$pageCSS = 'fait_don.css';
$pageJS = 'fait_don.js';
include 'includes/head.php';
?>

<body>

<?php include 'includes/header.php'; ?>

<!-- ════════════════════════════════════════
     PAGE 8 — FAIRE UN DON
════════════════════════════════════════ -->
<div class="page-header" style="background-image: url('assets/images/photo3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 300px;">
  <h1>Faire un Don</h1>
  <p>Soutenez l'œuvre de Dieu et participez à l'expansion de Son Royaume</p>
</div>
<div class="don-page-wrap">
  <div class="container" style="max-width:900px;">

    <!-- TITRE -->
    <div class="text-center mb-2 fade-up">
      <h1 style="
        font-family:'Montserrat',sans-serif;
        font-weight:900; font-size:clamp(1.8rem,5vw,3rem);
        color:var(--wci-red);
        text-transform:uppercase;
        letter-spacing:.04em;
        line-height:1.1;
      ">Soutenir l'Œuvre de Dieu</h1>
      <div class="divider-red mx-auto mt-3 mb-4"></div>
      <p class="text-muted fade-up" style="max-width:560px;margin:0 auto;font-size:14.5px;line-height:1.85;">
        Donnez en vier et notre. Winners Chapel true noit qua sallete pour allon aoures possible, soutenir l'Œuvre de Dieu.<br>
        <em>(2 Corinthiens 9:6-8)</em>
      </p>
    </div>

    <!-- ── MOBILE MONEY ── -->
    <div class="mt-5 mb-4 fade-up">
      <p class="don-section-label">Donner via Mobile Money</p>
      <div class="row g-3">

        <!-- Orange Money -->
        <div class="col-md-3 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
              <!-- Logo Orange Money SVG inline -->
              <img src="assets/images/Orange-Money-logo.png" alt="Orange Money" style="width: 140px; height: auto;">
            </div>
            <p class="mm-new-label">Orange Money :</p>
            <p class="mm-new-number">+225 XX XX XX XX XX</p>
            <button class="mm-copy-btn" onclick="copyNum('#144*99.0002', this)">📋 Copier le numéro</button>
          </div>
        </div>

        <!-- MTN Mobile Money -->
        <div class="col-md-3 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
               <img src="assets/images/mtn-mobile-money-logo.jpg" alt="Orange Money" style="width: 140px; height: auto;">
            </div>
            <p class="mm-new-label">MTN Mobile Money :</p>
            <p class="mm-new-number">+225 XX XX XX XX XX</p>
            <button class="mm-copy-btn" onclick="copyNum('#1002025906', this)">📋 Copier le numéro</button>
          </div>
        </div>

        <!-- Wave -->
        <div class="col-md-3 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
              <img src="assets/images/Moov_Africa_logo.png" alt="Orange Money" style="width: 140px; height: auto;">
            </div>
            <p class="mm-new-label">MOOV :</p>
            <p class="mm-new-number">+225 XX XX XX XX XX</p>
            <button class="mm-copy-btn" onclick="copyNum('#141*2544-0200', this)">📋 Copier le numéro</button>
          </div>
        </div>
        <div class="col-md-3 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
              <img src="assets/images/wave.png" alt="Orange Money" style="width: 140px; height: auto;">
            </div>
            <p class="mm-new-label">Diluner Wave :</p>
            <p class="mm-new-number">+225 XX XX XX XX XX</p>
            <button class="mm-copy-btn" onclick="copyNum('#141*2544-0200', this)">Copier le numéro</button>
          </div>
        </div>

      </div>
    </div>

    <!-- ── VIREMENT BANCAIRE ── -->
    <div class="fade-up">
      <div class="bank-new-card">
        <h5>Virement Bancaire</h5>
        <div class="bank-row">
          <!-- Icône banque -->
          <div class="bank-icon-new">
            <svg viewBox="0 0 40 40" width="36" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="18" width="32" height="4" fill="#fff" rx="1"/>
              <rect x="6" y="22" width="4" height="12" fill="#fff" rx="1"/>
              <rect x="13" y="22" width="4" height="12" fill="#fff" rx="1"/>
              <rect x="20" y="22" width="4" height="12" fill="#fff" rx="1"/>
              <rect x="27" y="22" width="4" height="12" fill="#fff" rx="1"/>
              <polygon points="20,4 36,18 4,18" fill="#fff"/>
              <rect x="4" y="34" width="32" height="3" fill="#fff" rx="1"/>
            </svg>
          </div>
          <div class="bank-detail">
            <p class="iban-num">IBAN: 0BAN-111EFM097-0000-8536002</p>
            <p class="bank-sub">Acconte : WINNERS' CHAPEL</p>
            <p class="bank-sub">Aumpite : GOSHEN</p>
          </div>
          <button class="mm-copy-btn ms-auto" style="white-space:nowrap;" onclick="copyNum('0BAN111EFM09700008536002', this)">📋 Copier</button>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
