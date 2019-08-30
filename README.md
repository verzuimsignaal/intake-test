# Intake toets

Intake toets voor UNIT4

Dit is de intake toets voor UNIT4 verzuimsignaal junior developers.

We hebben een klein programmatje geschreven waarmee een garage kan worden beheert. Je kan inloggen 
als een gebruiker, en dan klanten, autos en klussen beheren. Helaas is de code niet goed genoeg voor ons.
Het werkt wel, maar er zitten grote fouten en gebreken in. Het zal aan jou liggen om deze gebreken te verhelpen.


# Wat te doen

Maak een fork van het project naar je eigen GitHub account. Hier kan je je ontwikkelingen naar toe pushen. Zorg dat je commit messages goed beschrijven wat ze precies oplossen.

We hebben een aantal issues geopend in deze Repo voor grote zaken die opgelost moeten worden. Kijk naar de acceptatie criteria wat er precies gedaan moet worden, en zorg dat je je ontwikkeling goed test.

Daarnaast zitten er nog een aantal TODO's in de code zelf. Deze zijn niet verplicht, maar je kan deze oplossen naar eigen inzicht als je tijd over hebt.

Wat we vooral willen weten is WAAROM je bepaalde keuzes maakt. Zorg er daarom ook voor dat je je code goed commentarieerd. En bereid bent om er vragen over uit te leggen.


# Installatie

Je kan, om dit project thuis te draaien gebruik maken van bijvoorbeeld WAMP (https://bitnami.com/stack/wamp). Je mag natuurlijk altijd zelf beslissen waarmee je host/ontwikkeld.

Dit project maakt gebruik van composer (https://getcomposer.org/), NPM (https://www.npmjs.com/) om bepaalde packages op te halen.

De volgende dingen worden hiermee geinstalleerd:
PHPUnit, een unit-testing platform (https://phpunit.de/)
Bootstrap, een frontend framework(https://getbootstrap.com/)
JQuery, een JS framework (https://jquery.com/)


# Database

Je zal een MySQL database moeten starten. In de root van het project staat intake.sql, dit kun je in een MySQL database inladen. IN WAMP zit een MySQL server ingebouwd bijvoorbeeld.

In services/Database.sql staat op regel 15 een PDO database connection call. Pas deconnectiestring aan waar nodig en vul je eigen username en password in.
