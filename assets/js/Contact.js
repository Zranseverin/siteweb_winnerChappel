// ─── CONTACT FORM ───
document.addEventListener('DOMContentLoaded', function() {
  const btnEnvoyer = document.getElementById('btnEnvoyer');
  
  if (btnEnvoyer) {
    btnEnvoyer.addEventListener('click', function() {
      // Simple form validation
      const prenom = document.getElementById('prenom').value.trim();
      const nom = document.getElementById('nom').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();

      if (!prenom || !nom || !email || !message) {
        alert('Veuillez remplir tous les champs obligatoires.');
        return;
      }

      // Simulate form submission
      this.innerHTML = '✓ Message envoyé !';
      this.style.background = '#2ecc71';
      
      setTimeout(() => {
        this.innerHTML = '<i class="bi bi-send-fill me-2"></i>Envoyer le message';
        this.style.background = '';
        // Reset form
        document.getElementById('prenom').value = '';
        document.getElementById('nom').value = '';
        document.getElementById('email').value = '';
        document.getElementById('telephone').value = '';
        document.getElementById('sujet').selectedIndex = 0;
        document.getElementById('message').value = '';
      }, 3000);
    });
  }
});
