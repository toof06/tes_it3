<?php


include 'layout.php';

if (!empty($_POST) ){
    // Only process if form is submitted (when page is launched, it use GET method)
    require 'db.php';

    $db = new DB('it3');

    $stmt = $db->prepare("INSERT INTO restaurant (name, adress,tel_number, type_eat, price) VALUES (:name, :adress,:tel_number, :type_eat, :price)");

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':adress', $_POST['adress']);
    $stmt->bindParam(':tel_number', $_POST['tel_number']);
    $stmt->bindParam(':type_eat', $_POST['type_eat']);
    $stmt->bindParam(':price', $_POST['price']);

    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $tel_number = $_POST['tel_number'];
    $type_eat = $_POST['type_eat'];
    $price = $_POST['price'];

    $stmt->execute();

    // Redirect to index.php
    header('Location: /index.php');

}

?>

    <div class="row">
        <div class="container">
            <form action="add.php" method="post">
                <div class="form-group">
                    <label >Name </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name of restaurant ">
                </div>
                <div class="form-group">
                    <label> adress  </label>
                    <input type="text" name="adress" class="form-control"  placeholder="Enter adress ">
                </div>

                <div class="form-group">
                    <label >telephone number  </label>
                    <input type="number" name="tel_number" class="form-control"  placeholder="Enter telephone number  ">
                </div>
                <div class="form-group">
                    <label >price  </label>
                    <input type="number" name="price" class="form-control"  placeholder="Enter the price  ">
                </div>
                <div class="form-group">
                    <label> Type of eat </label>
                    <select name="type_eat" class="form-control" >
                        <option>doener</option>
                        <option>Burger </option>
                        <option>Asiatisch</option>
                        <option>Pizza</option>
                        <option>Pasta</option>
                    </select>
                </div> <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>







