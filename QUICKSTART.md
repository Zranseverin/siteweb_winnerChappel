# 🚀 Guide de Démarrage Rapide

## Windows

### Option 1 : Script Automatique (Recommandé)
1. **Double-cliquez** sur `start.bat`
2. Le serveur démarre automatiquement
3. Ouvrez votre navigateur sur **http://localhost:8000**

### Option 2 : Manuel avec XAMPP/WAMP
1. Installez XAMPP ou WAMP
2. Copiez le dossier `chapel` dans :
   - XAMPP: `C:\xampp\htdocs\`
   - WAMP: `C:\wamp64\www\`
3. Démarrez Apache depuis le panneau de contrôle
4. Ouvrez **http://localhost/chapel/index.php**

### Option 3 : PHP en Ligne de Commande
```bash
cd C:\Users\CPOSEMAN-LAP\Desktop\chapel
php -S localhost:8000
```

---

## macOS / Linux

### Option 1 : Script Automatique
```bash
chmod +x start.sh
./start.sh
```

### Option 2 : MAMP (Mac)
1. Installez MAMP
2. Copiez le dossier dans `/Applications/MAMP/htdocs/`
3. Démarrez MAMP
4. Ouvrez **http://localhost:8888/chapel/**

### Option 3 : PHP CLI
```bash
cd /path/to/chapel
php -S localhost:8000
```

---

## ✅ Vérification

Après le démarrage, vous devriez voir :
- Page d'accueil avec bannière rouge
- Menu de navigation fonctionnel
- 9 pages accessibles via le menu

---

## 📱 Pages Disponibles

| Page | URL | Description |
|------|-----|-------------|
| Accueil | http://localhost:8000/index.php | Page principale |
| À propos | http://localhost:8000/a-propos.php | Histoire & Vision |
| Leadership | http://localhost:8000/Leadership.php | Équipe pastorale |
| Cultes | http://localhost:8000/cultes.php | Horaires & Programmes |
| Ministères | http://localhost:8000/ministere.php | Les 10 ministères |
| Médias | http://localhost:8000/media.php | Vidéos & Audio |
| Galerie | http://localhost:8000/galerie.php | Photos |
| Faire un don | http://localhost:8000/fait_don.php | Dons en ligne |
| Contact | http://localhost:8000/Contact.php | Formulaire |

---

## 🛠️ Dépannage

### Le port 8000 est déjà utilisé
Modifiez le numéro de port dans `start.bat` ou `start.sh` :
```bash
php -S localhost:8080
```

### PHP n'est pas trouvé
- **Windows:** Ajoutez PHP au PATH ou installez XAMPP
- **Mac:** `brew install php`
- **Linux:** `sudo apt-get install php`

### Erreur de permission (Mac/Linux)
```bash
chmod +x start.sh
./start.sh
```

---

## 🎯 Prochaines Étapes

1. ✅ Démarrer le serveur
2. ✅ Tester toutes les pages
3. 📝 Personnaliser le contenu (textes, images)
4. 🎨 Ajuster les couleurs si besoin
5. 📧 Configurer le formulaire de contact
6. 🗺️ Intégrer Google Maps

---

**Besoin d'aide ?** Consultez le `README.md` pour plus de détails.
