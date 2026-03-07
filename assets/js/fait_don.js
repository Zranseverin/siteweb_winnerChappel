// ─── COPY TO CLIPBOARD ───
window.copyNum = function(text, btn) {
  navigator.clipboard.writeText(text).then(function() {
    var originalText = btn.innerHTML;
    btn.textContent = '✓ Copié';
    btn.classList.add('copied');
    var t = document.getElementById('toast');
    if (t) {
      t.classList.add('show');
      setTimeout(function() {
        t.classList.remove('show');
        btn.innerHTML = originalText;
        btn.classList.remove('copied');
      }, 2500);
    } else {
      setTimeout(function() {
        btn.innerHTML = originalText;
        btn.classList.remove('copied');
      }, 2500);
    }
  }).catch(function() {
    alert('Veuillez copier manuellement : ' + text);
  });
};
