<?php
/**
 * Agenda configuration for DEVELOPMENT
 * 
 * @author Christian Studer <cstuder@existenz.ch>
 */
$config['nextcloud_user'] = 'AgendaTestUser';
$config['nextcloud_pass'] = 'AgendaTest2017';

$config['calendars'] = [
    [
      'id' => 'test_Gemeinschaftsraum', // Technische ID in der Nextcloud-URL
      'key' => 'YCbLWMaKzs5HFELq', // Kombination aus der Nextcloud-URL
      'name' => 'Gemeinschaftsraum', // Darstellungsname im Frontend
      'image' => 'IMG_4189.jpg',
      'infos' => NULL, // Optionaler Infotext zu diesem Kalender in externer Datei.
      'buttonlabel' => NULL, // Optional, Kosmetisch: Den Text auf dem 'Reservieren'-Knopf ändern.
      'notificationrecipient' => 'cstuder@existenz.ch', // Optional: Diese Email-Adresse wird über Reservationen informiert.
    ],
    [
      'id' => 'test_Skylounge', // Technische ID in der Nextcloud-URL
      'key' => 'w2Q78DHkSqxgC8o4', // Kombination aus der Nextcloud-URL
      'name' => 'Skylounge', // Darstellungsname im Frontend
      'image' => 'P1030970.jpg',
      'infos' => NULL, // Optionaler Infotext zu diesem Kalender in externer Datei.
      'buttonlabel' => NULL, // Optional, Kosmetisch: Den Text auf dem 'Reservieren'-Knopf ändern.
      'notificationrecipient' => 'cstuder@existenz.ch', // Optional: Diese Email-Adresse wird über Reservationen informiert.
    ],
    [
      'id' => 'test_Sauna', // Technische ID in der Nextcloud-URL
      'key' => 'x4tngmrYgfaB4BQz', // Kombination aus der Nextcloud-URL
      'name' => 'Sauna', // Darstellungsname im Frontend
      'image' => 'IMG_4442.jpg',
      'infos' => 'sauna-infos', // Optionaler Infotext zu diesem Kalender in externer Datei.
      'buttonlabel' => 'Buchen', // Optional, Kosmetisch: Den Text auf dem 'Reservieren'-Knopf ändern.
      'notificationrecipient' => 'cstuder@existenz.ch', // Optional: Diese Email-Adresse wird über Reservationen informiert.
    ],
    [
      'id' => 'test_Oberfeld', // Technische ID in der Nextcloud-URL
      'key' => 'Rop4ecgYGRGZYkzT', // Kombination aus der Nextcloud-URL
      'name' => 'Im und ums Oberfeld', // Darstellungsname im Frontend
      'image' => 'IMG_3016.jpg',
      'infos' => NULL, // Optionaler Infotext zu diesem Kalender in externer Datei.
      'buttonlabel' => 'Termin eintragen', // Optional, Kosmetisch: Den Text auf dem 'Reservieren'-Knopf ändern.
      'notificationrecipient' => NULL, // Optional: Diese Email-Adresse wird über Reservationen informiert.
    ],
];