<?php

function echoTop($value, $row = 0)
{
    ob_start();
    ?>
    <div style="
            position: absolute;
            background-color: white;
            z-index: 100000;
            border: 1px solid;
            padding: 0 .5em;
            top: <?= $row * 1.5 ?>em;">
        <?= var_dump($value) ?>
    </div>
    <?php
    echo ob_get_clean();
}
