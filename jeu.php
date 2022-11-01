<?php 
//checkbox
$parfums =[
    'vanille' => 4,
    'chocolat' => 5,
    'fraise' => 3
];
//radio
$cornets = [
    'pot'=> 1,
    'cornet' => 2
];
//checkbox
$supplément = [
    'pepites de chocolat' => 0.5,
    'chantilly' =>1.5
];




require 'header.php';
require 'function.php'; 
$ingredients =[];
$total = 0;


if(isset($_GET['parfum'])){
    foreach($_GET['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
        }
    }
}

if (isset($_GET['cornet']))  {
    foreach($_GET['cornet'] as $cornet){ 
        if(isset($cornets[$cornet])) {
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        }
    }
}

?>

<div class="row" style="text-align: center";>
    <div class="col-md-8" style="text-align: center";>
        <h2>choisissez vos parfums</h2>

            <ul>
                    <?php foreach($ingredients as $ingredient):?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach ;?>

            </ul>

            <p>
                <strong>prix : <strong> <?=$total ?> $</strong></strong>
            </p>


<form action="/jeu.php" method ="GET" style="text-align: center";>
    <?php foreach($parfums as $parfum => $prix): ?>
            <div class="checkbox">
        <label>
            <?= checkbox('parfum', $parfum, $_GET )?>
            <?=$parfum?> - <?=$prix?> $
        </label>
            </div>
    <?php endforeach; ?>

        <?php foreach ($cornets as $cornet => $prix):?>
            <div class="radio">
                <label>
            <?= radio ('cornet', $cornet, $_GET )?>
            <?= $cornet ?> - <?= $prix ?> $ 
            <label>
            </div>  
         
         <?php endforeach; ?> 
         <button type="submit" class="btn btn-primary">choisir une glace</button>
</form>
  </div>


</div>




<h2>$_GET</h2>
    <pre>
        <?php var_dump ($_GET) ?>
    </pre>

<h2>$_post</h2>
    <pre>
        <?php var_dump($_POST)?>
    </pre>
