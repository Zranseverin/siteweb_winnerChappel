<?php
$pageTitle = "Nous Contacter – Winners' Chapel International Akouedo Goshen";
$currentPage = 'contact';
$pageCSS = 'Contact.css';
$pageJS = 'Contact.js';
include 'includes/head.php';
?>

<body>

<?php include 'includes/header.php'; ?>

<!-- ════════════════════════════════════════
     PAGE 9 — CONTACT
════════════════════════════════════════ -->
<div class="page-header" style="background-image: url('assets/images/photo3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 300px;">
  <h1>Contactez-nous</h1>
  <p>Nous sommes là pour vous servir et répondre à vos questions</p>
</div>
<section style="padding:80px 0;">
  <div class="container">
    <div class="row g-5">

      <!-- Infos + Carte -->
      <div class="col-lg-6 fade-up">
        <h3 class="section-title text-red mb-3" style="font-size:1.6rem;">Nous Trouver</h3>
        <div class="divider-red mb-4"></div>

        <div class="contact-info-item">
          <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div>
            <p class="fw-700 mb-1">Adresse</p>
            <p class="text-muted small">Akouedo Goshen, Abidjan<br>Côte d'Ivoire</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
          <div>
            <p class="fw-700 mb-1">Téléphone</p>
            <p class="text-muted small">+225 XX XX XX XX XX</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
          <div>
            <p class="fw-700 mb-1">Email</p>
            <p class="text-muted small"><a href="mailto:contact@wci-akouedo.com">contact@wci-akouedo.com</a></p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon"><i class="bi bi-clock-fill"></i></div>
          <div>
            <p class="fw-700 mb-1">Bureaux ouverts</p>
            <p class="text-muted small">Lundi – Vendredi : 9h00 – 17h00<br>Dimanche : 7h00 – 12h00</p>
          </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class="mt-4">
          <p class="fw-700 mb-3">Suivez-nous</p>
          <div class="d-flex gap-3 flex-wrap">
            <a href="#" class="btn btn-red btn-sm px-3"><i class="bi bi-facebook me-1"></i>Facebook</a>
            <a href="#" class="btn btn-red btn-sm px-3"><i class="bi bi-youtube me-1"></i>YouTube</a>
            <a href="#" class="btn btn-red btn-sm px-3"><i class="bi bi-instagram me-1"></i>Instagram</a>
          </div>
        </div>

        <!-- Carte -->
        <div class="mt-4">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0668!2d-3.9508!3d5.3515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebfd5e1b8f67%3A0x6a62d1e9e6f4c8e0!2sAkou%C3%A9do%2C%20Abidjan%2C%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1234567890" 
            width="100%" 
            height="450" 
            style="border:0; border-radius: 14px; box-shadow: 0 4px 18px rgba(0,0,0,0.1);" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <div class="text-center mt-3">
            <a href="https://www.google.com/maps/dir/5.3712465,-3.8757129/5.3515,-3.9508/@5.3507867,-4.0311373,27747m/data=!3m2!1e3!4b1!4m4!4m3!1m1!4e1!1m0?entry=ttu&g_ep=EgoyMDI2MDMwNC4xIKXMDSoASAFQAw%3D%3D" 
               target="_blank" 
               class="btn btn-outline-red btn-sm">
              <i class="bi bi-box-arrow-up-right me-2"></i>Ouvrir dans Google Maps
            </a>
          </div>
        </div>
      </div>

      <!-- Formulaire -->
      <div class="col-lg-6 fade-up">
        <h3 class="section-title text-red mb-3" style="font-size:1.6rem;">Nous Écrire</h3>
        <div class="divider-red mb-4"></div>
        <div class="contact-form">
          <div class="row g-3">
            <div class="col-sm-6">
              <label>Prénom</label>
              <input type="text" class="form-control" id="prenom" placeholder="Votre prénom"/>
            </div>
            <div class="col-sm-6">
              <label>Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="Votre nom"/>
            </div>
            <div class="col-12">
              <label>Email</label>
              <input type="email" class="form-control" id="email" placeholder="votre@email.com"/>
            </div>
            <div class="col-12">
              <label>Téléphone</label>
              <input type="tel" class="form-control" id="telephone" placeholder="+225 XX XX XX XX XX"/>
            </div>
            <div class="col-12">
              <label>Sujet</label>
              <select class="form-control" id="sujet">
                <option>Demande de prière</option>
                <option>Renseignement général</option>
                <option>Counseling pastoral</option>
                <option>Intégration à l'église</option>
                <option>Autre</option>
              </select>
            </div>
            <div class="col-12">
              <label>Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Votre message..."></textarea>
            </div>
            <div class="col-12">
              <button class="btn btn-red w-100 py-3" type="button" id="btnEnvoyer">
                <i class="bi bi-send-fill me-2"></i>Envoyer le message
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
