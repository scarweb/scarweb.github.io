SC AufRuhr e.V. Site
=========================

### Die statische Vereinswebseite des SC AufRuhr e.V. generiert mit [Jekyll](https://jekyllrb.com/) 

  Link: [scarweb.github.io](https://scarweb.github.io/)



## How to start
  
  Man kann die Texte online bei github oder lokal auf dem eigenen Rechner bearbeiten, meist ist die online BEarbeitung bei Github selber einfacher.
  Dennoch hier eine kurze Zusammenfassung wie man das alles lokal und offline bearbeiten kann:

### Zur lokalen Bearbeitung alles herunterladen
  
  Zunächst sollte am besten jekyll installiert sein, ist aber keine Pflicht. Bei Interesse: [install Jekyll](https://jekyllrb.com/docs/installation/)
 
 - git clone dieses Repo `git clone https://github.com/scarweb/scarweb.github.io.git`
 - wechsele in das Verzeichnis: `cd scarweb.github.io`
 - `jekyll serve` startet den lokalen Webserver, meist http://127.0.0.1:4000/
 - sollte so in etwa aussehen:

```txt
/Users/xx/code/jekyll-scaufruhr>jekyll serve
Configuration file: /Users/xx/code/jekyll-scaufruhr/_config.yml
            Source: /Users/xx/code/jekyll-scaufruhr
       Destination: /Users/xx/code/jekyll-scaufruhr/_site
 Incremental build: disabled. Enable with --incremental
      Generating...
 Auto-regeneration: enabled for '/Users/xx/code/jekyll-scaufruhr'
Configuration file: /Users/xx/code/jekyll-scaufruhr/_config.yml
    Server address: http://127.0.0.1:4000/
  Server running... press ctrl-c to stop.
```
### Bearbeiten mit einem Editor

 - Im Verzeichnis im Terminal `code .` eingeben um den Editor zu öffnen.

### Deine Änderungen wieder hochladen und aktivieren

 - Im Projektverzeichnis `git commit -a -m "beschreibung der Änderungen"` ausführen, dann:
 - `git push` ausführen um alles wieder auf github zuschieben. Nachdem alles oben ist aktiviert Github alle Änderungen automatisch

## Wo ist das ganze Zeug?

Die Daten sind in folgenden Dateien/Ordnern verteilt:

 - Die Texte der Sportarten sind in `_posts`
   - einfach eine neue Datei anlegen und folgendermaßen benennen: `YYYY-MM-DD-SPORTARTNAME-LFDNR.markdown`
 - Die Bilder und andere Medien sind in `img`
 - Copyright & Startseitentexte sind in der Datei `_config.yml`
 - Sponsoren und Turnier Daten sind in `_data/sponsoren.yml` und `_data/tourniere.yml`

Damit man sehen kann ob man den Text auch richtig formatiert hat kann man eine Markdown extension in deinen Editor der Wahl installieren, ich empfehle
[Microsoft Visual Code](https://code.visualstudio.com/) mit folgenden [Markdown Erweiterungen](https://code.visualstudio.com/Docs/languages/markdown)


=========
brill0
