# Intake toets
Intake toets voor UNIT4

Dit is de intake toets voor UNIT4 verzuimsignaal junior developers.

We hebben een klein programmatje geschreven waarmee een garage kan worden beheert. Je kan inloggen 
als een gebruiker, en dan klanten, autos en klussen beheren. Helaas is de code niet goed genoeg voor ons.
Het werkt wel, maar er zitten grote fouten en gebreken in. Het zal aan jou liggen om deze gebreken te verhelpen.

We hebben een aantal issues geopend voor grote zaken die opgelost moeten worden. Zorg dat je voldoet aan de acceptatie-criteria.

Daarnaast zitten er nog een aantal TODO's in de code zelf. Deze zijn er als extra credit.



# Installatie

Je kan, om dit project thuis te draaien gebruik maken van bijvoorbeeld WAMP (https://bitnami.com/stack/wamp). Je mag natuurlijk altijd zelf beslissen waarmee je host.

Dit project maakt gebruik van composer (https://getcomposer.org/), NPM (https://www.npmjs.com/) om bepaalde packages op te halen.

De volgende dingen worden hiermee geinstalleerd:
PHPUnit, een unit-testing platform (https://phpunit.de/)
Bootstrap, een frontend framework(https://getbootstrap.com/)
JQuery, een JS framework (https://jquery.com/)


# Database

Je zal een MySQL database moeten starten. In de root van het project staat intake.sql, dit kun je in een MySQL database inladen. IN WAMP zit een MySQL server ingebouwd bijvoorbeeld.

In services/Database.sql staat op regel 15 een PDO database connection call. Pas deconnectiestring aan waar nodig en vul je eigen username en password in.
