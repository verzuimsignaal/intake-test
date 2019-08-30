<?php
require('services/Database.php');
$db = new Database;
$type = $_POST['save_type'];

switch ($type) {
    case 'klant':
        $db->execQuery("INSERT INTO `customers`(`first_name`, `last_name`, `age`) VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', " . $_POST['leeftijd'] . ")");

        $maxId = (int)$db->getAllRows('SELECT max(ID) as id From customers')[0]['id'];

        $db->execQuery("INSERT INTO `cars`(`customer_id`, `brand`, `type`)  VALUES (" . $maxId . ", '" . $_POST['brand'] . "', '" . $_POST['type'] . "')");

        break;

    case 'task':

        try {
            $db->execQuery(" INSERT INTO `tasks`(`car_id`, `task`, `status`) VALUES (" . (int)$_POST['car'] . ", '" . $_POST['task'] . "', 0)");

        } catch (Exception $e) {
            echo $e->getMessage();
        }

        break;
}
header('Location: overview.php');
