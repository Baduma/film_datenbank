<?php 
require_once('../views/title.tpl.php');
?>


<div id="doc">
<p><h1> <strong>Dokumentation</strong></h1></p>
<p><h2>„Entwurf und Implementierung einer Filmdatenbank“(PHP5,OOP,PDO,HTML5,CSS,MVC)</p></h2><br>
<p>Es wurde ein webbasiertes Filmdatenbanksystem mit zwei getrennten Oberflächen
entwickelt. Zum Ersten das Frontend, es macht der Öffentlichkeit die Online-
Filmsuche möglich.<br> Als Zweites gibt es das Backend, dieses ist für einen
eingeschränkten Nutzerkreis(der Administrator) verfügbar.</p>
Der Administrator hat im Backend Einsicht auf die gesamte Filmliste. Das System
ermöglicht dem Administrator ohne MySQL-Befehle-Kenntnisse die Filmdatenbank
dynamisch zu verwalten.<br> Es wurde eine Login-Maske für den Admin geschaffen.
Darüber hinaus ist er in der Lage neue Filme einzufügen, bestimmte Änderung
bezüglich der Filme vorzunehmen und Filme zu löschen.<br><br><br>
<p>
******************************************************************************<br>
<b>Datenbankname:</b> filmdatenbank_baduma<br>
<b>Tabelle 1:</b> filme</br>
<b>Tabelle 2:</b> benutzer</b><br>
<b>Benutzername:</b> berlin<br>
<b>Passwort:</b> abc<br>
<b>Frontend Startseite:</b><br>
http://localhost/mvc_movie_frontend/views/views_home.tpl.php</b><br>
<b>Backend startseite:</b><br>
http://localhost/mvc_movie_backend/views/user_views.php<br>
******************************************************************************<br>
<br>
</p>
Das System wurde mit den Webtechnologien HTML5, CSS3, PHP5, OOP, MVC und
PDO realisiert.
Ausblick
Zur Optimierung des Systems, könnte man der Design der gesamgte Anwendung
verbessern.<br> Weiterhin könnte man das System erweitern bzw. könnte man Modell
View Controller der Applikation vervollständigen.
</div>

<?php
require_once('../views/footer.tpl.php');
?>