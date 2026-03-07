<?php
$pageTitle = "À propos – Winners' Chapel International Akouedo Goshen";
$currentPage = 'apropos';
$pageCSS = 'a-propos.css';
include 'includes/head.php';
?>

<body>

<?php include 'includes/header.php'; ?>

<!-- ════════════════════════════════════════
     PAGE 2 — À PROPOS
════════════════════════════════════════ -->
<!-- ── HERO : photo foule plein écran ── -->
<section class="hero-section" style="background-image: url('assets/images/winner.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 40vh;">
  <div class="hero-content">
    <h1 class="hero-title">Bienvenue à la Chapelle des<br>Vainqueurs Akouedo Goshen</h1>
    <p class="hero-subtitle">Votre lieu de destiner, d'impact et de victoire en Christ.</p>
    <button class="btn btn-red btn-lg px-5 py-3 hero-btn" onclick="window.location.href='cultes.php'">
      Nos Horaires de Culte
    </button>
  </div>
</section>

<!-- SECTION 1 : NOTRE HISTOIRE & VISION -->
<section style="padding:72px 0 60px;">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h1 class="section-title text-red" style="font-size:clamp(1.8rem,4vw,2.8rem);">Notre Histoire &amp; Notre Vision</h1>
      <div class="divider-red mx-auto mt-3"></div>
    </div>

    <!-- Photo église + texte -->
    <div class="row g-5 align-items-start fade-up">
      <div class="col-lg-5">
        <div style="border-radius:12px;overflow:hidden;box-shadow:0 6px 28px rgba(0,0,0,.12);">
          <!-- Photo église -->
          <img src="assets/images/winner.png" alt="Église Winners Chapel" style="width:100%;height:280px;object-fit:cover;display:block;"/>
        </div>
      </div>
      <div class="col-lg-7">
        <p class="text-dark" style="line-height:1.95;font-size:15px;">
          La Winners' Chapel International Akouedo Goshen est une église évangélique fondée en 2020–2017, dans un vœu d'être d'une vraie Église au service de la récession, fondée sur l'amour et la parole, offrant à chaque famille un cadre spirituel propice à l'épanouissement personnel et collectif.
        </p>
        <p class="text-muted mt-3" style="line-height:1.95;font-size:15px;">
          Nous faisons partie du réseau mondial de Winners' Chapel International, fondé par le Docteur David Oyedepo, sous la vision de répandre l'Évangile dans le monde entier. Chaque culte, chaque programme, chaque ministère est conçu pour vous rapprocher de Dieu et vous équiper pour votre destinée divine.
        </p>
        <p class="text-muted" style="line-height:1.95;font-size:15px;">
          Par votre présence parmi nous, vous contribuez à l'ensemble de la transformation spirituelle, vous faites partie d'une grande famille unie dans la foi et dans l'amour de Christ.
        </p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <button class="btn btn-red px-4 py-2" onclick="window.location.href='Leadership.php'">
            <i class="bi bi-person-fill me-2"></i>Notre Leadership
          </button>
          <button class="btn btn-outline-red px-4 py-2" onclick="window.location.href='Contact.php'">
            <i class="bi bi-envelope me-2"></i>Nous contacter
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CHIFFRES CLÉS -->
<section style="background:var(--wci-red);padding:52px 0;">
  <div class="container">
    <div class="row g-4 text-center text-white">
      <div class="col-6 col-md-3 fade-up">
        <h2 style="font-family:'Montserrat',sans-serif;font-weight:900;font-size:2.8rem;color:#fff;">10+</h2>
        <p style="color:rgba(255,255,255,.8);font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;">Années de ministère</p>
      </div>
      <div class="col-6 col-md-3 fade-up">
        <h2 style="font-family:'Montserrat',sans-serif;font-weight:900;font-size:2.8rem;color:#fff;">500+</h2>
        <p style="color:rgba(255,255,255,.8);font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;">Membres actifs</p>
      </div>
      <div class="col-6 col-md-3 fade-up">
        <h2 style="font-family:'Montserrat',sans-serif;font-weight:900;font-size:2.8rem;color:#fff;">8</h2>
        <p style="color:rgba(255,255,255,.8);font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;">Ministères actifs</p>
      </div>
      <div class="col-6 col-md-3 fade-up">
        <h2 style="font-family:'Montserrat',sans-serif;font-weight:900;font-size:2.8rem;color:#fff;">3</h2>
        <p style="color:rgba(255,255,255,.8);font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;">Cultes hebdomadaires</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2 : VALEURS FONDAMENTALES -->
<section style="padding:72px 0 80px;background:#fff;">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title text-red" style="font-size:clamp(1.6rem,3.5vw,2.4rem);">Nos Valeurs Fondamentales</h2>
      <div class="divider-red mx-auto mt-3"></div>
    </div>

    <div class="row g-4">
      <!-- Foi -->
      <div class="col-md-6 fade-up">
        <div class="d-flex gap-4 align-items-start p-4" style="border:1.5px solid #eee;border-radius:14px;background:#fff;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 8px 28px rgba(154,27,30,.1)'" onmouseout="this.style.boxShadow='none'">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--wci-red);display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0;">✝</div>
          <div>
            <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:var(--wci-red);text-transform:uppercase;letter-spacing:.06em;font-size:14px;margin-bottom:8px;">Foi</h5>
            <p class="text-muted small mb-0" style="line-height:1.8;">La Foi est le fondement de tout ce que nous sommes et de tout ce que nous faisons. Nous croyons fermement en la Parole vivante de Dieu et en ses promesses immuables pour nos vies.</p>
          </div>
        </div>
      </div>

      <!-- Intégrité -->
      <div class="col-md-6 fade-up">
        <div class="d-flex gap-4 align-items-start p-4" style="border:1.5px solid #eee;border-radius:14px;background:#fff;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 8px 28px rgba(154,27,30,.1)'" onmouseout="this.style.boxShadow='none'">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--wci-red);display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0;">🛡</div>
          <div>
            <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:var(--wci-red);text-transform:uppercase;letter-spacing:.06em;font-size:14px;margin-bottom:8px;">Intégrité</h5>
            <p class="text-muted small mb-0" style="line-height:1.8;">Intégrité et honnêteté dans tous nos engagements. Nous nous efforçons de refléter le caractère de Christ dans chacune de nos actions, aussi bien en public qu'en privé.</p>
          </div>
        </div>
      </div>

      <!-- Amour -->
      <div class="col-md-6 fade-up">
        <div class="d-flex gap-4 align-items-start p-4" style="border:1.5px solid #eee;border-radius:14px;background:#fff;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 8px 28px rgba(154,27,30,.1)'" onmouseout="this.style.boxShadow='none'">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--wci-red);display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0;">♥</div>
          <div>
            <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:var(--wci-red);text-transform:uppercase;letter-spacing:.06em;font-size:14px;margin-bottom:8px;">Amour</h5>
            <p class="text-muted small mb-0" style="line-height:1.8;">L'amour est notre identité. Nous accueillons chaque personne avec chaleur, compassion et bienveillance, reflétant l'amour inconditionnel de notre Père céleste.</p>
          </div>
        </div>
      </div>

      <!-- Excellence -->
      <div class="col-md-6 fade-up">
        <div class="d-flex gap-4 align-items-start p-4" style="border:1.5px solid #eee;border-radius:14px;background:#fff;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 8px 28px rgba(154,27,30,.1)'" onmouseout="this.style.boxShadow='none'">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--wci-red);display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0;">⭐</div>
          <div>
            <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:var(--wci-red);text-transform:uppercase;letter-spacing:.06em;font-size:14px;margin-bottom:8px;">Excellence</h5>
            <p class="text-muted small mb-0" style="line-height:1.8;">Excellence dans tout ce que nous faisons, au service du Roi des rois. Nous ne nous contentons pas du minimum, car nous servons un Dieu qui mérite le meilleur.</p>
          </div>
        </div>
      </div>

      <!-- Service -->
      <div class="col-md-6 fade-up">
        <div class="d-flex gap-4 align-items-start p-4" style="border:1.5px solid #eee;border-radius:14px;background:#fff;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 8px 28px rgba(154,27,30,.1)'" onmouseout="this.style.boxShadow='none'">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--wci-red);display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0;">🤝</div>
          <div>
            <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:var(--wci-red);text-transform:uppercase;letter-spacing:.06em;font-size:14px;margin-bottom:8px;">Service</h5>
            <p class="text-muted small mb-0" style="line-height:1.8;">Servir Dieu et notre communauté est un honneur, non une obligation. Chaque membre est encouragé à découvrir ses dons et à les mettre au service de l'Église et des autres.</p>
          </div>
        </div>
      </div>

      <!-- Communauté -->
      <div class="col-md-6 fade-up">
        <div class="d-flex gap-4 align-items-start p-4" style="border:1.5px solid #eee;border-radius:14px;background:#fff;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 8px 28px rgba(154,27,30,.1)'" onmouseout="this.style.boxShadow='none'">
          <div style="width:52px;height:52px;border-radius:50%;background:var(--wci-red);display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0;">👥</div>
          <div>
            <h5 style="font-family:'Montserrat',sans-serif;font-weight:800;color:var(--wci-red);text-transform:uppercase;letter-spacing:.06em;font-size:14px;margin-bottom:8px;">Communauté</h5>
            <p class="text-muted small mb-0" style="line-height:1.8;">Nous sommes une famille soudée. La croissance spirituelle se vit en communauté, dans la fraternité, l'encouragement mutuel et le partage de la Parole de Dieu.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="verse-banner" style="background:var(--wci-red);padding:56px 40px;text-align:center;">
  <div class="container text-center">
    <h3 style="font-family:'Montserrat',sans-serif;font-weight:800;color:#fff;font-size:1.5rem;margin-bottom:16px;">Rejoignez Notre Famille !</h3>
    <p style="color:rgba(255,255,255,.8);margin-bottom:28px;max-width:500px;margin-left:auto;margin-right:auto;">Nous vous accueillons avec joie chaque dimanche à partir de 8h00. Venez vivre une expérience de culte qui transforme des vies.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <button class="btn btn-light px-5 py-3" style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:.06em;color:var(--wci-red);" onclick="window.location.href='cultes.php'">
        <i class="bi bi-calendar-event me-2"></i>Nos Cultes
      </button>
      <button class="btn btn-outline-light px-5 py-3" style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:13px;text-transform:uppercase;letter-spacing:.06em;" onclick="window.location.href='Contact.php'">
        <i class="bi bi-envelope me-2"></i>Nous Écrire
      </button>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
