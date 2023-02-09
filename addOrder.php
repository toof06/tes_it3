<?php


require 'layout.php';

$db = new DB('it3');





if (!empty($_POST) && isset($_POST)){

    $stmt = $db->prepare("INSERT INTO `order` (restaurant_id, order_name,price) VALUES (:restaurant_id, :order_name,:price)");
    $stmt->bindParam(':restaurant_id', $_POST['restaurant_id']);
    $stmt->bindParam(':order_name', $_POST['order_name']);
    $stmt->bindParam(':price', $_POST['price']);

    $stmt->execute();

    // Redirect to index.php
    header('Location: /order.php');

}else {
    $resto_id= (int)$_GET['id'];
    $restaurant = $db->query("
                        SELECT * FROM restaurant
                                LEFT JOIN type_eat
                                ON restaurant.type_eat_id = type_eat.id_eat
                                WHERE restaurant.id = $resto_id;
                        ")->fetch();
}

?>
<h1> Orders  informations </h1>

<div class="row">
    <div class="container">
        <form action="addOrder.php" method="post">
            <div class="form-group">
                <label >Name </label>
                <input  type="text" class="form-control" value="<?=$restaurant['name']?>" disabled>
                <input  type="hidden" name="restaurant_id" class="form-control" value="<?=$restaurant['id']?>" >
            </div>

            <div class="form-group">
                <label > Order name </label>
                <input type="text" name="order_name" class="form-control" placeholder=" add name of this order ">
            </div>

            <div class="form-group">
                <label> price </label>
                <input type="number" name="price" class="form-control" >
            </div> <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>








