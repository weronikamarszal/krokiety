<?php
require_once __DIR__ . '/../../autoload.php';

class WelcomeComponent extends BaseFormComponent implements Component
{

    public function __toString()
    {
        ob_start();
        ?>
        <img src="/krokiety/logotype.png">
        <?php
        return ob_get_clean();
    }

}