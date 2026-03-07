# Winners' Chapel International - Site Web

## Structure du Projet

Ce site web est construit avec une architecture PHP modulaire pour une meilleure maintenabilité et réutilisabilité du code.

### 📁 Arborescence des Fichiers

```
chapel/
├── index.php              (Page d'accueil)
├── a-propos.php           (Page À propos)
├── Leadership.php         (Page Leadership)
├── cultes.php             (Page Cultes & Programmes)
├── ministere.php          (Page Ministères)
├── media.php              (Page Médias & Enseignements)
├── galerie.php            (Page Galerie Photo)
├── fait_don.php           (Page Faire un don)
├── Contact.php            (Page Contact)
│
├── includes/              (Composants partagés)
│   ├── head.php           (En-tête HTML commune)
│   ├── header.php         (Barre de navigation + Top bar)
│   └── footer.php         (Pied de page)
│
└── assets/                (Ressources statiques)
    ├── css/               (Feuilles de style)
    │   ├── main.css       (Styles globaux)
    │   ├── accueil.css    (Styles page d'accueil)
    │   ├── a-propos.css   (Styles page à propos)
    │   ├── Leadership.css (Styles page leadership)
    │   ├── cultes.css     (Styles page cultes)
    │   ├── ministere.css  (Styles page ministères)
    │   ├── media.css      (Styles page médias)
    │   ├── galerie.css    (Styles page galerie)
    │   ├── fait_don.css   (Styles page don)
    │   └── Contact.css    (Styles page contact)
    │
    └── js/                (Scripts JavaScript)
        ├── main.js        (Scripts globaux)
        ├── media.js       (Scripts page médias)
        ├── galerie.js     (Scripts page galerie)
        ├── fait_don.js    (Scripts page don)
        └── Contact.js     (Scripts page contact)
```

## 🎨 Architecture Technique

### Composants Partagés

**1. `includes/head.php`**
- Contient les balises `<head>` communes à toutes les pages
- Inclut Bootstrap 5, Bootstrap Icons, Google Fonts
- Charge le CSS global (`main.css`)
- Charge le CSS spécifique à chaque page (variable `$pageCSS`)

**2. `includes/header.php`**
- Barre supérieure (Top bar) avec informations de contact et réseaux sociaux
- Barre de navigation principale (Navbar) avec logo et menu
- Gestion automatique de la classe `active-wci` pour la page courante

**3. `includes/footer.php`**
- Pied de page avec copyright dynamique
- Liens vers les réseaux sociaux
- Élément Toast pour les notifications
- Charge le JavaScript global (`main.js`)
- Charge le JavaScript spécifique à chaque page (variable `$pageJS`)

### Variables PHP Utilisées

Chaque page définit les variables suivantes avant d'inclure les composants :

```php
$pageTitle = "Titre de la page";     // Titre dynamique dans <title>
$currentPage = "accueil";            // Page active pour la navigation
$pageCSS = "nom-du-fichier.css";    // CSS spécifique (optionnel)
$pageJS = "nom-du-fichier.js";      // JS spécifique (optionnel)
```

## 🚀 Fonctionnalités par Page

### 📍 `index.php` (Accueil)
- Hero section avec image de fond
- Message de bienvenue
- Section "Une Famille Vous Attend" avec photo du pasteur
- Bandeau horaires des cultes (Dimanche, Mercredi, Vendredi)
- **CSS:** `assets/css/accueil.css`

### 📖 `a-propos.php` (À propos)
- Navigation secondaire (breadcrumb)
- Section "Notre Histoire & Notre Vision"
- Chiffres clés (années de ministère, membres, etc.)
- Nos 6 valeurs fondamentales (Foi, Intégrité, Amour, Excellence, Service, Communauté)
- Call-to-action (CTA)
- **CSS:** `assets/css/a-propos.css`

### 👥 `Leadership.php` (Leadership)
- En-tête de page avec gradient
- Section Pasteur Principal avec photo et description
- Section Équipe Pastorale (3 cartes)
- **CSS:** `assets/css/Leadership.css`

### ⛪ `cultes.php` (Cultes)
- Horaires des cultes hebdomadaires
- Programme spéciaux (événements)
- Boutons d'action (Nous localiser, Soutenir l'église)
- **CSS:** `assets/css/cultes.css`

### 🎯 `ministere.php` (Ministères)
- Grille responsive des 10 ministères
- Cartes avec image, description et bouton
- Ministères: Childrens, Jeunesse, Choir, Ushers, Femmes, Hommes, Prière, Famille, Évangélisation, Média
- **CSS:** `assets/css/ministere.css`

### 📺 `media.php` (Médias)
- Section vidéos récentes (3 iframes YouTube)
- Lien vers la chaîne YouTube
- Messages audio avec lecteur (boutons play/télécharger)
- Verset du jour rotatif (JavaScript)
- **CSS:** `assets/css/media.css`
- **JS:** `assets/js/media.js`

### 📸 `galerie.php` (Galerie)
- Filtres par catégorie (Tous, Cultes, Événements, Ministères, Conventions)
- Grille de 12 images avec emojis
- Système de filtrage dynamique en JavaScript
- **CSS:** `assets/css/galerie.css`
- **JS:** `assets/js/galerie.js`

### 💝 `fait_don.php` (Faire un don)
- Section Mobile Money (Orange Money, MTN, Wave)
- Logos SVG inline pour chaque service
- Numéros avec fonctionnalité de copie (clipboard)
- Virement bancaire avec IBAN
- Toast de confirmation
- **CSS:** `assets/css/fait_don.css`
- **JS:** `assets/js/fait_don.js`

### 📞 `Contact.php` (Contact)
- Coordonnées complètes (Adresse, Téléphone, Email, Horaires)
- Formulaire de contact avec validation
- Carte interactive (placeholder)
- Liens vers réseaux sociaux
- **CSS:** `assets/css/Contact.css`
- **JS:** `assets/js/Contact.js`

## 🎨 Design System

### Couleurs (Variables CSS)
```css
--wci-red:    #9A1B1E;    /* Rouge principal */
--wci-dark:   #7a1518;    /* Rouge foncé */
--wci-light:  #c02428;    /* Rouge clair */
--wci-gold:   #c9a84c;    /* Doré */
--wci-gray:   #F5F5F5;    /* Gris clair */
--wci-text:   #1a1a1a;    /* Texte */
```

### Typographie
- **Titres:** Montserrat (400, 600, 700, 800, 900)
- **Corps:** Open Sans (300, 400, 600)

### Composants Réutilisables
- `.btn-red` - Bouton rouge principal
- `.btn-outline-red` - Bouton contour rouge
- `.section-title` - Titres de section
- `.divider-red` - Séparateur rouge
- `.fade-up` - Animation d'apparition
- `.page-header` - En-tête de page avec gradient

## 🔧 Installation et Utilisation

### Prérequis
- Serveur PHP (XAMPP, WAMP, MAMP ou serveur en ligne)
- PHP 7.4 ou supérieur
- Navigateur web moderne

### Installation
1. Copiez tous les fichiers dans votre dossier `htdocs` ou `www`
2. Démarrez votre serveur Apache/PHP
3. Accédez à `http://localhost/chapel/index.php`

### Personnalisation
- **Textes:** Modifiez le contenu dans chaque fichier `.php`
- **Images:** Remplacez les URLs dans les sections `background`
- **Couleurs:** Modifiez les variables CSS dans `assets/css/main.css`
- **Réseaux sociaux:** Mettez à jour les liens dans `includes/header.php` et `includes/footer.php`

## 📱 Responsive Design

Le site est entièrement responsive grâce à Bootstrap 5 :
- Mobile: < 768px
- Tablette: 768px - 991px
- Desktop: > 991px

## ✨ Animations

- **Fade-up:** Apparition progressive au scroll (Intersection Observer)
- **Hover effects:** Transformations et ombres sur les cartes
- **Transitions:** Fluidité sur les boutons et liens

## 🛠️ Bonnes Pratiques

1. **Ne jamais modifier** les fichiers dans `includes/` sauf pour des changements globaux
2. **Toujours tester** le responsive sur mobile et desktop
3. **Vérifier** que les animations fonctionnent sur tous les navigateurs
4. **Utiliser** les classes utilitaires Bootstrap quand c'est possible
5. **Garder** une cohérence visuelle entre toutes les pages

## 📝 Notes

- Les images utilisent des placeholders Unsplash et des gradients CSS
- Les emojis sont utilisés comme icônes temporaires
- Le formulaire de contact ne fait qu'une simulation (à connecter à un backend)
- La carte Google Maps est un placeholder (à intégrer avec une vraie API)

## 🎯 Prochaines Étapes

- [ ] Intégration Google Maps
- [ ] Backend pour le formulaire de contact
- [ ] Système de gestion des sermons (audio/vidéo)
- [ ] Authentification membre
- [ ] Blog/actualités
- [ ] Version multilingue

---

**Développé pour Winners' Chapel International Akouedo Goshen**
© 2024 - Tous droits réservés
