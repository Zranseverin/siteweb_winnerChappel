#!/bin/bash
# ========================================
#  Winners Chapel Site - Startup Script
# ========================================

echo ""
echo "======================================"
echo "  Winners' Chapel International"
echo "  Site Web - Démarrage"
echo "======================================"
echo ""

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "[ERREUR] PHP n'est pas installé ou n'est pas dans le PATH !"
    echo ""
    echo "Veuillez installer PHP ou utiliser :"
    echo "  - MAMP (Mac): https://www.mamp.info/"
    echo "  - XAMPP: https://www.apachefriends.org/"
    echo ""
    exit 1
fi

echo "[OK] PHP détecté :"
php -v | head -n 1
echo ""

# Navigate to script directory
cd "$(dirname "$0")"

# Start PHP built-in server
echo "Démarrage du serveur de développement PHP..."
echo "Port: 8000"
echo "URL: http://localhost:8000"
echo ""
echo "Appuyez sur Ctrl+C pour arrêter le serveur"
echo ""

php -S localhost:8000
