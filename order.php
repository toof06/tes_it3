<?php


require 'layout.php';

$db = new DB('it3');


    $orders = $db->query("
                        SELECT * FROM `order`
                                LEFT JOIN restaurant
                                ON restaurant.id = `order`.restaurant_id
                                LEFT JOIN type_eat
                                ON restaurant.type_eat_id = type_eat.id_eat;
                        ")->fetchAll();


?>
<h1> Orders  informations </h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Order ID </th>
            <th scope="col">Restaurant name</th>
            <th scope="col">adress</th>
            <th scope="col">Order Name </th>
            <th scope="col">type of eat </th>
            <th scope="col"> preis </th>
            <th scope="col"> created at </th>

        </tr>
        </thead>
        <tbody>

        <?php foreach ($orders as $order) : ?>
            <tr>

                <th scope="row"><?= $order['id'] ?>  </th>
                <td> <?= $order['name'] ?> </td>
                <td> <?= $order['adress'] ?> </td>
                <td> <?= $order['order_name'] ?> </td>
                <td> <?= $order['name_eat'] ?> </td>
                <td> <?=  number_format($order['price'],2). '€'?> </td>
                <td> <?= $order['created_at'] ?> </td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>






