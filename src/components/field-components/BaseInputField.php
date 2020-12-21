<?php
require_once __DIR__ . '/../../autoload.php';

class BaseInputField implements Component
{
    protected $label;
    protected $name;
    protected $type;
    protected $error;

    public function __construct($label, $name, $error, $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->error = $error;
    }


    public function __toString()
    {
        ob_start();
        ?>
        <div>
        <label>
            <?= $this->label ?>
        </label>
        <input type='<?= $this->type ?>' name='<?= $this->name ?>'>
            <div class="error"><?= $this->error ?></div>
        </div>
        <?php
        return ob_get_clean();
    }
}