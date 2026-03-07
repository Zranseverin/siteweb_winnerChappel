@echo off
REM ========================================
REM  Winners Chapel Site - Startup Script
REM ========================================

echo.
echo ======================================
echo   Winners' Chapel International
echo   Site Web - Demarrage
echo ======================================
echo.

REM Check if PHP is installed
where php >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo [ERREUR] PHP n'est pas installe ou n'est pas dans le PATH !
    echo.
    echo Veuillez installer XAMPP, WAMP, ou MAMP :
    echo - XAMPP: https://www.apachefriends.org/
    echo - WAMP: https://www.wampserver.com/
    echo - MAMP: https://www.mamp.info/
    echo.
    pause
    exit /b 1
)

echo [OK] PHP detecte : 
php -v | findstr /R "^PHP"
echo.

REM Start PHP built-in server
echo Demarrage du serveur de developpement PHP...
echo Port: 8000
echo URL: http://localhost:8000
echo.
echo Appuyez sur Ctrl+C pour arreter le serveur
echo.

cd /d "%~dp0"
php -S localhost:8000

pause
