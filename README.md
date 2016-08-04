SC AufRuhr e.V. Site
=========================

### Die statische Vereinswebseite des SC AufRuhr e.V. generiert mit [Jekyll](https://jekyllrb.com/) 

  Link: [buckyball.github.io](https://buckyball.github.io/)

![screenshot](https://zoqbox.ath.cx/scar.jpg)

## How to start
 - git clone dieses Repo `git clone https://gog.zoq.de/brill0/scar.git`
 - wechsele in das Verzeichnis: `cd scar`
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
want to know more?
