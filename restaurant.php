<?php


require 'layout.php';

$db = new DB('it3');
if(!empty($_POST['check_list'])) {

    $str = implode (", ", $_POST['check_list']);


    $data = $db->query("
                        SELECT * FROM restaurant 
                                LEFT JOIN type_eat 
                                ON restaurant.type_eat_id = type_eat.id_eat
                                WHERE type_eat_id IN ({$str});
                        ;")->fetchAll();

}else {
    $data = $db->query("
                        SELECT * FROM restaurant 
                                LEFT JOIN type_eat 
                                ON restaurant.type_eat_id = type_eat.id_eat;
                        ")->fetchAll();
}


?>
<?php if(!empty($data)) : ?>
<h1> Restaurant informations </h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">adress</th>
        <th scope="col">tel number</th>
        <th scope="col">type of eat </th>

    </tr>
    </thead>
    <tbody>

        <?php foreach ($data as $row) : ?>
            <tr>

                    <th scope="row"><?= $row['id'] ?>  </th>
                    <td> <?= $row['name'] ?> </td>
                    <td> <?= $row['adress'] ?> </td>
                    <td>
                        <a href="tel: <?= $row['tel_number'] ?>" class="Blondie">
                            <?= $row['tel_number'] ?>
                        </a>

                    </td>
                    <td> <?= $row['name_eat'] ?> </td>
                    <td>
                        <a href="addOrder.php?id=<?= $row['id']?>" >
                            <button type="button">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </a>



                    </td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php else : ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="alert alert-danger" role="alert">
                no, we don't have this type of eat now, please add restaurant
            </div>
        </div>
        <div class="col-lg-2">

                <a href="add.php">
                    <button class="btn btn-primary">Add resto    </button>
                </a>

        </div>
    </div>
</div>





<?php endif ?>






