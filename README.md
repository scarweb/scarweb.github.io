SC AufRuhr e.V. Site
=========================

### Die statische Vereinswebseite des SC AufRuhr e.V. generiert mit [Jekyll](https://jekyllrb.com/) 

  Link: [scarweb.github.io](https://scarweb.github.io/)



## How to start
  
  Man kann die Texte online bei github oder lokal auf dem eigenen Rechner bearbeiten, meist ist die online Bearbeitung bei Github selber einfacher.
  
  Dennoch hier eine kurze Zusammenfassung:
  
### Wo ist das ganze Zeug?

Die Daten sind in folgenden Dateien/Ordnern verteilt:

 - Die Texte der Sportarten sind in `_posts`
   - einfach eine neue Datei anlegen und folgendermaßen benennen: `YYYY-MM-DD-SPORTARTNAME-LFDNR.markdown`
 - Die Bilder und andere Medien sind in `img`
 - Copyright & Startseitentexte sind in der Datei `_config.yml`
 - Sponsoren und Turnier Daten sind in `_data/sponsoren.yml` und `_data/tourniere.yml`

Damit man sehen kann ob man den Text auch richtig formatiert hat kann man eine Markdown extension in deinen Editor der Wahl installieren, ich empfehle
[Microsoft Visual Code](https://code.visualstudio.com/) mit folgenden [Markdown  Erweiterungen](https://code.visualstudio.com/Docs/languages/markdown)

### Zur lokalen Bearbeitung alles herunterladen
  
 - clone dieses Repo mit git, im Terminal so z.B.: `git clone https://github.com/scarweb/scarweb.github.io.git`
 - alternativ geht das auch ganz ohne Terminal mit dem [Github Desktop Client](https://desktop.github.com/)
 
Wichtig ist das es mit der Versionsverwaltung git lokal heruntergeladen wird damit man seine Änderungen auch leicht wieder hochladen kann.

### Bearbeiten mit einem Editor

 - Einfach den Ordner mit einem [Editor](https://code.visualstudio.com/) öffnen.
 
![screenshot](http://www.sc-aufruhr.de/img/vscode-scar.png)

### Deine Änderungen wieder hochladen und aktivieren

#### Terminal
 - Im Projektverzeichnis `git commit -a -m "beschreibung der Änderungen"` ausführen, dann:
 - `git push` ausführen um alles wieder auf github zuschieben. Nachdem alles oben ist aktiviert Github alle Änderungen automatisch

#### Git Desktop Client

 - Der Client fragt bei Änderungen automatisch nach.
 

=========

