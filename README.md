# OberfeldAgenda

Einfaches Frontend zur Reservation von Räumen und Erfassung von Terminen

## Entwicklung

`npm run serve` -> <http://localhost:8000>

Keine lokale Datenbank, alle Daten sind direkt auf dem CalDav-Server gespeichert.

## Funktionen

- [ ] Alle verfügbaren Kalender auflisten
- [ ] Kalender inkl. Infotext und ICS-Link anzeigen. Kalender wird direkt in einem iFrame von Nextcloud eingebunden
- [ ] Knopf zum Erstellen eines neuen Termins
- [ ] Termin-Formular mit Startzeit, Endzeit, Titel, Name, Email, Telefon, Speichern
- [ ] Bestätigungsmail an die Person und Kopie an die Verantwortliche Person
- [ ] Im Mail: Direkter Link zurück zum Editieren des Termins, im Anhang der Termin als iCal-Event
- [ ] Editierfenster zum Ändern oder Löschen des Termins (Sofern der Termin in der Zukunft liegt)
- [ ] Jeweils Bestätigungsmail an die Person und Kopie an die Verantwortliche Person
- [ ] Audit-Log schreiben bei allen Änderungen

## Credits

Icon `if_schedule_3755` by Everaldo Coelho. (LGPL licensed.)
