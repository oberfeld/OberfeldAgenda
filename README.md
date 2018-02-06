# OberfeldAgenda

Einfaches Frontend zur Reservation von Räumen und Erfassung von Terminen

## Funktionen

- [x] Alle verfügbaren Kalender auflisten
- [x] Kalender inkl. Infotext und ICS-Link anzeigen. Kalender wird direkt in einem iFrame von Nextcloud eingebunden
- [x] Knopf zum Erstellen eines neuen Termins
- [ ] Termin-Formular mit Startzeit, Endzeit, Titel, Name, Email, Telefon, Speichern
- [ ] Bestätigungsmail an die Person und Kopie an die Verantwortliche Person
- [ ] Im Mail: Direkter Link zurück zum Editieren des Termins, im Anhang der Termin als iCal-Event
- [ ] Editierfenster zum Ändern oder Löschen des Termins (Sofern der Termin in der Zukunft liegt)
- [ ] Jeweils Bestätigungsmail an die Person und Kopie an die Verantwortliche Person
- [ ] Audit-Log schreiben bei allen Änderungen

### Optionale Features

- [ ] Bei der Buchung eines Termines rechts alle Termine am gleichen Tag anzeigen (Per API nachladen wenn das `fromdate` feststeht)
- [ ] Tägliches Backup aller Kalender
- [ ] Serienreservationen

## Entwicklung

`npm run serve` -> <http://localhost:8000>

- Keine lokale Datenbank, alle Daten sind direkt auf dem CalDav-Server gespeichert.
- Konfiguration unter `www/application/config/ENVIRONMENT/agenda.php`.

### Deployment

Noch nicht eingerichtet.

## Administration

### Neuen Kalender einrichten

- Passendes Foto machen und als 1024 px breites Bild im Ordner `www/images` ablegen.
- Als `IT Oberfeld` in der Nextcloud einloggen.
- Auf <https://nextcloud.oberfeld.be/index.php/apps/calendar/> einen neuen Kalender erstellen, Name, Farbe festlegen.
- Kalender teilen mit Benutzer `agendaUser` (Production) oder `agendaTestUser` (Development).
- Jeweils Häcklein bei `kann bearbeiten` und `Link teilen` setzen.
- Sich die öffentliche URL merken, benötigt werden zwei Teile: Der Key (z.B. `/P7QW...3A3/`) und die ID  (z.B. `Sauna-Reservation`)
- In `www/application/config/ENVIRONMENT/agenda.php` ergänzen:

```php
$config['calendars'] = [
  [
    'id' => 'Sauna-Reservation', // Technische ID in der Nextcloud-URL
    'key' => 'P7QW...3A3', // Kombination aus der Nextcloud-URL
    'name' => 'Sauna Reservation', // Darstellungsname im Frontend
    'image' => 'IMG_3016.jpg',
    'infos' => NULL bzw. 'sauna-infos', // Dateinamen des optionalen Infotextes zu diesem Kalender
    'buttonlabel' => 'Reservieren', // Optional, kosmetisch: Den Text auf dem 'Reservieren'-Knopf ändern.
    'notificationrecipient' => 'xxx@example.org', // Optional: Diese Email-Adresse wird über Reservationen und Änderungen informiert.
  ],
  ...
];
```

- Optional HTML-Snippet mit Kalenderinfos unter `www/application/views/calendar-infos/` als PHP-Datei ablegen (I.e. `sauna-infos.php`).

## Credits

- Icon `if_schedule_3755` von Everaldo Coelho (LGPL)
- [Code Igniter 3](https://codeigniter.com) (MIT)
- [Material Design Lite](https://getmdl.io/) (Apache 2.0)
- [mdl-selectfield](https://github.com/mebibou/mdl-selectfield) (MIT)
- [Sabre VObject](http://sabre.io/vobject/) (BSD-3-Clause)
- [simpleCalDAV](https://github.com/thecsea/simpleCalDAV) (GPL 2.0)
- [jQuery](http://jquery.com/) (MIT)
- [Moment.js](http://momentjs.com) (MIT)