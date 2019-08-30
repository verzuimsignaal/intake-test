<?php

//TODO: Authentication

$type = $_GET['type'];

?>
<form action="opslaan.php" method="POST">
    <?php
    switch ($type){
    case 'klant':
        ?>

        <h3>Persoon</h3>
        <table>
            <tr>
                <td>Voornaam:</td>
                <td><input name="first_name"></td>
            </tr>
            <tr>
                <td>Achternaam:</td>
                <td><input name="last_name"></td>
            </tr>
            <tr>
                <td>Leeftijd:</td>
                <td><input name="leeftijd"></td>
            </tr>
        </table>
        <h3> Auto</h3>
        <table>
            <tr>
                <td>Merk:</td>
                <td><input name="brand"></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input name="type"></td>
            </tr>
        </table>

        <?php break;
    case 'task':
    require('services/Database.php');
    $db = new Database;

    $cars = $db->getAllRows('SELECT cars.*, customers.first_name, customers.last_name from cars JOIN customers on customers.id = cars.customer_id;')

    ?>
    <form action="opslaan.php">

        <h3> Auto</h3>
        <select name="car">
            <?php foreach ($cars

            as $car): ?>
            <option value="<?= $car['id'] ?>"><?= $car['first_name'] . ' ' . $car['last_name'] . '\'s ' . $car['brand'] . ' ' . $car['type'] ?>

                <?php endforeach; ?>

        </select>
        <table>
            <tr>
                <td>Klus:</td>
                <td><input name="task"></td>
            </tr>
        </table>
        <?php
        } ?>

        <input type="hidden" name="save_type" value="<?= $_GET['type'] ?>">
        <input type="submit" value="Invoeren"/>
    </form>
