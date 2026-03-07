// ─── SCROLL FADE-UPS ───
function triggerFadeUps() {
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.08 });
  document.querySelectorAll('.fade-up').forEach(function(el) {
    el.classList.remove('visible');
    obs.observe(el);
  });
}

// ─── INIT au chargement ───
document.addEventListener('DOMContentLoaded', function() {
  // Lancer les animations de la page active initiale
  setTimeout(triggerFadeUps, 150);
});
