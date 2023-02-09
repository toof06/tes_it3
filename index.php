<?php


require 'layout.php';

    $db = new DB('it3');
    $types_eat = $db->query("SELECT * FROM type_eat  ")->fetchAll();

?>



<div class="container">
    <div class="row">
        <h2> Wählen Sie bitte Ihre Wünschemenue  </h2>
        <hr>
        
        <form action="restaurant.php" method="post">
            <?php foreach ($types_eat as $type_eat) : ?>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check_list[]" value="<?= $type_eat['id_eat'] ?>" id="flexCheckDefault<?= $type_eat['id_eat'] ?>">

                        <label class="form-check-label" for="flexCheckDefault<?= $type_eat['id_eat'] ?>">
                            <img src="<?= $type_eat['image_url']?>" alt="<?= $type_eat['name_eat']?>" width="25" height="25">

                            <?= $type_eat['name_eat'] ?>
                        </label>


                    </div>

                
            <?php endforeach ?>

            <br>
            <button class="btn btn-primary" type="submit"> Senden </button>
        </form>
    </div>
</div>





