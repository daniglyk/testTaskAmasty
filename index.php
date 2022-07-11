<!DOCTYPE html>
<html>
<header>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</header>

<head>
    <title>Order pizza</title>

<body>
    <div class="row m-5">

        <form method="POST" id="form-order">
            <div class="col-6">
                <label>Выберите пиццу</label>
                <select name="pizaselect" required class="form-select-sm mb-3 col-12">

                    <?php
                    $pizzes = [12 => 'Пепперони', 17 => 'Деревенская', 22 => 'Гавайская', 25 => 'Грибная'];
                    //loop
                    foreach ($pizzes as $key => $pizza) {
                    ?>
                        <option value="<?php echo $key; ?>"><?php echo $pizza ?> - <?php echo $key ?> б.р.</option>
                    <?php
                    }
                    ?>

                </select>
            </div>
            <div class="col-6">
                <label>Выберите размер</label>
                <select name="sizeselect" required class="form-select-sm mb-3 col-12">

                    <?php
                    $sizes = [0 => '25', 3 => '30', 5 => '35', 7 => '40'];
                    //loop
                    foreach ($sizes as $key => $size) {
                    ?>
                        <option value="<?php echo $size; ?>"><?php echo $size ?> см + <?php echo $key ?> б.р. к стоимости заказа</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-6">
                <select name="souseselect" class="form-select-sm mb-3 col-4">
                    <option value="no">Выберите соус</option>
                    <?php
                    $souses = ['Сырный', 'Кисло-сладкий', 'Чесночный', 'Барбекю'];
                    //loop
                    foreach ($souses as $key => $souse) {
                    ?>
                        <option value="<?php echo $souse; ?>"><?php echo $souse ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-6 ">
                <button id='btn' class="btn btn-success" name="button">Заказать</button>
            </div>
            <div class="col-6">
                <div id="result" class="mt-3"></div>
            </div>

        </form>
    </div>