<?php


require 'layout.php';
$db = new DB('it3');
$types_eat = $db->query("SELECT * FROM type_eat  ")->fetchAll();

if (!empty($_POST) && isset($_POST)){

    $stmt = $db->prepare("INSERT INTO restaurant (name, adress,tel_number, type_eat_id) VALUES (:name, :adress,:tel_number, :type_eat_id)");
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':adress', $_POST['adress']);
    $stmt->bindParam(':tel_number', $_POST['tel_number']);
    $stmt->bindParam(':type_eat_id', $_POST['type_eat_id']);

    $stmt->execute();

    // Redirect to index.php
    header('Location: /restaurant.php');

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
                    <label> Type of eat </label>
                    <select name="type_eat_id" class="form-control" >
                        <?php foreach ($types_eat as $type_eat) : ?>
                            <option value="<?=$type_eat['id_eat']?>"> <?= $type_eat['name_eat'] ?> </option>
                        <?php endforeach ?>
                    </select>
                </div> <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>







