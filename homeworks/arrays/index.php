<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/header.php";
?>

<!--1 задание-->
<section class="main__task">
    <h2> 1 задание </h2>

    <?php


    $n = 15;

    $myArray = array();

    for($i = 0; $i < $n; $i++) {
        $myArray[$i] = rand();
    }

    foreach($myArray as $key => $value) {
        if ($key % 2 == 0) {
            echo '<strong>' . $key . '. '.  $value . '</strong><br>';
        } else {
            echo $key. '. '.  $value . '<br>';
        }

    }

    ?>

</section>






<!--2 задание-->
<section class="main__task">
    <h2> 2 задание</h2>

    <?
    $secondTaskArray = [
        'РФ' => [
            'Абакан',
            'Волгоград',
            'Магнитогорск'
        ],
        'ОАЭ' => [
            'Дубаи'
        ],
        'Европа' => [
            'Монако',
            'Берлин',
            'Амстердам'
        ],
    ];

    echo '<pre>';
    print_r($secondTaskArray);
    echo '</pre>';
    echo '<hr>';


    foreach ($secondTaskArray as $value) {
        foreach ($value as $city) {
            if (mb_substr($city, 0, 1) == 'А') {
                echo $city . '<br>';
            }
        }
    }



    ?>



</section>







<!--3 задание-->
<section class="main__task">
    <h2> 3 задание</h2>
    <?
    $thirdTaskArray = [];
    $mainArrayLength = mt_rand(5, 15);

    for ($j = 0; $j < $mainArrayLength; $j++) {
        $thirdTaskArray[$j] = [];
        $additionalArrayLength = mt_rand(5, 15);
        for ($k = 0; $k < $additionalArrayLength; $k++) {
            $thirdTaskArray[$j][$k] = rand();
        }
    }

    echo '<pre>';
    print_r($thirdTaskArray);
    echo '</pre>';
    ?>
    <div>
        <p>
            Массив содержит <?=$mainArrayLength?> элементов, каждый из которых содержит:
        </p>
        <ul>
            <?$allElements = 0?>
            <?foreach ($thirdTaskArray as $key => $value) {?>
                <li>
                    <?=$key . ' - ' . count($value) . ' элементов'?>
                    <?$allElements += count($value)?>
                </li>
            <?}?>
        </ul>
        <p>Элементов всего: <?=$allElements?></p>
    </div>






</section>








<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/footer.php";
?>
