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
        <div class="col-md-4 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
              <!-- Logo Orange Money SVG inline -->
              <svg viewBox="0 0 160 60" width="140" xmlns="http://www.w3.org/2000/svg">
                <rect width="160" height="60" rx="6" fill="#fff"/>
                <!-- Flèche orange -->
                <polygon points="18,30 36,12 36,22 54,22 54,38 36,38 36,48" fill="#FF6600"/>
                <!-- Flèche bleue -->
                <polygon points="22,30 40,48 40,38 58,38 58,22 40,22 40,12" fill="#0066CC" opacity=".85"/>
                <text x="66" y="28" font-family="Arial Black,sans-serif" font-weight="900" font-size="13" fill="#FF6600">Orange</text>
                <text x="66" y="46" font-family="Arial Black,sans-serif" font-weight="900" font-size="13" fill="#FF6600">Money</text>
              </svg>
            </div>
            <p class="mm-new-label">Orange Money :</p>
            <p class="mm-new-number">#144*…99.0002</p>
            <button class="mm-copy-btn" onclick="copyNum('#144*99.0002', this)">📋 Copier le numéro</button>
          </div>
        </div>

        <!-- MTN Mobile Money -->
        <div class="col-md-4 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
              <svg viewBox="0 0 160 60" width="140" xmlns="http://www.w3.org/2000/svg">
                <rect width="160" height="60" rx="6" fill="#fff"/>
                <!-- Fond jaune MTN -->
                <rect x="4" y="6" width="52" height="48" rx="8" fill="#FFCC00"/>
                <text x="10" y="26" font-family="Arial Black" font-weight="900" font-size="11" fill="#1a1a1a">MTN</text>
                <text x="6" y="40" font-family="Arial" font-size="8" fill="#1a1a1a">Mobile</text>
                <text x="6" y="50" font-family="Arial" font-size="8" fill="#1a1a1a">Money</text>
                <!-- icône téléphone -->
                <rect x="38" y="10" width="14" height="22" rx="3" fill="#1a1a1a"/>
                <rect x="40" y="12" width="10" height="16" rx="1" fill="#FFCC00"/>
                <circle cx="45" cy="30" r="1.5" fill="#fff"/>
                <text x="62" y="28" font-family="Arial Black,sans-serif" font-weight="900" font-size="13" fill="#FFCC00">MTN</text>
                <text x="62" y="46" font-family="Arial,sans-serif" font-size="11" fill="#555">Mobile Money</text>
              </svg>
            </div>
            <p class="mm-new-label">MTN Mobile Money :</p>
            <p class="mm-new-number">#1002025906</p>
            <button class="mm-copy-btn" onclick="copyNum('#1002025906', this)">📋 Copier le numéro</button>
          </div>
        </div>

        <!-- Wave -->
        <div class="col-md-4 fade-up">
          <div class="mm-new-card">
            <div class="mm-logo-wrap">
              <svg viewBox="0 0 160 60" width="140" xmlns="http://www.w3.org/2000/svg">
                <rect width="160" height="60" rx="6" fill="#fff"/>
                <!-- W stylisé Wave -->
                <path d="M12,15 L22,45 L30,28 L38,45 L48,15" stroke="#00BCD4" stroke-width="5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="56" cy="30" r="3" fill="#9C27B0"/>
                <text x="64" y="36" font-family="Arial Black,sans-serif" font-weight="900" font-size="22" fill="#1a1a1a">wave</text>
              </svg>
            </div>
            <p class="mm-new-label">Diluner Wave :</p>
            <p class="mm-new-number">#141*2544-0200</p>
            <button class="mm-copy-btn" onclick="copyNum('#141*2544-0200', this)">📋 Copier le numéro</button>
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
