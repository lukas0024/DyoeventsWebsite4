<?php
// Datenbankverbindungsinformationen
$servername = "sql312.epizy.com";
$username = "epiz_31355529";
$password = "SNPTvMpdRl";
$dbname = "epiz_31355529_dyoevents_db";

// Erstellen einer Verbindung zur Datenbank
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
echo "Verbindung erfolgreich hergestellt";
?>
