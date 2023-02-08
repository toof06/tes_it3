<?php

require 'db.php';
include 'layout.php';

    $db = new DB('it3');
    $data = $db->query("SELECT * FROM  restaurant ")->fetchAll();

?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">adress</th>
            <th scope="col">tel number</th>
            <th scope="col">type of eat </th>
            <th scope="col"> preis </th>

        </tr>
        </thead>
        <tbody>
        <?php
          foreach ($data as $row) {
        ?>
            <tr>
                <th scope="row"><?= $row['id'] ?>  </th>
                <td> <?= $row['name'] ?> </td>
                <td> <?= $row['adress'] ?> </td>
                <td>
                    <a href="tel:"<?= $row['tel_number'] ?>> <?= $row['tel_number'] ?> </a>
                </td>
                <td> <?= $row['type_eat'] ?> </td>
                <td> <?=  number_format($row['price'],2). '€'?> </td>
            </tr>

        <?php
        }
        ?>
        </tbody>
    </table>




