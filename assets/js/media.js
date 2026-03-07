// ─── VERSET DU JOUR ───
var versets = [
  { text: '« Car Dieu a tant aimé le monde qu\'il a donné son Fils unique, afin que quiconque croit en lui ne périsse point, mais qu\'il ait la vie éternelle. »', ref: '— Jean 3:16' },
  { text: '« Je suis le chemin, la vérité et la vie. Nul ne vient au Père que par moi. »', ref: '— Jean 14:6' },
  { text: '« La foi, c\'est la certitude des choses qu\'on espère, la démonstration de celles qu\'on ne voit pas. »', ref: '— Hébreux 11:1' },
  { text: '« Je puis tout par celui qui me fortifie. »', ref: '— Philippiens 4:13' },
  { text: '« L\'Éternel est mon berger : je ne manquerai de rien. »', ref: '— Psaume 23:1' },
  { text: '« Confie-toi en l\'Éternel de tout ton cœur, et ne t\'appuie pas sur ta sagesse. »', ref: '— Proverbes 3:5' },
  { text: '« La foi vient de ce qu\'on entend, et ce qu\'on entend vient de la parole de Christ. »', ref: '— Romains 10:17' },
];
var versetIndex = 0;

window.nextVerset = function() {
  versetIndex = (versetIndex + 1) % versets.length;
  var el = document.getElementById('versetText');
  var ref = document.getElementById('versetRef');
  if (el && ref) {
    el.style.opacity = '0';
    ref.style.opacity = '0';
    setTimeout(function() {
      el.textContent = versets[versetIndex].text;
      ref.textContent = versets[versetIndex].ref;
      el.style.transition = 'opacity .4s';
      ref.style.transition = 'opacity .4s';
      el.style.opacity = '1';
      ref.style.opacity = '1';
    }, 300);
  }
};
